<?php 

class User {
    public $name; 
    public $age; 

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    //clean code - this auto after all the code is executed. 
    public function __destruct() {
        echo "Destructor works";
    }

    public function myAge(){
        return "My age is " . $this->age;
    }
}

$u = new User("Jeremy", 45);

echo $u->myAge();
