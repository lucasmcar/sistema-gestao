<?php 
  require("../../App/res/string.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/srg.css"/>
    <link rel="stylesheet" href="../assets/css/table-srg.css"/>
    <title>Document</title>
</head>
<body>
    <nav class="nav">
        <div class="brand">
            <h2> <?= APP_TITLE ?></h2>
        </div>
        <ul class="menu">
            <li><a href="#">
                    <span class="material-icons">power_settings_new</span>Sair
                </a>
            </li>
        </ul>
    </nav>
    <div class="flex-container">

        <div class="side-nav">

            <div class="admin-info">
                <img class="round-img" src="../assets/img/do-utilizador.png">
                <h3 class="user-name">Nome do usuário admin</h3>
            </div>
            <ul class="side-menu">
                <li onclick="getProfile();">
                    <span class="material-icons">account_circle</span>Funcionário
                </li>
                <li onclick="getServices();">
                    <span class="material-icons">build</span> Serviços
                </li>
                <li onclick="getDates();">
                    <span class="material-icons">calendar_today</span>Datas
                </li>
                <li onclick="getData();">
                    <span class="material-icons">analytics</span>Painel Principal
                </li>
                <li class="submenu" onclick="getReg();">
                        Adicionar Registros
                    <span class="material-icons">chevron_right</span>
                    <ul class="side-submenu">
                        <li>
                            Funcionário
                        </li>
                        <li>
                            Serviço
                        </li>
                    </ul>
                </li>
                <li id="dark-mode" onclick="lightDark()">
                    <span class="material-icons">dark_mode</span>
                    <p id="mode">Modo Escuro</p>

                </li>
            </ul>
            </div>

            <div class="content" id="conteudo">Aqui vai ser carregado o conteudo dinamicamente</div>

        </div>
        <script src="../assets/js/load_pages.js"></script>
        <script src="../assets/js/upper.js"></script>
        <script src="../assets/js/dark-light-mode.js"></script>
</body>
</html>