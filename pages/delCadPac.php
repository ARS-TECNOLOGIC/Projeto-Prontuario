<?php
 include_once '../common/db_acoes.php';
    if(isset($_GET['codPac'])){
        $codPac = $_GET['codPac'];
        $del= new conexao();
        $delete = $del->delCad($codPac);
    }

?>