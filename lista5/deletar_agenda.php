<?php 
include('conexao.php');
$id_agenda = $_GET['id_agenda'];
$sql = "delete from agenda where id_agenda = $id_agenda";
$result = mysqli_query($con, $sql);
var_dump($result);
if($result){
    header("Location: listar_agenda.php");
}else{
    echo "<script>alert('Erro ao excluir o usuário!');";
    echo "location.href='listar_agenda.php';</script>";
}
