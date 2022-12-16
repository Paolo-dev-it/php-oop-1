<?php 

    class movies {
        public $title;
        public $author;
        public $year;
        public $genre;

        function __construct($titolo, $autore, $anno, $genere){
            $this->title = $titolo;
            $this->author = $autore;
            $this->year = $anno;
            $this->genre = $genere;
        }

        public function Adult(){
            if ($this->year >= 18){
                return "L'utente ha selezionato un film di $this->genre chiamato $this->title creato da $this->author e avendo $this->year anni PUÒ vedere i film senza essere accompagnato da adulti <br/>";
            } else {
                return "L'utente ha selezionato un film di $this->genre chiamato $this->title creato da $this->author e avendo $this->year anni NON può vedere i film senza essere accompagnato adulti <br/>";
            }
        }

        public function showOnScreen(){
        echo "<strong>Title:</strong> " . $this ->title;
        echo "<br>";
        echo "<strong>Genre:</strong> " . $this ->author;
        echo "<br>";
        echo "<strong>Language:</strong> " . $this ->year;
        echo "<br>";
        echo "<strong>Vote:</strong> " . $this ->genre;
        echo "<br>";
        echo $this->Adult();
        echo "<br>";
        echo "<br>";
        echo "<br>";
  }

    }

?>