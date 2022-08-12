<?php

require_once 'Database.php';

class ProfissionalDAO {
    private $conexao;

    function __construct(){
        $Database = new Database;
        $this->conexao = $Database->getConexao();
    }

    // Create
    function storeProfissional($profissional) {
        $stmt = $this->conexao->prepare('INSERT INTO profissional (cpf,contato,email,status,rg,nome_prof,senha,cargo) VALUES (:cpf,:contato,:email,:status,:rg,:nome_prof,'.":password".',:cargo)');
        $stmt->bindValue(':cpf', $profissional->getCpf());
        $stmt->bindValue(':contato', $profissional->getContato());
        $stmt->bindValue(':email', $profissional->getEmail());
        $stmt->bindValue(':status', $profissional->getStatus());
        $stmt->bindValue(':rg', $profissional->getRg());
        $stmt->bindValue(':nome_prof', $profissional->getNome_Prof());
        $stmt->bindValue(':password', $profissional->getPassword());
        $stmt->bindValue(':cargo', $profissional->getCargo());
        return $stmt->execute();
    }


}