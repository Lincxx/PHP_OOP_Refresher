<?php

class User {
    public $name = "John";
    public $age;

    final public function printName($name){
        return "My name is " . $name;
    }
}

class Manager extends User {
    public $name = "David";
    
}

$manager = new Manager();
echo $manager->printName("Tim");