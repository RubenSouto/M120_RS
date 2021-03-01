<?php

    class Home extends Controller
    {
        public function index()
        {
            $name = 'Ruben';
            $this->view('home/index', ['name' => $name]);
        }
    }

?>