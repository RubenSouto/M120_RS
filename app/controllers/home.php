<?php

    class Home extends Controller
    {
        protected $ticket;
        public function __construct()
        {
            $this->ticket = $this->model('ticket');   
        }
    
        public function index($name = '')
        {
            $this->ticket->updateData();
            $path = "home/index";

            if ($name == 'Startseite') {
                $this->view('/_style/Startseite');
            }
            if ($name == 'Kauf_Seite') {
                $this->view('/_style/Kauf_Seite', ['von' => $this->ticket->von, 'bis' => $this->ticket->bis]);
                $this->view($path, ['von' => $this->ticket->von, 'bis' => $this->ticket->bis]);
            }
            if ($name == 'Uebersicht') {
                $this->view('/_style/Uebersicht', ['von' => $this->ticket->von, 'bis' => $this->ticket->bis, 'retour' => $this->ticket->retour, 'mk' => $this->ticket->mk, 'datum' => $this->ticket->datum, 'klasse' => $this->ticket->klasse, 'anzahl' => $this->ticket->anzahl, 'erm' => $this->ticket->erm]);
                $this->view($path, ['von' => $this->ticket->von, 'bis' => $this->ticket->bis, 'retour' => $this->ticket->retour, 'mk' => $this->ticket->mk, 'datum' => $this->ticket->datum, 'klasse' => $this->ticket->klasse, 'anzahl' => $this->ticket->anzahl, 'erm' => $this->ticket->erm]);
            }
            if ($name == 'Hilfe') {
                $this->view('/_style/Hilfe');
            }
        }
    }

?>