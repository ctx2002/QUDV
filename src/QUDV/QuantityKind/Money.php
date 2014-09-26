<?php
namespace QUDV\QuantityKind;
use QUDV\IQuantityKind;
class Money implements IQuantityKind
{

    public function name(){
        return "money";
    }
    public function symbol() {
        return "m";
    }
    public function description() {
        return "";
    }

    public function id() {
        return $this->symbol().$this->name();
    }
    public function same(IQuantityKind $kind) {
        return $this->id() == $kind->id();
    }
}
