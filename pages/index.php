<?php date_default_timezone_set('America/Sao_Paulo'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-index.css">
    <link rel="stylesheet" href="cores.css">
    <link rel="stylesheet" href="css-form.css">
    <link rel="stylesheet" href="../common/fonts.css">
    
    <title>Menu</title>
</head>

<body>


    <div id="main">
        <?php include 'sideBar.php' ?>
        <div class="main-conteudo">
        <div class="header-conteudo"></div>
            <?php
            if (isset($_GET['tela'])) {
                $nomeTela = $_GET['tela'].".php";
                 include $nomeTela;
                 unset($_GET['tela']);
            }else{
                include 'telaLogo.php';
            }
            ?>
        </div>
    </div>
    <script type="text/javascript" src="../common/javaScript.js"></script>
    <script> 
           var men = <?php echo $mensagem ?>; 
            if(men == 1){
                boxMensagem();
                
            };
            
            </script>
</body>

</html>