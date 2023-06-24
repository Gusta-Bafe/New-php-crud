<h1>Editar usuário</h1>
<?php 
  $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];

  $res = $conn->query($sql);
  $row = $res->fetch_object();

?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
  <div class="mb-3">
    <label>Nome:</label>
    <input type="text" class="form-control" name="nome" value="<?php print $row->nome?>" placeholder="Digite seu nome">
  </div>
  <div class="mb-3">
    <label>Email:</label>
    <input type="email" class="form-control" name="email" value="<?php print $row->email?>" placeholder="Digite seu email">
  </div>
  <div class="mb-3">
    <label>Senha:</label>
    <input type="password" class="form-control" name="senha" required placeholder="Digite sua senha">
  </div>
  <div class="mb-3">
    <label>Data de Nascimento:</label>
    <input type="date" class="form-control" value="<?php print $row->data_nasc?>" name="data_nasc">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
