<?php

use PHPUnit\Framework\TestCase;
require "calculator.php";

// this is class to make all test about calculator
class calculatorTest extends TestCase {
    private $myObject;
    protected function setUp(): void
    {
        $this->myObject = new calculator();
    }
    // this function to make test about add function in calculator
    // use Annotations Group
    /**
     * @group baseFunction
     */
    public function test_assert_add_calc() {
        $this->assertEquals($this->myObject->add(10, 90), 100);
    }
    // this function to make test about sub function in calculator
    /**
     * @group baseFunction
     */
    public function test_assert_sub_calc() {
        $this->assertEquals($this->myObject->sub(100, 90), 10);
    }
    // this function to make test about multi function in calculator
    /**
     * @group baseFunction
     */
    public function test_assert_multi_calc() {
        $this->assertEquals($this->myObject->multi(10, 10), 100);
    }
    // this function to make test about div function in calculator
    /**
     * @group baseFunction
     */
    public function test_assert_div_calc() {
        $this->assertEquals($this->myObject->div(100, 10), 10);
    }
    // this function to make test about models function in calculator
    /**
     * @group advanceFunction
     */
    public function test_assert_models_calc() {
        $this->assertEquals($this->myObject->models(11, 2), 1);
    }
}