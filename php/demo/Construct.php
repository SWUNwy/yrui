<?php
class Person{
    private $name;
    private $age;
    private $gender;

    public function __construct($name,$age,$gender){
        $this->setName($name);
        $this->setAge($age);
        $this->setGender($gender);
    }

    public function setName($name){
        echo $this->name = $name;
    }

    

}

// $peron = new Person("yrui",24,'男');
$person = new Person("yrui",24,'男');

