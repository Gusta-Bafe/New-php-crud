<?php
    // Verifica se foi enviado o formulário
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Verifica se a ação é cadastrar e se os campos estão definidos
        if (isset($_POST["acao"]) && $_POST["acao"] === "cadastrar" && isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["senha"]) && isset($_POST["data_nasc"])) {
            // Recupera os valores dos campos
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

            // Insere os dados no banco de dados
            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) 
                    VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

            $res = $conn->query($sql);

            if ($res) {
                echo "Cadastro realizado com sucesso.";
            } else {
                echo "Erro ao cadastrar o usuário: " . $conn->error;
            }
        }
    }
?>

