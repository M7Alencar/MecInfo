<?php
    session_start();
    require_once "login/function.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <title>MecInfo | Contatos</title>
</head>
<style>
    html,
    body,
    footer {
        font-family: 'Ubuntu', sans-serif;
        color: aliceblue;
    }

    .centered {
        margin: 0 auto !important;
        float: none !important;
    }

    .bg-dark {
        background: black !important;
    }
    a,
    a:hover:a:visited,
    a:focus {
        background-color: black;
        text-decoration: none;
    }

    a {
        color: aliceblue;
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }

    a:hover {
        color: #007bff;
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }

    p {
      margin-top: 7px;
    }

    body {
        padding-top: 10rem;
        color: aliceblue;
        font-family: 'Source Code Pro', monospace;
        background-image: url("img/fundo2.jpg");
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid blue;
    }

    footer {
        background: black;
        padding-top: 0.1rem;
    }
</style>

<body>
    <!-- Nav bar -->

    <!-- Nav bar -->
    <?php require_once 'navbar.php' ?>

    
        <div class="centered form-group col-md-6">
            <h1 class="text-center">Central de Atendimento!</h1>
            <hr class="style14">
        </div>

        <div class="text-center form-group col-md-12">
            <h5 class="text-center fas fa-envelope">
                <h4 style="font-family: 'Ubuntu', sans-serif; display: inline;"> MecInfo@gmail.com
                </h4>
            </h5>
        </div>
        <div class="text-center form-group col-md-12">
            <h5 class="text-center fas fa-phone">
                <h4 style="font-family: 'Ubuntu', sans-serif; display: inline;"> (21)-4002-8922</h4>
            </h5>
        </div>
<form action="cadastroContato.php" method="POST" class="form-group col-md-12">
        <div class="centered form-group col-md-6">
            <label for="inputEmail4">Nome</label>
            <input type="text" class="form-control" id="inputEmail4" name="nome" placeholder="Nome"
                style="background:#fdfdfd40; color:aliceblue;">
        </div>

        <div class="centered  form-group col-md-6">
            <label for="inputmail">E-mail</label>
            <input type="email" class="form-control" id="inputPassword4" name="email" placeholder="Email"
                style="background:#fdfdfd40; color:aliceblue;">
        </div>

        <div class="centered  form-group col-md-6">
            <label for="inputell">Telefone</label>
            <input type="text" class="form-control" id="inputPassword4" name="telefone" placeholder="Telefone"
                style="background:#fdfdfd40; color:aliceblue;">
        </div>

        <div class="centered  form-group col-md-6">
            <label for="comm">Comentários</label>
            <textarea style="resize: none; background: #fdfdfd40; color:aliceblue;" class="form-control"
                id="exampleFormControlTextarea1" name="comentario" rows="3"></textarea>
        </div>

        <div class="centered form-group col-md-6">

            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <button class="col-md-5 btn btn-outline-secondary center-block mt-3"
                            style="color: white;">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Footer -->
    <?php require_once 'footer.php' ?>


    <!-- Java (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>