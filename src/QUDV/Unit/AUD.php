<?php
namespace QUDV\Unit;
use QUDV\IUnit;
class AUD implements IUnit {

    public function id(){
        return $this->symbol().$this->name();
    }
    public function same(IUnit $unit){
        return $this->id() == $unit->id();
    }

    public function name(){
        return "AUD";
    }

    public function symbol(){
        return "$";
    }

    public function description(){
        return "";
    }
    
}
