<?php 
  class User {
    public $email;
    public $username;

    public function hello(){
      return "hello";
    }
  }
  


  class Admin extends User {
    public $level;
  }


$user = new User();
$user->username = "Dary";
$user->email = "Dary@mail.com";

$admin = new Admin();
$admin->username = "John";
$admin->email = "John@mail.com";
$admin->level = "Super Admin";

echo $admin->email . " " . $admin->level;

?>
