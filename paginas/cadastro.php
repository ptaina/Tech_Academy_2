<div class="cadastro">

    <div class="formCadastro">
        <h2 class="text-center">Cadastre-se</h2>
        <div>
            <form class="">
                <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">
                        <p>Email:</p>
                    </label>
                    <input type="email" class="form-control" id="exampleDropdownFormEmail1"
                        placeholder="email@exemplo.com">
                </div>
                <div class="mb-3">
                    <label for="exampleDropdownFormPassword1" class="form-label">
                        <p>Senha:</p>
                    </label>
                    <input type="password" class="form-control" id="exampleDropdownFormPassword1"
                        placeholder="Digite sua senha">
                </div>
                <div class="mb-3">
                    <label for="exampleDropdownFormPassword1" class="form-label">
                        <p>Repita sua senha:</p>
                    </label>
                    <input type="password" class="form-control" id="exampleDropdownFormPassword1"
                        placeholder="Digite sua senha">
                </div>
                <div class="mb-1">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                        <label class="form-check-label mb-1" for="dropdownCheck">
                            <p>Aceito todos os termos</p>
                        </label>

                    </div>
                    <a class="textLinks" href="?pagina=entrar">
                        <p>Já tem uma conta? Entrar</p>
                    </a>
                </div>
                <button type="button" class="btn btn-light mt-1 btn-darken" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Cadastrar</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirme seus dados</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5>Deseja prosseguir com o cadastro?</h5>
                            </div>
                            <div class="modal-footer">
                                <a href="?pagina=entrar" type="submit" class="btn btn-light btn-darken ">Confirmar
                                    Cadastro</a>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>

    </div>

</div>