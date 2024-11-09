<?php include 'includes/header.php'; ?>

<div class="container">
    <div class="content" style="display: flex; align-items: flex-start;">
        <div class="text-content" style="flex: 1;">
            <h1>Com o agenda +,<br>você pode<br>transformar o seu<br>tempo em arte.</h1>
            <a href="/cadastro.php"><button class="button">Criar conta</button></a>
            
            <p>Ou faça o login :</p>
            <form action="/App/Controllers/RegistroController.php" method="post" class="form">
                <input type="email" name="email" placeholder="Email *" required>
                <input type="password" name="senha" placeholder="Senha *" required>
                <button type="submit" class="button">Entrar</button>
            </form>

        </div>
        <img src="Images/Home.png" alt="Descrição da imagem"/>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
