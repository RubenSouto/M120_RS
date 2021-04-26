<?php
    class Ticket
    {
        public $von;
        public $bis;
        public $retour;
        public $mk;
        public $datum;

        public function __construct()
        {
            $von = $_GET['von'];
            $bis = $_GET['bis'];
            $retour = $_GET['retour'];
            $mk = $_GET['mk'];
            $datum = $_GET['datum'];
        }
    }
?>