<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  </head>
 
  <body>
    
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
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
            include("config.php");
            switch(@$_REQUEST["page"]){
                case "novo":
                    include("novo-usuario.php");
                    break;
                case "listar":
                    include("listar-usuarios.php");
                    break;
                case "salvar":
                    include("salvar-usuario.php");
                    break;
                case "editar":
                    include("editar-usuario.php");
                    break;
                default:
            ?>
            <div class="container">
                <div class="row">
                    <div class="col mt-5">
                        <h1 style="opacity: 0; animation: fadeIn 3s forwards;">Fala meu nobre, essa é minha aplicação de cadastro de usuários.</h1>
                        <p style="opacity: 0; animation: fadeIn 5s forwards;">Tá meio corrido, então fiz tudo rapidinho com base nos slides que o senhor passou e algumas coisas que procurei na net.</p>
                        <p style="opacity: 0; animation: fadeIn 8s forwards;">Vá na opção "Novo Usuário" faça um cadastro simples, tomei a liberdade de dar uma pesquisada em como proteger mais a senha porém sem verificação de dois fatores confirmação de e-mail e afins. Em um projeto futuro pretendo trabalhar com esse tipo de camada de segurança, por enquanto só usei o md5 pra fazer uma criptografia basica para senha não ir "crua" pro banco. faça 1 ou 2 cadastros edite e exclua e verificação completa. </p>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>


        

   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>