<?php
    class DB {
        protected $pdo;

        public function __construct()
        {
            try{
                $this->pdo = new PDO('mysql:host=localhost; dbname=php47', 'root', '');
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }catch(PDOException $e){
                die('Could not connect! '.$e->getMessage());
            }
        }
    }
?>