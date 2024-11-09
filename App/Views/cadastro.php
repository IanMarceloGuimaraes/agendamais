<?php include 'includes/header.php'; ?>

<div class="container">
    <div class="content" style="display: flex; align-items: flex-start;">
        <div class="text-content" style="flex: 1;">
            <h1>Crie sua conta no<br>Agenda+ e<br>organize seu tempo!</h1>
            <p>Preencha o formulário abaixo para se cadastrar:</p>
            <form action="/App/Controllers/RegistroController.php" method="post" class="form">
                <input type="text" name="usuario" placeholder="Nome de Usuário *" required>
                <input type="email" name="email" placeholder="Email *" required>
                <input type="password" name="senha" placeholder="Crie uma senha *" required>
                <input type="password" name="confirmar_senha" placeholder="Confirme sua senha *" required>
                
                <button type="submit" class="button">Cadastrar</button>
                <p>Já tem uma conta? <a href="/login">Faça login</a></p>
            </form>
        </div>
        <img src="Images/Home.png" alt="Descrição da imagem"/>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
