<?php

    class Connect
    {
        private $dsn   = 'mysql:host=localhost;dbname=php0121e_manager';
        private $user  = 'root';
        private $passw = '';
        protected $pdo = null;

        public function __construct()
        {
            try {
                $this->pdo = new PDO($this->dsn, $this->user, $this->passw);
                $this->pdo->query("SET NAMES utf8");
            }catch (PDOException $e){
                echo $e->getMessage();
                exit();
            }
        }
    }