<?php


class calculator {
    public function add($a, $b) {
        return $a + $b;
    }
    public function sub($a, $b) {
        return $a - $b;
    }
    public function multi($a, $b) {
        return $a * $b;
    }
    public function div($a, $b) {
        return $a / $b;
    }
    public function models($x, $y) {
        return $x % $y;
    }
}