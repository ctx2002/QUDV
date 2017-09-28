<?php

namespace QUDV\Unit\NZ;
use QUDV\IUnit;
class Dollar implements IUnit {
    public function id(){
        return $this->symbol().$this->name();
    }
    public function same(IUnit $unit){
        return $this->id() == $unit->id();
    }

    public function name(){
        return "dollar";
    }

    public function symbol(){
        return "$";
    }

    public function description(){
        return "dollar";
    }
}