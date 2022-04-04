<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Menu</title>
</head>

<body>
    <div id="main">
        <nav class="side-bar">
            <ul>
                <li class="home"><span class="icon-top"><img src="../assets/images/at.svg" alt=""></span></li>
                
                <li id="menuAtendimento" onclick="alt(this.id)">
                    <a href="#">
                        <span class="icon"><img src="../assets/images/at.svg" alt=""></span>
                        <span class="menu-title">Atendimento</span>
                        <span id="menuAtendimentoDrop" class="icon drop"><img src="../assets/images/dropDown.svg"></span>
                    </a>
                </li>
                <ul id="menuAtendimentoSub" class="submenu-hidden">
                    <li class="sub">
                        <a href="#">
                            <span class="icon"><img src="../assets/images/newAt.svg" alt=""></span>
                            <span class="menu-title">Novo</span>
                        </a>
                    </li>
                </ul>
                <li id="menuAgenda" onclick="alt(this.id)">
                    <a href="#">
                        <span class="icon"><img src="../assets/images/agenda.svg" alt=""></span>
                        <span class="menu-title">Agenda</span>
                        <span id="menuAgendaDrop" class="icon drop"><img src="../assets/images/dropDown.svg"></span>
                    </a>
                </li>
                <ul id="menuAgendaSub" class="submenu-hidden">
                    <li class="sub">
                        <a href="#"><span class="icon"><img src="../assets/images/agenda.svg" alt=""></span>
                            <span class="menu-title">Agendar3</span></a>
                    </li>
                </ul>
                <li id="menuPaciente" onclick="alt(this.id)">
                    <a href="#"><span class="icon"><img src="../assets/images/paciente.svg" alt=""></span>
                        <span class="menu-title">Paciente</span>
                        <span id="menuPacienteDrop" class="icon drop"><img src="../assets/images/dropDown.svg"></span>
                    
                    </a>
                </li>
                <ul id="menuPacienteSub" class="submenu-hidden">
                    <li class="sub"><a href="#"><span class="icon"><img src="../assets/images/addPaciente.svg"
                                    alt=""></span>
                            <span class="menu-title">Novo</span></a>
                    </li>
                    <li class="sub">
                        <a href="#"><span class="icon"><img src="../assets/images/list.svg" alt=""></span>
                            <span class="menu-title">Listar</span></a>
                    </li>

                </ul>
                <li class=""><a href="#"><span class="icon"><img src="../assets/images/cardMoney.svg" alt=""></span>
                        <span class="menu-title">Financeiro</span></a></li>

            </ul>

        </nav>
        <div class="main-conteudo">
        </div>
    </div>
    <script type="text/javascript" src="../common/javaScript.js"></script>
</body>
</html>