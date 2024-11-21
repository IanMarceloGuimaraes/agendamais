<?php
namespace App\Helpers;

class CalendarioHelper
{
    public static function gerarCalendario($mes = null, $ano = null)
    {
        $mes = $mes ?? date('n'); // Mês atual
        $ano = $ano ?? date('Y'); // Ano atual

        $diasDaSemana = ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'];
        $totalDias = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);
        $primeiroDia = date('w', strtotime("$ano-$mes-01"));

        echo "<table>";
        echo "<thead><tr>";
        foreach ($diasDaSemana as $dia) {
            echo "<th>$dia</th>";
        }
        echo "</tr></thead><tbody><tr>";

        for ($i = 0; $i < $primeiroDia; $i++) {
            echo "<td></td>";
        }

        for ($dia = 1; $dia <= $totalDias; $dia++) {
            $diaAtual = ($dia == date('j') && $mes == date('n') && $ano == date('Y')) ? 'highlight' : '';
            echo "<td class='$diaAtual'>$dia</td>";
            if (($primeiroDia + $dia) % 7 == 0) {
                echo "</tr><tr>";
            }
        }

        while (($primeiroDia + $totalDias) % 7 != 0) {
            echo "<td></td>";
            $primeiroDia++;
        }

        echo "</tr></tbody></table>";
    }

    public static function exibirAtividades($atividades){
        // Define o local para português
        setlocale(LC_TIME, 'pt_BR.utf8', 'pt_BR', 'portuguese');

        // Datas importantes
        $hoje = date('Y-m-d');
        $amanha = date('Y-m-d', strtotime('+1 day'));
        $ontem = date('Y-m-d', strtotime('-1 day'));
        $anteontem = date('Y-m-d', strtotime('-2 days'));

        foreach ($atividades as $data => $descricao) {
            $dataTimestamp = strtotime($data);
            $mesmoAno = date('Y', $dataTimestamp) == date('Y');
            $formato = $mesmoAno ? '%d de %B' : '%d de %B de %Y';
            $dataFormatada = ucfirst(strftime($formato, $dataTimestamp));

            // Divide a descrição em partes
            [$materia, $atividade, $hora] = explode(' - ', $descricao);

            // Determina o rótulo
            if ($data == $hoje) {
                $rotulo = 'Hoje';
            } elseif ($data == $amanha) {
                $rotulo = 'Amanhã';
            } elseif ($data == $ontem) {
                $rotulo = 'Ontem';
            } elseif ($data == $anteontem) {
                $rotulo = 'Anteontem';
            } else {
                $rotulo = $dataFormatada;
            }

            // Gera o HTML
            echo "<div class='atividade'>
                <div class='rotulo'>$rotulo</div>
                <div class='detalhes'>
                    <div class='materia'>
                        <strong>$materia</strong>
                        <span>$atividade</span>
                    </div>
                    <div class='data'>
                        <strong>Data</strong>
                        <span>$dataFormatada</span>
                    </div>
                    <div class='hora'>
                        <strong>Hora</strong>
                        <span>$hora</span>
                    </div>
                </div>
            </div>";
        }
    }

}
