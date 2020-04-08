<?php
    session_start();
    require_once "login/function.php";
?>

<!doctype html>
<html lang="pt">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">

    <title>MecInfo | Quem Somos</title>
    <style>
        a,
        a:hover, 
        a:visited,
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

        .bg-dark {
            background: black !important;
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

        .centered {
            margin: 0 auto !important;
            float: none !important;
        }

        footer {
            background-color: black;
            padding-top: 0.1rem;
            margin-top: 44px;
        }

        .card-body,
        .card-header {
            color: #75a8d5;;
        }

        .card {
            background-color: #fdfdfd40;
        }
    </style>

</head>

<body> 
    
<?php include 'navbar.php'?>


    <div class="centered centered form-group col-md-6">
        <div class="card mb-3" style="max-width: 50rem;">
            <div class="text-center card-header ">
                <h1 class="text-center">Sobre a MecInfo!</h1>
                <hr>

                <div class="card-body">

                    <p class="card-text text-center"> A empresa MECINFO, iniciou suas atividades em 2019, com a proposta
                        de vender
                        computadores para todo o Brasil através do site.
                        A empresa se destacou no segmento por prestar um relevante serviço à comunidade de hardware, se
                        tornando referência Mundial logo no primeiro ano.</p>
                </div>
            </div>
        </div>

        <div class="card-group " style="max-width: 50rem;">
            <div class="card">
                <div class="card-body">
                    <h5 class=" card-title">DADOS CADASTRAIS MECINFO</h5>
                    <p class="card-text"></p>
                    <p><span style="font-size: medium; "></span><span style="font-size: small;"><strong>Razão
                                Social:</strong> MecNelson S.A</span><br><span
                            style="font-size: small;"><strong>CNPJ:</strong> 11.171.555/131-22</span><br><span
                            style="font-size: small;"><strong>Inscrição Estadual:</strong> 256066584</span></p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class=" card-title">MECINFO ATENDIMENTO</h5>
                    <p class="card-text"></p>
                    <p><span style="font-size: medium; "></span><span
                            style="font-size: small;"><strong>Atendimento:</strong> Segunda a Sexta: Das 9h ás 20h
                        </span><br><span
                            style="font-size: small;"><strong>Email:</strong> MecInfo@gmail.com</span><br><span
                            style="font-size: small;"><strong>Telefone:</strong> (21)-4002-8922</span></p>
                </div>
            </div>
        </div>
<br>
        <div class="card" style="max-width: 50rem;">
            <div class="text-center card-header ">
                <h1 class="text-center">Criadores</h1>
                <hr>

                <div class=" card-body">
                <p class="card-text">
                <strong>Gabrielson</strong><br>
                <strong>Gutenelson</strong><br>
                <strong>Marley Nelson</strong><br>
                <strong>Mathelson</strong><br>              
                <strong>Victu Nelson</strong><br>  
                 </p>
                </div>
            </div>
            </div>

    </div>
</body>

    <!-- Footer -->
    <?php include 'footer.php'?>

</html>