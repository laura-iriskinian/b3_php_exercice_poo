<?php
/*
 * ÉNONCÉ :
 * Créez une classe MusicAlbum avec les propriétés title, artist et tracks (tableau).
 * Ajoutez les getters/setters et une méthode addTrack() pour ajouter un morceau.
 * Ajoutez une méthode displayAlbum() qui affiche les infos et la liste des morceaux.
 * Instanciez un album, ajoutez des morceaux et affichez l'album.
*/

class MusicAlbum {
    protected $title;
    protected $artist;
    protected $tracks = [];

    public function __construct($title, $artist) {
        $this->title = $title;
        $this->artist = $artist;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getArtist() {
        return $this->artist;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setArtist($artist) {
        $this->artist = $artist;
    }

    public function addTrack($track) {
        $this->tracks[] = $track;
    }

    public function displayAlbum() {
        echo "Album: " . $this->getTitle() . "\n";
        echo "Artist: " . $this->getArtist() . "\n";
        echo "Tracks:\n";
        foreach ($this->tracks as $index => $track) {
            echo ($index + 1) . ". " . $track . "\n";
        }
    }
}

$album = new MusicAlbum("The Silver Scream", "Ice Nine Kills");
$album->addTrack("Enjoy Your Slay");
$album->addTrack("The American Nightmare");
$album->addTrack("Thank God It's Friday");
$album->displayAlbum();
