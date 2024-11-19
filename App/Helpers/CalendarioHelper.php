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
}
