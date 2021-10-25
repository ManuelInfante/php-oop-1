lines (28 sloc)  971 Bytes
   
<?php
    class Film {
        public $titolo;
        public $regista;
        public $durata;
        public $data_uscita;

        function __construct($_titolo, $_regista, $_durata , $_data_uscita)
        {
            $this->titolo=$_titolo;
            $this->regista=$_regista;
            $this->durata=$_durata;
            $this->data_uscita=$_data_uscita;
        }

        function getTitolo(){
            return $this->titolo;
        }

    }

    $film1 = new Film('Escape Room 2 - Gioco mortale', 'Adam Robitel', 76 , 15/7/2021);
    $film2 = new Film('Black Widow', 'Cate Shortland', 127 , 9/7/2021);

    var_dump($film1, $film2);

    echo $film1->getTitolo();
?>