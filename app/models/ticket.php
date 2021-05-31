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
        public $preis;
        private $streckenPreis = 10;

        public function __construct()
        {

        }

        public function updateData()
        {
            $this->von = isset($_POST['von']) ? $_POST['von']: "";
            $this->bis = isset($_POST['bis']) ? $_POST['bis']: "";
            $this->retour = isset($_POST['retour']) ? $_POST['retour']: "";
            $this->mk = isset($_POST['mk']) ? $_POST['mk']: "";
            $this->klasse = isset($_POST['klasse']) ? $_POST['klasse']: "";
            $this->anzahl = isset($_POST['anzahl']) ? $_POST['anzahl']: "";
            $this->erm = isset($_POST['erm']) ? $_POST['erm']: "";
            $this->datum = isset($_POST['datum']) ? $_POST['datum']: "";
            $this->preis = isset($_POST['preis']) ? $_POST['preis']: "";


            //Bessere Werte setzen für Checkbox-Variablen
            if ($this->retour == "on") {
                $this->retour = "Ja";
            }
            else{
                $this->retour = "Nein";
            }
            if ($this->mk == "on") {
                $this->mk = "Ja";
            }
            else{
                $this->mk = "Nein";
            }

            if ($this->klasse == "on") {
                $this->klasse = "Ja";
            }
            else{
                $this->klasse = "Nein";
            }
        }

        public function berechnePreis()
        {
            $this->preis = $this->streckenPreis * $this->anzahl;

            if($this->mk != "Nein"){
                $this->preis = $this->preis * 6;
            }

            if($this->klasse != "Nein"){
                $this->preis = $this->preis * 2;
            }

            if($this->retour != "Nein"){
                $this->preis = $this->preis * 2;
            }
            
            if ($this->erm != "" || $this->erm != "Keine") {
                if ($this->erm == "Halbtax") {
                    $this->preis = $this->preis / 2;
                }
                if ($this->erm == "Ticket ist für Kind unter 6 Jahren (fahren gratis)") {
                    $this->preis = $this->preis * 0;
                }
                if ($this->erm == "Ticket ist für Kind zwischen 6-16 Jahren (halber Preis)") {
                    $this->preis = $this->preis / 2;
                }
            }
        }

        public function vonBisCheck()
        {
            if ($this->von == $this->bis && $this->von != "") {
                return false;
            }
            return true;
        }
    }
?>