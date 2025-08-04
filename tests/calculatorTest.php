<?php

use PHPUnit\Framework\TestCase;
require "calculator.php";

class calculatorTest extends TestCase {
    public function test_assert_add_calc() {
        $calc = new calculator();
        $this->assertEquals($calc->add(10, 90), 100);
    }
    public function test_assert_sub_calc() {
        $calc = new calculator();
        $this->assertEquals($calc->sub(100, 90), 10);
    }
    public function test_assert_multi_calc() {
        $calc = new calculator();
        $this->assertEquals($calc->multi(10, 10), 100);
    }
    public function test_assert_div_calc() {
        $calc = new calculator();
        $this->assertEquals($calc->div(100, 10), 10);
    }
}