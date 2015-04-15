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
        $this->value = $number;
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
            return new $class($value);
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

    public function multiply(Money $money)
    {
        $vlue = bcmul($this->getValue(), $money->getValue(), $this->scale);
        return $this->calculate($value, $money);
    }

    public function divide(Money $money)
    {
        $value = bcdiv($this->getValue(), $money->getValue(), $this->scale);
        return $this->calculate($value, $money);
    }

}
