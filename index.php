<?php 
  class User {
    public $email;
    public $username;

    public function hello(){
      return "hello";
    }
  }
  


  class Admin extends User {

  }


$user = new User();
$user->username = "Dary";
$user->email = "Dary@mail.com";

$admin = new Admin();
$admin->username = "Dary22";
$admin->email = "Dar2y2@mail.com";

echo $admin->email;

?>
