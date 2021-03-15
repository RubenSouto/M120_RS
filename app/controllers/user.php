<?php
    class User extends Controller
    {
        public function show($name){
            $this->view('users/show', ['name' => $name]);
        }
    }
    
?>