<?php

class Database{

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $conn;
    
  
    function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=m120_ruben", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            //echo "Connected successfully";
            } 
            catch(PDOException $e) {

                try {
                    $this->conn = new PDO("mysql:host=$this->servername", $this->username, $this->password);
                    // set the PDO error mode to exception
                    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "CREATE DATABASE m307_ruben";
        
                    // use exec() because no results are returned
                    $this->conn->exec($sql);
                    echo "Database created successfully";

                    try{
                        $this->conn = new PDO("mysql:host=$this->servername;dbname=m120_ruben", $this->username, $this->password);
                        // set the PDO error mode to exception
                        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                        $table = "CREATE TABLE ruben_bibliothek (
                            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                            bibliothek_buch VARCHAR(255) NOT NULL,
                            bibliothek_regal VARCHAR(255) NOT NULL DEFAULT '1OG 10L',
                            bibliothek_autor VARCHAR(255),
                            bibliothek_verfuegbar INT(50) DEFAULT 1,
                            bibliothek_beschreibung VARCHAR(255)
                            )";
                            
                        $this->conn->exec($table);

                        echo "Table MyGuests created successfully";


                        try {
                            $this->conn = new PDO("mysql:host=$this->servername;dbname=m307_ruben", $this->username, $this->password);
                            // set the PDO error mode to exception
                            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            $ins = $this->conn->prepare("INSERT INTO ruben_bibliothek (bibliothek_buch, bibliothek_autor, bibliothek_beschreibung) 
                            VALUES (:bibliothek_buch, :bibliothek_autor, :bibliothek_beschreibung)");
 
                            for($i=0;$i<10; $i++) {
                                $neu = array('bibliothek_buch' => 'buch'.$i, 'bibliothek_autor' => 'autor'.$i, 'bibliothek_beschreibung' => 'beschreibung'.$i);
                                $ins->execute($neu);   
                            }

                            header('Location: /m307-Ruben-Souto');
                        } catch (\Throwable $th) {
                            echo "values nicht eingefuelt";
                        }
                    }

                    catch(PDOException $e){
                        echo "tables konnten nicht erstellt werden";
                    }
                }

            catch(PDOException $e) 
            {
                echo "Datenbank konnte nicht erstellt werden";
            }
            header('Location: /m307-Ruben-Souto');
        }
    }
}

?>