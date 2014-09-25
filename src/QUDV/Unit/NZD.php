<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace QUDV\Unit;
use QUDV\IUnit;
class NZD implements IUnit {
    public function id(){
        return $this->symbol().$this->name();
    }
    public function same(IUnit $unit){
        return $this->id() == $unit->id();
    }

    public function name(){
        return "NZD";
    }

    public function symbol(){
        return "$";
    }

    public function description(){
        return "";
    }
}
