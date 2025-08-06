<?php


require 'database/user.php';
use PHPUnit\Framework\TestCase;

class userTest extends TestCase {
    public function test_insert_new_user() {
        $user = new user();
        $this->assertTrue($user->add('test email', 'test password'));
    }
}