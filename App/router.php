<?php
// Obter a URI requisitada
$request = $_SERVER['REQUEST_URI'];

// Remove parâmetros de consulta, caso existam
$request = strtok($request, '?');

// Defina as rotas principais
switch ($request) {
    case '/':
    case '/home':
        require_once 'Views/home.php';
        break;
    
    case '/cadastro':
        require_once 'Views/cadastro.php';
        break;

    case '/login':
        require_once 'Views/login.php';
        break;
    
    case '/404':
        require_once 'Views/404.php';
        break;

    default:
        // Redireciona para a página 404 se a rota não for encontrada
        header("Location: /404");
        exit;
}
