<?php 
    include_once '../common/db_acoes.php';

    $cad = new conexao();

    echo "<pre>";

    var_dump($_POST);

    echo "</pre>";

    $nome=  $_POST["nome"];
    $dataNasc=  $_POST["dataNasc"];
    $sexo=  $_POST["sexo"];
    $rg=  $_POST["rg"];
    $cpf=  $_POST["cpf"];
    $rua=  $_POST["rua"];
    $numeroResid=  $_POST["numeroResid"];
    $bairro=  $_POST["bairro"];
    $cidade=  $_POST["cidade"];
    $cep=  $_POST["cep"];
    $telefone=  $_POST["telefone"];
    $email=  $_POST["email"];
    $acao = $_POST['acao'];

    if($acao == 'novoCad'){
     $cad->novoCadastroPac($nome,$dataNasc,$sexo,$rg,$cpf,$rua,$numeroResid,$bairro,$cidade,$cep,$telefone,$email);
    }elseif($acao == "atCad"){
        $id = $_POST['codPac'];
        $cad->atualizaCadastroPac($id,$nome,$dataNasc,$sexo,$rg,$cpf,$rua,$numeroResid,$bairro,$cidade,$cep,$telefone,$email);
    };

?>