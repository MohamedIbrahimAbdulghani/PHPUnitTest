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

    public function delete($id) {
        $result = $this->connection->query("DELETE FROM `user` WHERE `id` = '$id' ");
        if($this->connection->affected_rows == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function select() {
        $result = $this->connection->query("SELECT * FROM `user` ");
        $all = [];
        while($data = $result->fetch_assoc()) {
            $all[] = $data;
        }
        return $all;
    }

    public function update($id, $name, $email) {
        $result = $this->connection->query("UPDATE `user` SET `name` = '$name', `email` = '$email' WHERE `id` = '$id' ");
        if($this->connection->affected_rows == 1) {
            return true;
        } else {
            return false;
        }
    }
}