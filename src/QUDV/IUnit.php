<?php
namespace QUDV;

/**
 *
 * @author anru
 */
interface IUnit {
    public function id();
    public function same(IUnit $unit);
    public function name();
    public function symbol();
    public function description();
}
