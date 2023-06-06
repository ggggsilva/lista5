<?php
    include("conexao.php");
    if(file_exists($_FILES['foto']['tmp_name'])) {
        $pasta_destino = 'fotos/';
        $extensao = strtolower(substr($_FILES['foto']['name'],-4));
        $nome_foto = $pasta_destino .  date("Ymd-His") . $extensao;
        move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
      }
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['fone'];
    $celular = $_POST['cel'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $dt_cadastro = $_POST['dt_cadastro'];

    $sql = "SELECT * from agenda where email = '$email'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_num_rows($result);

    if($row > 0){
        echo "<h1> Agenda já Cadastrada</h1>";
        echo "<a href='Cadastro_agenda.html'>Voltar</a>";
        exit();
    }

    echo "<h1>Dados da agenda</h1>";
    echo "Nome: $nome <br>";
    echo "Apelido: $apelido <br>";
    echo "Endereco: $endereco <br>";
    echo "Bairro: $bairro <br>";
    echo "Cidade: $cidade <br>";
    echo "Estado: $estado <br>";
    echo "Telefone: $telefone <br>";
    echo "Celular: $celular <br>";
    echo "E-mail: $email <br>";
    echo "dt_cadastro: $dt_cadastro <br>";
    

    $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular ,email, foto, dt_cadastro)";
    
    $sql .= " VALUES ('". $nome."','".$apelido."','". $endereco."','".$bairro. "', '".$cidade."', '".$estado."', '".$telefone."', '".$celular."', '".$email."', '".$nome_foto."', '".$dt_cadastro."')";
    echo $sql."<br>";
    $result = mysqli_query($con, $sql);
    if($result)
         echo "Agenda registrada com sucesso!";
         else
         echo "Erro ao tentar registrar!" . mysqli_error($con);
?>

   <a href="index.php">Voltar</a>
   
