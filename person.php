<?php
class Person {
    private $firstname;
    private $lastname;
    
    public function setFirstname($pFirstname) {
        $this->firstname = $pFirstname;
    }
    public function getFirstname() {
        return $this->firstname;
    }
    public function setLastname($pLastname) {
        $this->lastname = $pLastname;
    }
    public function getLastname() {
        return $this->lastname;
    }
    public function speak() {
        return "Hello my name is " . $this->firstname . " " . $this->lastname;
    }
}
$person1 = new Person();
//$person1->firstname = "John";
//$person1->lastname = "Doe";
$person1->setFirstname("John");
$person1->setLastname("Doe");
var_dump($person1->speak());
//var_dump($person1);
//var_dump($person1->getFirstname());
//var_dump($person1->getLastname());
$person2 = new Person();
//$person2->firstname = "Jane";
//$person2->lastname = "Die";
$person2->setFirstname("Jane");
$person2->setLastname("Die");
var_dump($person2->speak());
