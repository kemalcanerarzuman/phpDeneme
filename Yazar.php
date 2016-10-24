<?php
 class Yazar {
   private $name;
   private $surname;
   private $birth_year;

   public function __construct($name, $surname, $birth_year) {
     $this->name = $name;
     $this->surname = $surname;
     $this->birth_year = $birth_year;
   }

   public function __get($parameter) {
     if(property_exists($this, $parameter)) { return $this->parameter;}
     return false;
   }
   public function __set($property, $value) {
     if(property_exists($this, $property)) { return $this->pproperty = $value;}
     return false;
   }
    public function getName() {
     return $this->name;
    }
    public function getSurname() {
    return $this->surname;
    }
    public function getBirthYear() {
     return $this->birth_year;
    }
    public function setName($name) {
     $this->name = $name;
    }
    public function setSurname($surname) {
     $this->surname = $surname;
    }
    public function setBirthYear($birth_year) {
     $this->birth_year = $birth_year;
    }
  }
 ?>
