<?php
include_once '../common/db_acoes.php';
include_once '../common/functPhp.php';
$novoAt = new conexao();
$funct = new functPhp();
$pac = $novoAt->novoAtConsultaPac($_GET['codPac']);
$atAnt = $novoAt->listAt($_GET['codPac']);
$idade = $funct->calcIdade($pac['dataNasc']);

// chama a função para incluir o novo atendimento
if(isset($_POST['atDesc'])){
  $idPac = $_GET['codPac'];
  $atDesc = $_POST['atDesc'];
  $dataAt = date('Y-m-d');
  $retInsertAt= $novoAt->incluirAtDesc($dataAt,$atDesc, $idPac);
  unset($_POST['atDesc']);
  header('location:http://localhost/projeto_prontuario/src/pages/?tela=novoAt&codPac='.$_GET['codPac']);
}

?>
<link rel="stylesheet" href="../pages/css-novoAt.css">
<h1 class="h1-titulo">Dados Do Paciente</h1>
<section>
  <div class="" id="dadosPac">
    <fieldset id="fieldDadosPac">
      <form action="" id="formAtDadosPac">
        <label for="">Nome: <input id="nome" type="text" value="<?php echo $pac['nome'];?>" readonly size="25"></label>
        <label for="">Idade:<input id="idade" type="text" value="<?php echo $idade ?>" readonly size="1"></label>
        <label for="">RG:<input id="rg" type="text" value="<?php echo $pac['rg'];?>" readonly size="12"></label>
        <label for="">CPF:<input id="cpf" type="text" value="<?php echo $pac['cpf'];?>" readonly size="12"></label>
      </form>
    </fieldset>
  </div>
  <div id="divAtDesc">
    <fieldset id="fieldAtDesc">
      <form action="" id="formAtDesc" method="post">
        <label for=""><textarea name="atDesc" id="atDesc" cols="100%" rows="5" placeholder="Descrição do atendimento." spellcheck="true" required autocomplete="off" wrap="true" autocapitalize="sentences"></textarea></label>
        <label for=""><input type="submit" value="REGISTRAR ATENDIMENTO"></label>
      </form>
    </fieldset>
  </div>
  <div id="boxListAt">
    <h2 class="h2-titulo">Atendimentos Anteriores:</h2>
    <hr>
    <br>
    <?php 
    $row = count($atAnt);

    if($row>0){  
      foreach($atAnt  as $linha=> $valor){
        $data = date('d/m/Y',strtotime($valor['data_atendimento']));
        
    echo 
    "<div class='boxAt'>
      <div class='dataAt'>
        Data:<br>".$data."
      </div>
      <div class='descAt'>".$valor['desc_atendimento']."</div>
    </div>";
      
    };
    }else{
      echo "<div class='boxAt'>
      <div class='descAt'><h5>1° ATENDIMENTO!!</h5></div>
    </div>";
    };
      ?>
    </div>
</section>