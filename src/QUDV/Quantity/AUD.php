<?php
namespace QUDV\Quantity;

class AUD extends Money {

    public function unit()
    {
        return new \QUDV\Unit\AUD();
    }

    public function quantityKind()
    {
        return new \QUDV\QuantityKind\Money();
    }

    public function add(Money $money)
    {
        $v = $this->calculate("bcadd", $this, $money);
        return new \QUDV\Quantity\AUD($v);
    }

    public function minus(Money $money) {

        $v = $this->calculate("bcsub", $this, $money);
        return new \QUDV\Quantity\AUD($v);
    }

    public function multiply(Money $money) {
        $v = $this->calculate("bcmul", $this, $money);
        return new \QUDV\Quantity\AUD($v);
    }

    public function divide(Money $money) {
        $v= $this->calculate("bcdiv", $this, $money);
        return new \QUDV\Quantity\AUD($v);
    }

}
