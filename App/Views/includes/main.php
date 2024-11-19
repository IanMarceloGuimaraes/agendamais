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

        <img src="<?= URL ?>/Public/images/Agenda.png" alt="Agenda" class="header-image">
        <p class="header-text">Agenda+</p>

        <div class="pesquisa-header">
            <img src="<?= URL ?>/Public/images/main/header/lupa.png" alt="Lupa" class="icone-lupa">
            <input type="text" placeholder="Procure por Matéria" class="barra-pesquisa">
        </div>

        <div class="botoes-header">
            <button class="btn">
                <img src="<?= URL ?>/Public/images/main/header/notificacoes.png" alt="placeholder icon" class="icone-btn">
            </button>
            <button class="btn">
                <img src="<?= URL ?>/Public/images/main/header/configuracoes1.png" alt="placeholder icon" class="icone-btn">
            </button>
            <button class="btn">
                <img src="<?= URL ?>/Public/images/main/header/perfil1.png" alt="placeholder icon" class="icone-btn">
            </button>
        </div>

    </div>

    <div class="barra-lateral">

        <h3>MENU</h3>
        <div class="botoes-bala">
            <button class="btl">
                <img src="<?= URL ?>/Public/images/main/barra-lateral/home.png" alt="placeholder icon" class="icone-btl">
                <span>Início</span>
            </button>
            <button class="btl">
                <img src="<?= URL ?>/Public/images/main/barra-lateral/materias.png" alt="placeholder icon" class="icone-btl">
                <span>Matérias</span>
            </button>
            <button class="btl">
                <img src="<?= URL ?>/Public/images/main/barra-lateral/notas.png" alt="placeholder icon" class="icone-btl">
                <span>Notas</span>
            </button>
            <button class="btl">
                <img src="<?= URL ?>/Public/images/main/barra-lateral/calendario.png" alt="placeholder icon" class="icone-btl">
                <span>Calendário</span>
            </button>
        </div>

        <h3>PREFERÊNCIAS</h3>
        <div class="botoes-bala">
            <button class="btl">
                <img src="<?= URL ?>/Public/images/main/barra-lateral/configuracoes.png" alt="placeholder icon" class="icone-btl">
                <span>Configurações</span>
            </button>
            <button class="btl">
                <img src="<?= URL ?>/Public/images/main/barra-lateral/ajuda.png" alt="placeholder icon" class="icone-btl">
                <span>Ajuda</span>
            </button>
            <button class="btl">
                <img src="<?= URL ?>/Public/images/main/barra-lateral/dia-noite.png" alt="placeholder icon" class="icone-btl">
                <span>Modo Escuro</span>
            </button>
        </div>
        <div class="sair">
            <button class="btl-sair">
                <img src="<?= URL ?>/Public/images/main/barra-lateral/sair.png" alt="Sair" class="icone-sair">
                <span class="texto-sair">Sair</span>
            </button>
        </div>
    </div>
</div>
</html>
