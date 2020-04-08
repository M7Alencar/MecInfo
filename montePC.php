<?php
session_start();
require_once "login/function.php";
?>
<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--Font-->
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">

  <title>MecInfo | Monte o seu PC</title>
  <style>
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

    .bg-dark {
      background: black !important;
    }

    p {
      margin-top: 7px;
    }

    body {
      padding-top: 5.2rem;
      color: aliceblue;
      font-family: 'Source Code Pro', monospace;
      background-image: url("img/fundo2.jpg");
    }

    footer {
      background-color: black;
    }
  </style>
</head>

<body>
  <!-- Nav bar -->
  <?php require_once 'navbar.php' ?>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <div class="container">
    <div class="row justify-content-center pt-5">
      <div class="col-4">
        <h1>EM CONSTRUÇÃO</h1>
      </div>
    </div>
  </div>


    <!-- Footer -->
    <?php require_once 'footer.php' ?>

</body>

</html>