<div class="suporte">
  <div class="container mt-5">
    <h2>Suporte NerdGames</h2>
    <p>Por favor, informe seu e-mail e descreva o problema que está enfrentando clicando no botão abaixo.</p>
    <button type="button" class="btn btn-primary btn-abrir" data-bs-toggle="modal"
      data-bs-target="#supportModal">Abrir</button>
  </div>
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
</div>
