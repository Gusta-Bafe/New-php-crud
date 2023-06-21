<h1>Novo Usuário meu nobre</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
  <div class="mb-3">
    <label for="nome" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Digite seu email">
  </div>
  <div class="mb-3">
    <label for="senha" class="form-label">Senha:</label>
    <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
  </div>
  <div class="mb-3">
    <label for="data-nascimento" class="form-label">Data de Nascimento:</label>
    <input type="date" class="form-control" id="data-nascimento">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
