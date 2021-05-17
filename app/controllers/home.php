<?php

    class Home extends Controller
    {
        protected $ticket;
        public function __construct()
        {
            $this->ticket = $this->model('ticket');   
        }
    
        public function index($name = '', $fehler = '')
        {
            $this->ticket->updateData();
            $path = "home/index";

            if ($name == 'Startseite') {
                $this->view('/_style/Startseite');
                if ($fehler != '') {
                    $path = "tickets/show";
                    $this->view($path, ['fehler' => "Sie müssen zwei Verschiedene Orte angeben!"]);
                }
            }

            if ($name == 'Kauf_Seite') {
                if ($this->ticket->vonBisCheck()) {
                    $this->view('/_style/Kauf_Seite', ['von' => $this->ticket->von, 'bis' => $this->ticket->bis]);
                }
                else {
                    header("LOCATION: http://localhost/M120_RS/public/Startseite/fehler");
                }
            }

            if ($name == 'Uebersicht') {
                $this->ticket->berechnePreis();
                $this->view('/_style/Uebersicht', ['von' => $this->ticket->von, 'bis' => $this->ticket->bis, 'retour' => $this->ticket->retour, 'mk' => $this->ticket->mk, 'datum' => $this->ticket->datum, 'klasse' => $this->ticket->klasse, 'anzahl' => $this->ticket->anzahl, 'erm' => $this->ticket->erm, 'preis' => $this->ticket->preis]);
            }

            if ($name == 'Hilfe') {
                $this->view('/_style/Hilfe');
            }
        }
    }

?>