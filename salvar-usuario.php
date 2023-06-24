<?php
<<<<<<< HEAD


    // Verifica o valor de 'acao' usando switch case
    switch ($_REQUEST["acao"]) {
        case "cadastrar":
           
            if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["senha"]) && isset($_POST["data_nasc"])) {
                // Recupera os valores dos campos
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $senha = md5($_POST["senha"]);
                $data_nasc = $_POST["data_nasc"];

                
                $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) 
                        VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

                $res = $conn->query($sql);

                if ($res == true) {
                    print "<script> alert('Cadastro realizado com sucesso.')</script>";
                    print "<script> location.href ='?page=listar'</script>";
                } else {
                    print "<script> alert('Não foi possível finalizar o cadastro')</script>";
                    print "<script> location.href ='?page=listar'</script>";
                }
            }
            break;

        case "editar":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET 
                nome='{$nome}', 
                email='{$email}',
                senha='{$senha}', 
                data_nasc='{$data_nasc}'
                WHERE id=".$_REQUEST["id"];
=======
    // Verifica se foi enviado o formulário
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Verifica se a ação é cadastrar e se os campos estão definidos
        if (isset($_POST["acao"]) && $_POST["acao"] === "cadastrar" && isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["senha"]) && isset($_POST["data_nasc"])) {
            // Recupera os valores dos campos
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha =md5( $_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            // Insere os dados no banco de dados
            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) 
                    VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
>>>>>>> 007dbeefd923c765c4f17dc255c6f24330f5df02

            $res = $conn->query($sql);

            if ($res == true) {
<<<<<<< HEAD
                print "<script> alert('Usuário atualizado com sucesso.')</script>";
                print "<script> location.href ='?page=listar'</script>";
            } else {
                print "<script> alert('Não foi possível atualizar o usuário')</script>";
                print "<script> location.href ='?page=listar'</script>";
            }
            break;

        case 'excluir':
            
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script> alert('Excluído com sucesso.')</script>";
                print "<script> location.href ='?page=listar'</script>";
            } else {
                print "<script> alert('Não foi possível excluir')</script>";
                print "<script> location.href ='?page=listar'</script>";
            }
            break;
    }

?>


=======
                print "<script> alert('Cadastro realizado com sucesso.')</script>";
                print "<script> location.href ='?page=listar'</script>";
            } else {
                print "<script> alert('Não foi possível finalizar o cadastro')</script>";
                print "<script> location.href ='?page=listar'</script>";
            }
        }
    }
?>

>>>>>>> 007dbeefd923c765c4f17dc255c6f24330f5df02
