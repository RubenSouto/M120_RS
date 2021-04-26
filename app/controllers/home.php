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
            $path = "home/index";

            if ($name == 'Kauf_Seite') {
                $this->view('/_style/Kauf_Seite');
            }
            if ($name == 'Uebersicht') {
                $this->view('/_style/Uebersicht');
                $path = "tickets/show";
                $this->ticket->von = "lul";
                $this->view($path, ['name' => $this->ticket->von]);
            }
            if ($name == 'Hilfe') {
                $this->view('/_style/Hilfe');
            }
            
            $this->view($path, ['name' => $name]);
        }
    }

?>