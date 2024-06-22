<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nerd Games</title>


  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="imagens/nerdgames-log.png.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php">
          <img src="imagens/nerdgames-log.png.png" alt="Nerd Games"> <strong>Nerd Games </strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          </ul>

          <div class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="suporte.php">Suporte</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="Jogos" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Jogos
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="Jogo1">Tommy Adventure</a></li>
                  <li><a class="dropdown-item" href="Jogo2">Jogo 2</a></li>
                  <li><a class="dropdown-item" href="Jogo3">Jogo 3</a></li>
                  <li><a class="dropdown-item" href="Jogo4">Jogo 4</a></li>
                  <li><a class="dropdown-item" href="Jogo5">Jogo 5</a></li>

                </ul>
              </li>
            </ul>
            <a href="#" class="btn btn-success btn-entrar"> Entrar </a>
          </div>
        </div>
    </nav>
  </header>



  <?php
  $pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : "home";
  $pagina = "paginas/{$pagina}.php";

  if (file_exists($pagina)) {
    include $pagina;
  } else {
   
    include "paginas/erro.php";
  }
  ?>



  <footer class="footer bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>Todos os direitos reservados - Tainá Trindade®</p>
        </div>
        <div class="col-md-6">
          <div class="social-icons text-end">
            <a href="https://wa.me/qr/IU47YEHU2HBLK1" class="social-icon">
              <img src="imagens/wpp_png.png" alt="WhatsApp">
            </a>
            <a href="https://www.instagram.com/taitrindade_27?igsh=MWlyeGN1NTF6dmZneQ==" class="social-icon">
              <img src="imagens/insta_png.png" alt="Instagram">
            </a>
            <a href="https://www.facebook.com/taina.pereira.355744?mibextid=ZbWKwL" class="social-icon">
              <img src="imagens/face_png.png" alt="Facebook">
            </a>
            
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</body>

</html>