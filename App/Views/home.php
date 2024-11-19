<?php include 'includes/main.php'; ?>

<link rel="stylesheet" href="<?= URL ?>/Public/css/paginas1.css">

<div class="container">
  <div class="content">

    <!-- Dashboard -->
    <div class="dashboard">

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

      <!-- Suas Metas -->
      <div class="suas-metas">
        <h2>Suas Metas:</h2>
        <div class="meta">
          <p><strong>Prova:</strong> Redes de Computadores (0/40)</p>
          <p><strong>Enem:</strong> Redação (0/1000)</p>
        </div>
      </div>

      <!-- Nos Próximos Dias -->
      <div class="proximos-dias">
        <h2>Nos Próximos Dias:</h2>
        <ul>
          <li><span class="tag rosa"></span> Sociologia - Questionário (08 de outubro)</li>
          <li><span class="tag azul"></span> Português - Apostila (18 de novembro)</li>
          <li><span class="tag laranja"></span> Espanhol - Seminário (14 de outubro)</li>
          <li><span class="tag amarelo"></span> Redes de Computadores - Prova (25 de setembro)</li>
        </ul>
      </div>

    </div>
  </div>
</div>
