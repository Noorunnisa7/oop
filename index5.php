<?php

abstract class Car{
    abstract public function CarDetails();
    abstract public function CarColor();
    abstract public function CarModel();

}

class Car1 extends Car{
   public function CarDetails()
   {
    echo "THis is abtract Method";
   }
   public function CarColor()
   {
    echo "THis is abtract Method";
   }
   public function CarModel()
   {
    echo "THis is abtract Method";
   }
}


class Car2{

}

$obj1 = new Car1();
$obj1->CarDetails();

echo "<br>";


class Animal{
    public function MakeSound(){
        echo "Animal Sound";
    }
}

class Cat extends Animal{
    public function MakeSound()
    {
        echo "The Cat Meows";
    }
}


class Dog extends Animal{
    public function MakeSound()
    {
        echo "The Dog Barks";
    }
}

class Donkey extends Animal{
    public function MakeSound()
    {
        echo "The Donkey .....";
    }
}

$animal = [new Cat(), new Dog() , new Donkey()];
foreach($animal as $value){
    $value->MakeSound();
    echo "<br>";
}



// $cat = new Cat();
// $cat->MakeSound();
// $dog = new Dog();
// $dog->MakeSound();
// $Donkey = new Donkey();
// $Donkey->MakeSound();

//----------------------------------
// echo "<br>";
// echo rand();
// echo "<br>";
// echo rand(1,100);
// echo "<br>";



// $password = "Nisa@0987654321";
// echo $password;
// echo "<br>";

// echo md5($password);
// echo "<br>";
// echo sha1($password);

// insert into register (name , email , pass) value ($name , $email , $md5Pass)

?>