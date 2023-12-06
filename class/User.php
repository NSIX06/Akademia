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
            $this->senha = md5($_senha);
        }

        //* get and set from Nome

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($_nome)
        {
            $this->nome = $_nome;
        }

        //*


        //* get and set from Email

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($_email)
        {
            $this->email = $_email;
        }

        //*
        

        //* get and set from dtNascimento

        public function getdtNascimento()
        {
            return $this->dtNascimento;
        }

        public function setdtNascimento($_dtNascimento)
        {
            $this->dtNascimento = $_dtNascimento;
        }

        //*



        //* get and set from Cidade

        public function getCidade()
        {
            return $this->cidade;
        }

        public function setCidade($_cidade)
        {
            $this->cidade = $_cidade;
        }

        //*


        //* get and set from Senha

        public function getSenha()
        {
            return $this->senha;
        }

        public function setSenha($_senha)
        {
            $this->senha = $_senha;
        }

        //*


        
             //?Função de inserir usuário

        public function inserirUser()
        {
            try 
            {
                include("../db/conn.php");
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

            catch (\Exception $e)
            {
                return false;
            }

        }
        //?



              //?Função de listar o usuário

        public function lsUsuario()
        {
            try 
            {
                include("../db/conn.php");

                $sql = "CALL lsUsuario('')";
                $data = $conn->query($sql)->fetchAll();

                return $data;
            }
            catch (\Exception $e)
                {
                    return false;
                }
        }
            
         //?


              //?Função de deletar o usuário

        public function delUsuario($_id)
        {
        try 
            {
                include("../db/conn.php");
                $sql = "CALL delUsuario(:id)";

                $data = [
                    'id' => $_id
                ];

                $statement = $conn->prepare($sql);
                $statement->execute($data);

                return true;
            }

        catch (\Exception $e)
        {
            return false;
        }
        }
        //?



              //?Função de atualizar o usuário

        public function atualizarUsuario($_id)
        {
            
        try{
            include("../db/conn.php");
            $sql = "CALL upUsuario(:email, :cidade, :senha, :id)";

            $data = [
                'id' => $_id,
                'email' => $this->email,
                'cidade' => $this->cidade,
                'senha' => $this->senha
            ];

            $statement = $conn->prepare($sql);
            $statement->execute($data);

            return true;
        }
            catch (\Exception $e)
            {
                return false;
            }
    
    }
            //?


              //?Função de buscar o usuário

        public function buscarUsuario($_id)
        {
                    include("../db/conn.php");

                    $sql = "CALL bsUsuario('$_id')";
                    $data = $conn->query($sql)->fetchAll();

                    foreach ($data as $item) {
                        $this->nome = $item["nome"];
                        $this->email = $item["email"];
                        $this->dtNascimento = $item["dtNascimento"];
                        $this->cidade = $item["cidade"];
                        $this->senha = $item["senha"];
                    }

            return true;
        }
    

             //?



                //?Função de autenticar o usuário

            public function autenticarUsuario($_email, $_senha)
            {

                try{

                include("../db/conn.php");
                $sql = "CALL Login('$_email', '$_senha')";
                $stmt = $conn->prepare($sql);

                $stmt->execute(); 
                

                if ($user = $stmt->fetch()) //se encontrar registro
                {
                    $this->nome = $user["nome"];
                    return 1;
                }
                else
                {
                    return 0;
                }
            }
                catch (\Exception $e)
                {
                    return false;
                }
        

        }
                //?
    }

?>