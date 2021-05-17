<?php
    class Ticket extends Controller
    {
        public function show($von){
            $this->view('/_style/Uebersicht', ['von' => $this->ticket->von, 'bis' => $this->ticket->bis, 'retour' => $this->ticket->retour, 'mk' => $this->ticket->mk, 'datum' => $this->ticket->datum, 'klasse' => $this->ticket->klasse, 'anzahl' => $this->ticket->anzahl, 'erm' => $this->ticket->erm]);
        }
    }
    
?>