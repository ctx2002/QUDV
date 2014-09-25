<?php
namespace QUDV\QuantityKind;
use QUDV\QuantityKind;
/**
 * Description of Length
 *
 * @author anru
 */
class Length implements QuantityKind
{
    public function name(){
        return "length";
    }
    public function symbol() {
        return "L";
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
