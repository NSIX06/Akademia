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
            $sql = "CALL Usuario(:nome, :dtNascimento, :email, :cidade, :senha)";

            $data = [
                'nome' => $this->nome,
                'dtNascimento' => $this->dtNascimento,
                'email' => $this->email,
                'cidade' => $this->cidade,
                'senha' => $this->senha,
                
            ];

            $statement = $conn->prepare($sql);
            $statement->execute($data);

            return true;

        }

        public function listarUser()
        {
            include("db/conn.php");

            $sql = "CALL psListarProduto('')";
            $data = $conn->query($sql)->fetchAll();

            return $data;
        }


    }

?>