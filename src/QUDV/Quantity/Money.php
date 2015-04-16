<?php

namespace QUDV\Quantity;

abstract class Money {

    /**
     * @var string $value is a string, since it a result of bc math library
     * ***/
    private $value;
    protected $scale;

    /**
     * @param $number string
     * @param $scale integer default is 2
     * ****/
    public function __construct($number, $scale = 2) {
        $this->value = (string)$number;
        $this->scale = $scale;
    }

    public function getValue() {
        return $this->value;
    }

    public function same(Money $money) {
        if ($this->unit()->same($money->unit())) {
            if ($this->quantityKind()->same($money->quantityKind())) {
                return true;
            }
        }

        return false;
    }

    public function __toString() {
        return "{value: [" . $this->getValue() . " ] , unit: [" . $this->unit()->id() . "],"
                . "quantity kind: [" . $this->quantityKind()->id() . "]}";
    }

    abstract public function unit();

    abstract public function quantityKind();

    protected function calculate($value, Money $otherMoney)
    {
        if (is_null($value)) {
            throw new Exception("value is null (perhaps divide by zero? )");
        }
        if ($this->same($otherMoney)) {
            $class = get_class($this);
            return new $class($value,$this->scale);
        } else {
            new \QUDV\Exception\NotSameType($this->unit()->id() . "is not same as".
                    $otherMoney->unit()->id());
        }
    }

    public function add(Money $money)
    {
        $value = bcadd($this->getValue(), $money->getValue(), $this->scale);
        return $this->calculate($value,$money);
    }

    public function minus(Money $money)
    {
        $value = bcsub($this->getValue(), $money->getValue(), $this->scale);
        return $this->calculate($value, $money);
    }

    public function multiply($multiplier)
    {
        $value = bcmul($this->getValue(), $multiplier, $this->scale);
        return $this->calculate($value, $this);
    }

    public function divide($denominator)
    {
        $value = bcdiv($this->getValue(), $money->getValue(), $this->scale);
        return $this->calculate($value, $money);
    }
    /**
     * http://martinfowler.com/eaaDev/quantity.html
     * **/
    public function divideAndSpread($denominator)
    {
        $result = new \SplFixedArray($denominator);

        $simpleResult = bcdiv($this->getValue(), $denominator, $this->scale);

        $class = get_class($this);
        for ($i = 0; $i < $denominator ; $i++)
        {
            $result[$i] = new $class($simpleResult,$this->scale);
        }


        $m = bcmul($simpleResult,$denominator,$this->scale);
        $remainderStr = bcsub($this->getValue(), $m, $this->scale);

        /****
         * if scale is 2, then remainder is 0.xx,2 decimal
         * if scale is 3, then remainder is 0.xxx, 3 decimal
         * so to return nearest int for remainder,for scale 2 we have to
         * multiply 100, for scale 3, we have to multiply 1000
         * ***
         */
        $multiply = 10;
        for ($i = 0; $i < $this->scale-1; $i++)
        {
            $multiply = $multiply * 10;
        }

        $midvalue = doubleval($remainderStr);
        $remainder = ($midvalue * $multiply);

        for ($i=0; $i < $remainder ; $i++)
        {
            $result[$i] = $result[$i]->add(new $class(1/$multiply));
        }
        return $result;
    }

    /***
     * 0 is equal, -1 is less, 1 is bigger
     * ***/
    public function compare(Money $money)
    {
        if ($this->same($money)) {
            return bccomp($this->getValue(), $money->getValue() , $this->scale);
        }
    }

}
