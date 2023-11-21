<?php

    

    class User
    {

        private $nome;
        private $email;
        private $dtNascimento;
        private $cidade;
        private $senha;

        public function __construct(){}

        public function create($_nome, $_email, $_dtNascimento, $_cidade, $_senha)
        {
            $this->nome = $_nome;
            $this->email = $_email;
            $this->dtNascimento = $_dtNascimento;
            $this->cidade = $_cidade;
            $this->senha = $_senha;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($_nome)
        {
            $this->nome = $_nome;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($_email)
        {
            $this->email = $_email;
        }

        public function getdtNascimento()
        {
            return $this->dtNascimento;
        }

        public function setdtNascimento($_dtNascimento)
        {
            $this->dtNascimento = $_dtNascimento;
        }

        public function getCidade()
        {
            return $this->cidade;
        }

        public function setCidade($_cidade)
        {
            $this->cidate = $_cidade;
        }
        public function getSenha()
        {
            return $this->senha;
        }

        public function setSenha($_senha)
        {
            $this->senha = $_senha;
        }

        public function inserirUser()
        {
            include("db/conn.php");
            $sql = "CALL Usuario(:nome, :email, :dtNascimento, :cidade, :senha)";

            $data = [
                'nome' => $this->nome,
                'email' => $this->email,
                'dtNascimento' => $this->dtNascimento,
                'cidade' => $this->cidade,
                'senha' => $this->senha,
                
            ];

            $statement = $conn->prepare($sql);
            $statement->execute($data);

            return true;

        }

        public function lsUsuario()
        {
            include("db/conn.php");

            $sql = "CALL lsUsuario('')";
            $data = $conn->query($sql)->fetchAll();

            return $data;
        }

        public function delUsuario($_id)
        {
            include("db/conn.php");
            $sql = "CALL delUsuario(:id)";

            $data = [
                'id' => $_id
            ];

            $statement = $conn->prepare($sql);
            $statement->execute($data);

            return true;
        }


    }

?>