<?php


require 'database/user.php';
use PHPUnit\Framework\TestCase;

class userTest extends TestCase {
    private $object;
    // this function to don't repeated object in a new functions write ( $this->object ) don't write $user = new user(); in any function
    /*
        *-* Don't Try Yourself  ( DRY )
    */
    protected function setUp():void {
        $this->object = new user();
    }
    public function test_insert_new_user() {
        $this->assertTrue($this->object->add('test email', 'test password'));
    }
}