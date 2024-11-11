<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 HAHA</title>
    <link rel="stylesheet" href="css/estilo5.css">
    <style>
        body {
            font-family: 'Sora', Arial, sans-serif;
            background-color: #f6f6f6;
            color: #181818;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container-404 {
            text-align: center;
            max-width: 600px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            background-color: whitesmoke;
        }

        h1 {
            font-size: 3rem;
            font-weight: 700;
            color: #634741;
        }

    </style>
</head>
<body>
    <div class="container-404">
        <h1>404</h1>
        <p>Oops! A página que você está procurando não foi encontrada.</p>
        <a href="<?= URL ?>/Usuarios/home"><button class="button">Voltar para a página inicial</button></a>


    </div>
</body>
</html>
