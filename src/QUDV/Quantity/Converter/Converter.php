<?php
namespace QUDV\Quantity\Converter;

abstract class Converter
{
    abstract public function factor();
    abstract public function convert();
    abstract public function scale();
}
