<?php 

class User {
    // Static Properties & Methods
    public static $nextId = 0; //exists once per class
    public $myId;

    public static function printId($id) {
        return $id;
    }
    public static function userId() {
        return "User id is: " . self::$nextId;
    }
}



// $user = new User("Jeremy", 45);
// $user->myId = 10;

// echo $user->myId;
// echo "<br>";
echo User::$nextId;
echo "<br>";
echo User::printId(2);
echo "<br>";
echo User::userId();