<?php

//public

Class Example{
    public $name; 

    public function Display(){
        echo "Public Method and Member".$this->name;
    }
}

$exObj = new Example();
$exObj->name = "Noor";
echo $exObj->name;
echo "<br>";
$exObj->Display();
echo "<br>";
echo "<br>";



// Private 
class Example2{
    private $name = "Private Variable";

    private function ReavelData(){
        echo "Name: ".$this->name;
    }

    public function DisplayData(){
        echo "Display Function <br>";
        $this->ReavelData();
    }

}

$priObj = new Example2();
// $priObj->name;   // error
// $priObj->ReavelData();  // error 
$priObj->DisplayData();   // can access





// Inheritance 

class Animal{
    public function Sound(){
        echo "<p>Animal Sound</p>";
    }
}

class Cat extends Animal{
    public function Display(){
        echo "<p>The Cat meows</p>";
    }
}

class Dog extends Animal{
     public function Display(){
        echo "<p>The Dog barks</p>";
    }
}

$cat = new Cat();
$cat->Sound();
$cat->Display();

$dog = new Dog();
$dog->Sound();
$dog->Display();



// public sub class 

class Test{
    public function Data(){
        echo "This is Parent class Method<br>";
    }

    private function HiddenData(){
        echo "Private Method";
    }

    protected function ProtectedFun(){
        echo "<p>This is protected Method</p>";
    }
    public function ShowData(){
        $this->ProtectedFun();
    }
}

class Test1 extends Test{
    public function Display(){
        $this->Data();
        $this->ProtectedFun();
        // $this->HiddenData(); // error
        echo "This is subclass function";
    }

}


$test = new Test1();
$test->Display();
// $test->HiddenData(); // error
// $test->ProtectedFun(); // error


$prOBJ = new Test();
// $prOBJ->ProtectedFun(); //error 
$prOBJ->ShowData();



class DB{
    private $server = "Localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "abc";

    public function con(){
        return mysqli_connect($this->server, $this->user, $this->pass , $this->dbname);
    }
}

$con = new DB();
$con->con();



?>