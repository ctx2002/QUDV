<?php

namespace QUDV\Unit\NZ;
use QUDV\IUnit;

class NZCent implements IUnit {
    public function id(){
        return $this->symbol().$this->name();
    }
    public function same(IUnit $unit){
        return $this->id() == $unit->id();
    }

    public function name(){
        return "NZCent";
    }

    public function symbol(){
        return "$";
    }

    public function description(){
        return "new zealand cent";
    }
}