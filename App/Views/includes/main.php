<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda+</title>
    <link rel="stylesheet" href="<?= URL ?>/Public/css/main7.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">

</head>
<body>
    <div class="header">

        <img src="<?= URL ?>/Public/images/Agenda.png" alt="Ícone Agenda+" class="header-image">
        <p class="header-text">Agenda+</p>

        <div class="pesquisa-header">
            <img src="<?= URL ?>/Public/images/main/header/lupa.png" alt="Lupa" class="icone-lupa">
            <input type="text" placeholder="Procure por Matéria" class="barra-pesquisa">
        </div>

        <div class="botoes-header">
            <a href="<?= URL ?>/Usuarios/notificacoes">
                <button class="btn">
                    <img src="<?= URL ?>/Public/images/main/header/notificacoes.png" alt="Notifcações" class="icone-btn">
                </button>
            </a>
            <a href="<?= URL ?>/Usuarios/configuracoes">
                <button class="btn">
                    <img src="<?= URL ?>/Public/images/main/header/configuracoes1.png" alt="Configurações" class="icone-btn">
                </button>
            </a>
            <a href="<?= URL ?>/Usuarios/usuario">
                <button class="btn">
                    <img src="<?= URL ?>/Public/images/main/header/perfil1.png" alt="Perfil" class="icone-btn">
                </button>
            </a>
        </div>

    </div>

    <div class="barra-lateral">

        <h3>MENU</h3>
        <div class="botoes-bala">
            <a href="<?= URL ?>/Usuarios/home">
                <button class="btl">
                    <img src="<?= URL ?>/Public/images/main/barra-lateral/home.png" alt="Home" class="icone-btl">
                    <span>Início</span>
                </button>
            </a>
            <a href="<?= URL ?>/Usuarios/materias">
                <button class="btl">
                    <img src="<?= URL ?>/Public/images/main/barra-lateral/materias.png" alt="Matérias" class="icone-btl">
                    <span>Matérias</span>
                </button>
            </a>
            <a href="<?= URL ?>/Usuarios/notas">
                <button class="btl">
                    <img src="<?= URL ?>/Public/images/main/barra-lateral/notas.png" alt="Notas" class="icone-btl">
                    <span>Notas</span>
                </button>
            </a>
            <a href="<?= URL ?>/Usuarios/calendario">
                <button class="btl">
                    <img src="<?= URL ?>/Public/images/main/barra-lateral/calendario.png" alt="Calendário" class="icone-btl">
                    <span>Calendário</span>
                </button>
            </a>
        </div>

        <h3>PREFERÊNCIAS</h3>
        <div class="botoes-bala">
            <a href="<?= URL ?>/Usuarios/configuracoes">
                <button class="btl">
                    <img src="<?= URL ?>/Public/images/main/barra-lateral/configuracoes.png" alt="Configurações" class="icone-btl">
                    <span>Configurações</span>
                </button>
            </a>
            <a href="<?= URL ?>/Usuarios/ajuda">
                <button class="btl">
                    <img src="<?= URL ?>/Public/images/main/barra-lateral/ajuda.png" alt="Ajuda" class="icone-btl">
                    <span>Ajuda</span>
                </button>
            </a>
            <!-- VOU DEIXAR PRA FAZER O MODO ESCURO DEPOIS
            <button class="btl">
                <img src="<?= URL ?>/Public/images/main/barra-lateral/dia-noite.png" alt="placeholder icon" class="icone-btl">
                <span>Modo Escuro</span>
            </button>
            -->
        </div>
        <div class="sair">
            <a href="<?= URL ?>/Usuarios/login">
                <button class="btl-sair">
                    <img src="<?= URL ?>/Public/images/main/barra-lateral/sair.png" alt="Sair" class="icone-sair">
                    <span class="texto-sair">Sair</span>
                </button>
            </a>
        </div>
    </div>
</div>
</html>
