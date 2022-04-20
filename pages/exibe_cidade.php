<?php 

include '../common/db_acoes.php';
$idEstado = $_GET['id'];
$database = new conexao();
$rest = $database->consultaCidade($idEstado);

foreach($rest as $linha){
    $id= $linha['id'];
    $nome=$linha['nome'];

    echo "<option value='".$id."' class='optcidade'>".$nome."</option>";

}



?>