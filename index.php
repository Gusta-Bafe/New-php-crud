<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
 
  <body>
    
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Cadastro</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="?page=listar">Listar Usuários</a>
                    <a class="nav-link" href="?page=novo">Novo Usuário</a>
                </div>
                </div>
            </div>
        </nav>



        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <?php
                    switch(@$_REQUEST["page"]){
                        case "novo":
                            include("novo-usuario.php");
                        break;
                        case "listar":
                            include("listar-usuarios.php");
                        break;
                        case "salvar":
                            include("salvar-usuario.php");
                        default:
                            print " <h1> Bem Vindo !</h1>";
                     }
                    ?>
                </div>
            </div>
        </div>
   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>