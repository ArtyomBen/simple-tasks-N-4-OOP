<?php

//1

// trait StringTrait {
//     private $stringWord;
//     public function measureLength ($length) {
//         $Word = $this -> stringWord = $length;
//         return strlen ($Word);
//     }
//     public function makeUppercase () {
//         $Word = $this -> stringWord;
//         return strtoupper ($Word);
//     }
// }
// class StringLengthCalcualte {
//     use StringTrait;
// }
// class MyClass {
//     private string $message;
//     use StringTrait;
// }
// $length = new StringLengthCalcualte ();
// $class = new MyClass ();
// echo$class -> measureLength('Length') . '<br>';
// echo $class -> makeUppercase() . '<br>';
// echo $length -> measureLength ('Length') . '<br>';
// echo $length -> makeUppercase ();

//2.

// namespace Core\Admin;
// class Controller
// {
// }

// namespace Users;
// use Core\Admin\Controller;
// class Page extends Controller{
// }

//3.

class User {
private $name;
private $age;
private $height; // in meters
private $isMarried;
private $childrenCount;
    public function __construct (string $name, int $age, float $height, string $isMarried, int $childrenCount) {
        $this -> name = $name;
        $this -> age = $age;
        $this -> height = $height;
        $this -> isMarried = $isMarried;
        $this -> childrenCount = $childrenCount;
    }
    public function get_name () : string {
        return $this -> name;
    }
    public function get_age () : int {
        return $this -> age;
    }
    public function get_height () : float {
        return $this -> height;
    }
    public function get_isMarried () : string {
        return $this -> isMarried;
    }
    public function get_childrenCount() : int {
        return $this -> childrenCount;
    }
}
$some = new User ('Garry', 15, 1.70, 'nop', 0);
echo 'Name: ' . $some -> get_name() . '<br>';
echo 'Age: ' . $some -> get_age() . '<br>';
echo 'Heigth: ' . $some -> get_height() . '<br>';
echo 'IsMarried: ' . $some -> get_isMarried() . '<br>';
echo 'ChildrenCount: ' . $some -> get_childrenCount();

//4

//4.1

    $AsomeWord = 'SomeText';
    $pattern = '/^[A-Za-z_]+/';
    if (preg_match($pattern, trim($AsomeWord))){
         echo '<br><br>' . 'good' . '<br>';
    }else {
        echo '<br><br>' . 'wrong';
    }


//4.2

$string = 'Programming';
$new_string = 'SomeProgMen';
$pattern = '/Progra(m){2}ing/';
if (preg_match($pattern, $new_string)){
    echo 'new_string is in string';
}else {
    echo 'no';
}

//4.3 

$someText = 'Love Programming';
$pattern = '/\s/';

if (preg_match($pattern, $someText)){
    echo ' <br>' . trim ($someText);
    //or preg_replace()
}else {
    echo '<br>' . 'nop';
}


//5

$fileName = 'someFileForTryCatch.php';
try {
    if (!file_exists($fileName)){
        throw new Exception('error');
    }
    
}catch (Exception $e){
    echo $e -> getMessage();
}
//echo success;

?>