<?php


class user {
    private $connection;
    public function __construct() {
        $this->connection = new mysqli('localhost', 'root', '', 'phpunit_crud_testing');
    }

    public function add($name, $email) {
        $result = $this->connection->query("INSERT INTO `user` (`name`, `email`) VALUES ('$name', '$email') ");
        if($this->connection->affected_rows == 1) {
            return true;
        } else {
            return false;
        }
    }
}