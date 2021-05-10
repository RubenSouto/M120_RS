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

            if ($name == '') {
                $this->view('/_style/Startseite');
            }
            if ($name == 'Kauf_Seite') {
                $this->view('/_style/Kauf_Seite');
                $this->view($path, ['von' => $this->ticket->von, 'bis' => $this->ticket->bis, 'retour' => $this->ticket->retour, 'mk' => $this->ticket->mk, 'datum' => $this->ticket->datum]);
            }
            if ($name == 'Uebersicht') {
                $this->view('/_style/Uebersicht');
                $this->view($path, ['von' => $this->ticket->von, 'bis' => $this->ticket->bis, 'retour' => $this->ticket->retour, 'mk' => $this->ticket->mk, 'datum' => $this->ticket->datum]);
            }
            if ($name == 'Hilfe') {
                $this->view('/_style/Hilfe');
            }
        }
    }

?>