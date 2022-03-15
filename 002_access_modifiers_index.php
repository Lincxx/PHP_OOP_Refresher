<?php 

// Access modifiers = Public, Private, Protected
// private and protected will return this Fatal error: Uncaught Error: Cannot access private property, when calling outside of the class

class User {
  //Properties 
  private $name;

  protected function sayHell(){
    return "Hello";
  }

}

$user = new User();
// $user->name = "Jeremy";


// echo $user->name;
echo $user->sayHello();
?>
