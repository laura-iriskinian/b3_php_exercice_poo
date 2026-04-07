<?php
/*
 * ÉNONCÉ :
 * Un enum est déjà présent, il faudra l'utiliser pour la propriété status de la classe Task.
 * Créez une classe Task avec les propriétés protected title, description et status (par défaut TODO).
 * Ajoutez une méthode markAsDone() qui change le status en DONE.
 * Ajoutez une méthode display() qui affiche les infos de la tâche.
 * Instanciez une tâche, affichez ses infos, puis marquez-la comme terminée et affichez à nouveau.
 * Note : Pour afficher le status, utilisez $this->status->value pour obtenir la valeur de l'enum.
*/

enum TaskStatus: string
{
    case TODO = "à faire";
    case DONE = "terminée";
}

class Task {
    protected $title;
    protected $description;
    protected TaskStatus $status;

    public function __construct($title, $description) {
        $this->title = $title;
        $this->description = $description;
        $this->status = TaskStatus::TODO; 
    }

    public function markAsDone() {
        $this->status = TaskStatus::DONE; 
    }

    public function display() {
        return "Title: " . $this->title . "\n" .
                "Description: " . $this->description . "\n" .
                "Status: " . $this->status->value . "\n"; 
    }
}

$task = new Task("Buy groceries", "Milk, Bread, Eggs");
echo $task->display();