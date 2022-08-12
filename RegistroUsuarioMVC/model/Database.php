<?php
class Database {

    private $username = "root";
    private $senha = "root";
    private $database = "avaliacao_pweb";
    private $conexao;

    function __construct(){
        $this->conexao = new PDO("mysql:host=localhost:3306;dbname=$this->database", $this->username, $this->senha);
    }

    function getConexao(){
        return $this->conexao;
    }

}

?>