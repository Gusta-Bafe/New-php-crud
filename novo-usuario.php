<h1>Novo Usuário meu nobre</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
  <div class="mb-3">
    <label>Nome:</label>
    <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
  </div>
  <div class="mb-3">
    <label>Email:</label>
    <input type="email" class="form-control" name="email" placeholder="Digite seu email">
  </div>
  <div class="mb-3">
    <label>Senha:</label>
    <input type="password" class="form-control" name="senha" placeholder="Digite sua senha">
  </div>
  <div class="mb-3">
    <label>Data de Nascimento:</label>
    <input type="date" class="form-control" name="data_nasc">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
