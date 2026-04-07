<?php
/*
 * ÉNONCÉ :
 * Créez une classe Contact avec les propriétés protected name, email et phone.
 * Ajoutez les getters/setters et une méthode displayContact() qui affiche les infos du contact.
 * Instanciez un contact et affichez ses informations.
*/

class Contact {
    protected $name;
    protected $email;
    protected $phone;

    public function __construct($name, $email, $phone) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function displayContact() {
        return "Name: " . $this->getName() . "\n" .
                "Email: " . $this->getEmail() . "\n" .
                "Phone: " . $this->getPhone() . "\n";
    }

}

$contact = new Contact("Jean", "jean@example.com", "0612345678");
echo $contact->displayContact();