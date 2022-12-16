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
                return "L'utente ha selezionato un film di $this->genre chiamato $this->title creato da $this->author e avendo $this->year anni può vedere i film senza essere accompagnato da adulti";
            } else {
                return "L'utente ha selezionato un film di $this->genre chiamato $this->title creato da $this->author e avendo $this->year anni NON può vedere i film senza essere accompagnato adulti";
            }
        }
    }

?>