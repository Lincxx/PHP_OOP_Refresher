<?php 

class User {
  private $name; 
  private $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

//   public function getName() {
//       return $this->name;
//   }

//   public function setName($name) {
//     $this->name = $name;
//   }

// __get Magic method
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        return $this;
    }
}

$u = new User("Jeremy", 45);

// echo $u->getName();
$u->__set('name', 'jerry');
echo $u->__get('name');