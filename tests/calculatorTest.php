<?php

use PHPUnit\Framework\TestCase;
require "calculator.php";

// this is class to make all test about calculator
class calculatorTest extends TestCase {
    // this function to make test about add function in calculator
    public function test_assert_add_calc() {
        $calc = new calculator();
        $this->assertEquals($calc->add(10, 90), 100);
    }
    // this function to make test about sub function in calculator
    public function test_assert_sub_calc() {
        $calc = new calculator();
        $this->assertEquals($calc->sub(100, 90), 10);
    }
    // this function to make test about multi function in calculator
    public function test_assert_multi_calc() {
        $calc = new calculator();
        $this->assertEquals($calc->multi(10, 10), 100);
    }
    // this function to make test about div function in calculator
    public function test_assert_div_calc() {
        $calc = new calculator();
        $this->assertEquals($calc->div(100, 10), 10);
    }
}