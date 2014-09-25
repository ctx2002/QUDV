<?php
namespace QUDV\QuantityKind;

/**
 * Description of Currency
 *
 * @author anru
 */
class Currency implements IQuantityKind
{
    public function name(){
        return "currency";
    }
    public function symbol() {
        return "c";
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
