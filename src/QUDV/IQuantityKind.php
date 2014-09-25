<?php

namespace QUDV;

interface  IQuantityKind {
    public function name();
    public function symbol();
    public function description();
    public function id();
    public function same(IQuantityKind $kind);
}
