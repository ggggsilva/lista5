<?php 
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = "SELECT * FROM agenda where id_agenda = $id_agenda";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" enctype="multipart/form-data">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de agenda - IFSP</h1>
    <form action="altera_agenda_exe.php?id_agenda = <?php echo $row['id_agenda'] ?> " method="post" enctype="multipart/form-data">
      <input name="id_agenda" type="hidden" 
      value="<?php echo $row['id_agenda']?>">
  
        <div>
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome"
    value="<?php echo $row['nome']?>">
  </div>
  
  <div>
    <label for="apelido">Apelido</label>
    <input type="text" name="apelido" id="apelido" value="<?php echo $row['apelido']?>">
  </div>
 
  <div>
    <label for="endereco">Endereco</label>
    <input type="text" name="endereco" id="endereco" value="<?php echo $row['endereco']?>">
  </div>
  
  <div>
    <label for="bairro">Bairro</label>
    <input type="text" name="bairro" id="bairro" value="<?php echo $row['bairro']?>">
  </div>
 
  <div>
    <label for="cidade">Cidade</label>
    <input type="text" name="cidade" id="cidade" value="<?php echo $row['cidade']?>">
  </div>
  
  <div>
    <label for="estado">Estado</label>
    <input type="text" name="estado" id="estado" value="<?php echo $row['estado']?>">
  </div>
  
  <div>
    <label for="fone">Telefone</label>
    <!-- (18)99999-8888 ou (18)99999-9999 -->
      <input type="text" name="fone" id="fone" 
      pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}" value="<?php echo $row['telefone']?>">
    
  </div>


  <div>
    <label for="cel">Celular</label>
    <!-- (18)99999-8888 ou (18)99999-9999 -->
      <input type="text" name="cel" id="cel" 
      pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}" value="<?php echo $row['celular']?>">
    
  </div>

  <div>
    <label for="email">E-mail</label>
    <input type="text" name="email" id="email" value="<?php echo $row['email']?>">
  </div>
  <div>
  
<div>
  <label for="dt_cadastro">dt_cadastro</label>
  <input type="date" name="dt_cadastro" id="dt_cadastro" value="<?php echo $row['dt_cadastro']?>">
</div>

<div>
  <input type="file" name="foto" id="foto" accept="image/*">
</div>
<input type="submit" value="Salvar">

</form>
</body>
</html>