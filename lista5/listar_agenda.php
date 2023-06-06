<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('conexao.php');
    $sql = "SELECT * FROM agenda";
    //mysqli=> executa  um comando no banco de dados
    $result = mysqli_query($con,$sql);
    //mysqli_fetch_array => retorna apenas uma linha 
    //dos registros retornados
    $row = mysqli_fetch_array($result);
    ?>
    
    <h1>Consulta de agenda</h1>
    <table align="center" border="1" width="500">
    <tr>
        <th>Id</th>
        <th>Foto</th>
        <th>Nome</th>
        <th>Apelido</th>
        <th>endereco</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Telefone</th>
        <th>Celular</th>
        <th>E-mail</th>
        <th>Dt_cadastro</th>
        <th>alterar</th>
        <th>deletar</th>

    </tr>
    <?php
       do{ 
        if($row)
        { 
            

        echo "<tr>";
        echo "<td>" . $row['id_agenda']."</td>";
        if($row['foto'] == "")
            echo "<td></td>";
        else 
        
        echo "<td><img src='" . $row['foto']. "' width='80' height='100'/></td>";
        echo "<td>" . $row['nome']."</td>";
        echo "<td>" . $row['apelido']."</td>";
        echo "<td>" . $row['endereco']."</td>";
        echo "<td>" . $row['bairro']."</td>";
        echo "<td>" . $row['cidade']."</td>";
        echo "<td>" . $row['estado']."</td>";
        echo "<td>" . $row['telefone']."</td>";
        echo "<td>" . $row['celular']."</td>";
        echo "<td>" . $row['email']."</td>";
        echo "<td>" . $row['dt_cadastro']."</td>";
        echo "<td><a href= 'altera_agenda.php?id_agenda=". $row['id_agenda']. "'>Alterar</a> </td>";
        echo "<td><a href= 'deletar_agenda.php?id_agenda=". $row['id_agenda']. "'>Deletar</a> </td>";
        echo "</tr>"; }
        }while($row = mysqli_fetch_array($result)) 
        
        ?> 

  <a href="index.php">Voltar</a>

</table>
</body>
</html>