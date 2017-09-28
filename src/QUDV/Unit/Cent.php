<?php
namespace QUDV\Unit\NZ;
use QUDV\IUnit;

class Cent implements IUnit {
    public function id(){
        return $this->symbol().$this->name();
    }
    public function same(IUnit $unit){
        return $this->id() == $unit->id();
    }

    public function name(){
        return "cent";
    }

    public function symbol(){
        return "cent";
    }

    public function description(){
        return "cent";
    }
}