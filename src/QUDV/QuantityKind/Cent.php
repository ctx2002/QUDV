<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace QUDV\QuantityKind;
use QUDV\IQuantityKind;
/**
 * Description of Cent
 *
 * @author anru
 */
class Cent implements IQuantityKind
{
    public function name(){
        return "cent";
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
