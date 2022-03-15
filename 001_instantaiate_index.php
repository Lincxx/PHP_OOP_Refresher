<?php 

// Define a class
class User {
  //Properties 
  public $name;


  //Methods 
  public function sayHello() {
    return $this->name . " says hello";
  }
}

// Instantiate user object from user class
$user = new User();
$user->name = "jeremy";
// echo $user->name;
echo "<br>";
echo $user->sayHello();

?>
