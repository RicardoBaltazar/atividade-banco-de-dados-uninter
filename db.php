<?php

    class db {
        private $host = 'localhost';

        //usuario - usuario de conexão com o mysql
        private $usuario = 'root';
    
        //senha - senha cadastrada para o mysql
        private $senha = '';
    
        //banco de dados
        private $database = 'phone_book';
    

    public function connect_mysql(){

        $connection = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        mysqli_set_charset($connection, 'UTF8');

        if (mysqli_connect_errno()){
            echo 'Houve um erro ao tentar se conectar com o banco de dados mysql: '.mysqli_connect_error();
        }

        return $connection;
    }
}

?>