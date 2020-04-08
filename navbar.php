<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="..." class="img-fluid mx-auto"
          style="width: 10rem"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Página Inicial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="quemsomos.php">Quem somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="montePC.php">Monte seu PC</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.php">Contato</a>
          </li>
          <li class="nav-item">
          <?php if(login()): ?>
            <p><?php echo $_SESSION['user']; ?> | <a href="login/logout.php">Sair</a></p>
            <?php else: ?>
            <p><a href="login/form_login.html">Entrar</a>
             <?php endif; ?>
            </a>
      </li>
        </ul>
      </div>
    </div>
  </nav>
