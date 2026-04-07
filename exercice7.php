<?php
/*
 * ÉNONCÉ :
 * La classe Person existe déjà avec firstName et lastName.
 * 1. Créez une classe Student qui hérite de Person et ajoute les propriétés protected $studentNumber, $school, $class.
 * 2. Ajoutez les getters/setters pour ces propriétés et une méthode displayStudent() qui affiche toutes les infos.
 * 3. Instanciez un Student et affichez ses informations.
 */

class Person
{
    

    public function __construct(protected string $firstName, protected string $lastName)
    {

    }
    public function getFirstName(): string { return $this->firstName; }
    public function setFirstName(string $firstName): void { $this->firstName = $firstName; }
    public function getLastName(): string { return $this->lastName; }
    public function setLastName(string $lastName): void { $this->lastName = $lastName; }
    public function getAge(): int { return $this->age; }
    public function setAge(int $age): void { $this->age = $age; }
}

$person = new Person("Alice", "Martin");
echo $person->getFirstName() . " " . $person->getLastName() . "<br>";


class Student extends Person {
    protected $studentNumber;
    protected $school;
    protected $class;

    public function getStudentNumber(){ 
        return $this->studentNumber; 
        }

    public function setStudentNumber($studentNumber){ 
        $this->studentNumber = $studentNumber; 
        }

    public function getSchool(){ 
        return $this->school; 
        }
        
    public function setSchool($school){ 
        $this->school = $school; 
        }

    public function getClass(){ 
        return $this->class; 
        }

    public function setClass($class){ 
        $this->class = $class; 
        }

    public function displayStudent() {
        return "Name: " . $this->getFirstName() . " " . $this->getLastName() . "\n" .
                "Student Number: " . $this->getStudentNumber() . "\n" .
                "School: " . $this->getSchool() . "\n" .
                "Class: " . $this->getClass() . "\n";
    }
}