<?php include 'includes/main.php'; ?>

<link rel="stylesheet" href="<?= URL ?>/Public/css/paginas1.css">

<div class="container">
  <div class="content"> 
    <!-- Calendário -->
    <div class="calendario">
        <?php
          use App\Helpers\CalendarioHelper;
          CalendarioHelper::gerarCalendario();
        ?>
        <div class="secoes-abaixo">
          <div class="hoje">
            <p><strong>Hoje:</strong> Matemática - Lista de Exercícios - 07:00</p>
          </div>
          <div class="amanha">
            <p><strong>Amanhã:</strong> História - Mapas Mentais - 01:00</p>
          </div>
        </div>
      </div>

  </div>
</div>