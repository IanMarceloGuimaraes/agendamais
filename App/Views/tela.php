<?php include 'includes/main.php'; ?>

<link rel="stylesheet" href="<?= URL ?>/Public/css/paginas2.css">
<link rel="stylesheet" href="<?= URL ?>/Public/css/calendario.css">

<div class="container">
  <div class="content">

    <!-- Dashboard -->
    <div class="dashboard">

      <!-- Calendário -->
      <div class="calendario">
          <?php
            use App\Helpers\CalendarioHelper;

            CalendarioHelper::gerarCalendario();

            // Definição das atividades
            $atividades = [
                '2024-11-20' => 'Matemática - Lista de Exercícios - 07:00',
                '2024-11-21' => 'História - Mapas Mentais - 01:00',
                '2024-11-25' => 'Filosofia - Revisão de Prova - 08:00',
                '2025-04-17' => 'Geografia - Revisão de Prova - 10:00'
            ];

            // Exibe as atividades com a estrutura nova
            CalendarioHelper::exibirAtividades($atividades);
          ?>
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

      <div class="eu finjo">
        <div id="que não" class="percebo">
          <span class="detalhe">Eu finjo que não percebo...</span> 
          <div class="observacao">
            Mas tudo está sendo observado, o esperto se faz de bobo pra ver até onde o burro se faz de inteligente. 
            <span class="camada-oculta">
              Nesse jogo sutil, cada movimento é estratégico, e cada palavra tem um significado oculto.
            </span>
          </div>
          <p class="reflexao">
            Por trás do meu sorriso sereno, estou atento a cada detalhe, absorvendo informações e compreendendo motivações. 
            Aprendi que nem sempre é prudente revelar todas as cartas que tenho na manga, pois o conhecimento é poder, 
            e a paciência, uma virtude. Às vezes, é mais fácil agir com descrição, permitindo que outros revelem suas intenções sem interferência.
          </p>
          <div class="foco">
            Afinal, a melhor defesa é a percepção aguçada, capaz de desvendar as tramas sutis que permeiam as interações humanas.
          </div>
          <p class="final">
            Enquanto alguns tentam me iludir com suas artimanhas, observo calmamente, ciente de que minha aparente ingenuidade 
            é apenas uma estratégia para extrair informações e desvendar as camadas ocultas das personalidades alheias.
          </p>
        </div>
      </div>

    </div>
  </div>
</div>
