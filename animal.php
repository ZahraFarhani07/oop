<?php
class Animal {
    public $name;
    public $legs = 4;
    public $cold_blooded = "no";
    public $kodok;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getname() {
        return $this->name;
    }

    public function getlegs() {
        return $this->legs;
    }

    public function getcoldblooded() {
        return $this->cold_blooded;
    }

    public function getjump() {
        return $this->jump;
    }
}
?>