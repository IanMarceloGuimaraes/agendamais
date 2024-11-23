<?php include 'includes/main.php'; ?>

<link rel="stylesheet" href="<?= URL ?>/Public/css/paginas2.css">
<link rel="stylesheet" href="<?= URL ?>/Public/css/calendario2.css">

<div class="container">
  <div class="content"> 
    <!-- Calendário -->
    <div class="calendario">
        <?php
          use App\Helpers\CalendarioHelper;

          // Gera o calendário (não sei como isso está sendo usado, mas mantive)
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
  </div>
</div>

<?php include 'includes/footer.php'; ?>