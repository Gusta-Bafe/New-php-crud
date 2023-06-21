<?php

switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            // Recupera os valores dos campos
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $data_nascimento = $_POST['dataNascimento'];
            
            echo "Cadastro realizado com sucesso.";
            break;

        case 'editar':
            // Recupera os valores dos campos
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $dataNascimento = $_POST['dataNascimento'];

            echo "Edição realizada com sucesso.";
            break;

        case 'excluir':
          
            echo "Exclusão realizada com sucesso.";
            break;

        default:
            // Ação inválida
            echo "Ação inválida.";
            break;
    }

?>