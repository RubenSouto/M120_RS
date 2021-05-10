<?php
    class Ticket
    {
        public $von;
        public $bis;
        public $retour;
        public $mk;
        public $datum;
        public $klasse;
        public $anzahl;
        public $erm;

        public function __construct()
        {

        }

        public function updateData()
        {
            $this->von = isset($_POST['von']) ? $_POST['von']: "";
            $this->bis = isset($_POST['bis']) ? $_POST['bis']: "";
            $this->retour = isset($_POST['retour']) ? $_POST['retour']: "";
            $this->mk = isset($_POST['mk']) ? $_POST['mk']: "";
            $this->datum = isset($_POST['datum']) ? $_POST['datum']: "";
            $this->klasse = isset($_POST['klasse']) ? $_POST['klasse']: "";
            $this->anzahl = isset($_POST['anzahl']) ? $_POST['anzahl']: "";
            $this->erm = isset($_POST['erm']) ? $_POST['erm']: "";
        }
    }
?>