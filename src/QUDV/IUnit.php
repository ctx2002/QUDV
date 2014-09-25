<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
