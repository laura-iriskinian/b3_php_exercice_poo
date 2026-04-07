
<?php
/*
 * ÉNONCÉ :
 * Créez une classe BlogPost avec les propriétés protected title, content, createdAt (de type DateTime).
 * Ajoutez les getters/setters 
 * Ajouter une méthode getExcerpt($length) qui retourne un extrait du contenu.
 * Instanciez un article, affichez son titre, sa date de création et un extrait de 50 caractères.
*/

class BlogPost {
    protected $title;
    protected $content;
    protected DateTime $createdAt;

    public function getTitle(){
        return $this->title;
    }

    public function getContent(){
        return $this->content;
    }

    public function getCreatedAt(){
        return $this->createdAt;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function setContent($content){
        $this->content = $content;
    }

    public function setCreatedAt(DateTime $createdAt){
        $this->createdAt = $createdAt;
    }

    public function getExcerpt($length){
        return substr($this->content, 0, $length) . '...';
    }
}

$post = new BlogPost();
$post->setTitle("My First Blog Post");
$post->setContent("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.");
$post->setCreatedAt(new DateTime());

echo "Title: " . $post->getTitle() . "\n";
echo "Created At: " . $post->getCreatedAt()->format('Y-m-d H:i:s') . "\n";
echo "Excerpt: " . $post->getExcerpt(50) . "\n";

