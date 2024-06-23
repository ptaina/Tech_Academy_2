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
        <a class="navbar-brand" href="?pagina=home">
          <img src="imagens/nerdgames-log.png.png" alt="Nerd Games"> <strong>Nerd Games </strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="?pagina=home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?pagina=suporte">Suporte</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Jogos
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?pagina=curse_game">Curse Game</a></li>
                <li><a class="dropdown-item" href="?pagina=tommy">Tommy Adeventure</a></li>
                <li><a class="dropdown-item" href="?pagina=rocket">Rocket On The Rocks</a></li>
                <li><a class="dropdown-item" href="?pagina=bug">Bug From Hell 2.0</a></li>
                <li><a class="dropdown-item" href="?pagina=cowboy">Cowboy In a Dreamland</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="btn btn-success btn-entrar"> Entrar </a>
            </li>
          </ul>
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

  <!-- só pra eu lembrar que aqui é o modal -->
  <div class="modal fade" id="supportModal" tabindex="-1" aria-labelledby="supportModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="supportModalLabel">Suporte</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="supportForm" action="processa_suporte.php" method="POST">
            <div class="mb-3">
              <label for="user-email" class="col-form-label">Email:</label>
              <input type="email" class="form-control" id="user-email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="problem-description" class="col-form-label">Descrição do Problema:</label>
              <textarea class="form-control" id="problem-description" name="descricao" required></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['email']) && isset($_POST['descricao'])) {
      $email = $_POST['email'];
      $descricao = $_POST['descricao'];


      $email_destino = 'tainaelias90z@gmail.com';
      $assunto = "Novo Problema Reportado";
      $mensagem = $descricao;
      $cabecalhos = "From: $email";

      if (mail($email_destino, $assunto, $mensagem, $cabecalhos)) {
        echo "Obrigado por enviar sua solicitação de suporte. Nós entraremos em contato em breve.";
      } else {
        echo "Houve um problema ao enviar seu email. Por favor, tente novamente mais tarde.";
      }

    } else {

      echo "Por favor, preencha todos os campos do formulário.";
    }
  } else {

    "Método de requisição inválido.";
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