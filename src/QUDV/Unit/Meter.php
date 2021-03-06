<?php
namespace QUDV\Unit;
use QUDV\IUnit;
class Meter implements IUnit {

     public function id(){
        return $this->symbol().$this->name();
    }
    public function same(IUnit $unit){
        return $this->id() == $unit->id();
    }

    public function name(){
        return "meter";
    }

    public function symbol(){
        return "m";
    }

    public function description(){
        return "";
    }
}
