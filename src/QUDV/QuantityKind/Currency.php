<?php
namespace QUDV\QuantityKind;
use QUDV\IQuantityKind;
class Currency implements IQuantityKind
{
    public function name(){
        return "currency";
    }
    public function symbol() {
        return "c";
    }
    public function description() {
        return "currency";
    }
    public function id() {
        return $this->symbol().$this->name();
    }
    public function same(IQuantityKind $kind) {
        return $this->id() == $kind->id();
    }
}
