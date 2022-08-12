<?php
require_once 'model/Profissional.php';
require_once 'model/ProfissionalDAO.php';

class ProfissionalController{
    private $id;
    private $cpf;
    private $contato;
    private $email;
    private $rg;
    private $nome_prof;
    private $password;
    private $tipocargo;

    // Create
    public function storeProfissional() {
        $this->profissionalDao = new ProfissionalDAO();
        $this->profissional = new Profissional();
        $this->profissional->setCpf($_REQUEST['cpf']);
        $this->profissional->setContato($_REQUEST['contato']);
        $this->profissional->setEmail($_REQUEST['email']);
        $this->profissional->setStatus($_REQUEST['status']);
        $this->profissional->setRg($_REQUEST['rg']);
        $this->profissional->setNome_Prof($_REQUEST['nome_prof']);
        $this->profissional->setPassword($_REQUEST['password']);
        $this->profissional->setCargo($_REQUEST['cargo']);

        if($this->profissionalDao->storeProfissional($this->profissional)){
            $_REQUEST['sucesso'] = true;
            require_once 'cadastroapply.php';
        }
    }

    
}