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
            $this->ticket->von = "Frauenfeld";

            $this->ticket->bis = "Weinfelden";
            $this->view('home/index', ['name' => $this->ticket->von]);
        }
    }

?>