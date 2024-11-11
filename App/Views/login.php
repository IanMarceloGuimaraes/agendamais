<?php include 'includes/header.php'; ?>

<div class="container">
    <div class="content" style="display: flex; align-items: flex-start;">
        <div class="text-content" style="flex: 1;">
            <h1>Com o Agenda+,<br>você pode<br>transformar o seu<br>tempo em arte.</h1>
            <a href="<?= URL ?>/Usuarios/cadastro"><button class="button">Criar conta</button></a>

            <p>Ou faça o login:</p>
            <form action="/Agenda+/Public/login" method="post" class="form">
                <input type="email" name="email" placeholder="Email *" required>
                <input type="password" name="senha" placeholder="Senha *" required>
                <button type="submit" class="button">Entrar</button>
            </form>

        </div>
        <img src="<?= URL ?>/Public/images/Home.png" alt="Descrição da imagem">
    </div>
</div>

<?php include 'includes/footer.php'; ?>
