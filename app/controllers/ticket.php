<?php
    class Ticket extends Controller
    {
        public function show($von){
            $this->view('tickets/show', ['von' => $von]);
        }
    }
    
?>