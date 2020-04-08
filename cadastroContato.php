<?php
            //Declaração da variáveis

            $conexao = new PDO("mysql:dbname=projeto_integrador;host=localhost", "root", "");
            $stmt = $conexao->prepare("INSERT INTO contato (nome, email, telefone, comentario) VALUES (:NOME, :EMAIL, :TEL, :COM)");

            if (empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['telefone']) || empty($_POST['comentario'])) {
                
                header("Location: contato.php");

             }else {
             
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $comentario = $_POST["comentario"];

            $stmt->bindParam(":NOME", $nome);
            $stmt->bindParam(":EMAIL", $email);
            $stmt->bindParam(":TEL", $telefone);
            $stmt->bindParam(":COM", $comentario);
           

            $stmt->execute();
            header("Location: contato.php");
             }
            

    ?> 