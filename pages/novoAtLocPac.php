<?php
include_once '../common/db_acoes.php';

$novoPac = new conexao();

if (isset($_GET['loc'])) {
    $loc = $_GET['loc'];
    $opLoc = $_GET['opLoc'];
    $listRetorno = $novoPac->listarPac($loc, $opLoc);
}
?>

<link rel="stylesheet" href="css-form.css">
<link rel="stylesheet" href="../pages/css-locPac.css">
<h1 class="h1-titulo">Localizar Paciente</h1>
<fieldset class="loc-fieldset">

    <form class="loc" action="" method="get">
        <input type="hidden" name="tela" value="novoAtLocPac">
        <label for="search" id="labelLoc">Paciente:
            <div class="boxBuscarLupa">
                <input type="search" id="search" name="loc" value="<?php if (isset($_GET['loc'])) {
                                                                        echo $_GET['loc'];
                                                                    }; ?>"><button><img src="../assets/images/search.svg" class="lupaBuscar"></button>
        </label>
        </div>
        <label for="opLoc">Nome:
            <input type="radio" value="nome" name="opLoc" checked id="opLoc">
        </label>
        <label for="opLoc">RG:
            <input type="radio" value="rg" name="opLoc" id="opLoc">
        </label>
        <label for="opLoc">CPF:
            <input type="radio" value="cpf" name="opLoc" id="opLoc">
        </label>
    </form>
</fieldset>

<section>
    <div class="boxListPac">
            <?php
            if (isset($listRetorno)) {
                echo "  <table>
                <tr>
                    <th class='left'>Nome</th>
                    <th>Rg</th>
                    <th>Data Nascimento</th>
                    <th>Ações</th>
                </tr>";
                foreach ($listRetorno as $linha => $valor) {
                    echo "<tr>
                    <td>" . $valor['nome'] . "</td>
                    <td class='center'>" . $valor['rg'] . "</td>
                    <td class='center'>" . date('d/m/Y',strtotime($valor['dataNasc'])) . "</td>
                    <td id='celAcoes' class='center'><a href='?tela=novoAt&codPac=" . $valor['id'] . "' class='azul'>NOVO-AT</a>
                    <a href='?tela=atCadPac&codPac=" . $valor['id'] . "' class='verde'>ATUALIZAR CAD</a>
                    <a href='?tela=delCadPac&codPac=" . $valor['id'] . "' class='vermelho'>EXCLUIR CAD</a></td>
                    </tr>";
                };
            }else{
                include 'telaLogo.php';
            };
            ?>
        </table>
    </div>
</section>