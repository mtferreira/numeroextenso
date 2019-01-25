<?php

namespace Mtferreira\NumeroExtenso;

class NumeroExtenso
{
    public static function converter(float $numero)
    {
        if ($numero <= 0) {
            return false;
        }

        $numero          = number_format($numero, 2, '.', '');
        $formatter       = new \NumberFormatter('pt-BR', \NumberFormatter::SPELLOUT);
        $numero          = explode('.', (string) $numero);
        $reais           = $numero[0];
        $centavos        = $numero[1];
        $extensiveNumber = '';
        if ($reais > 0) {
            $extensiveNumber .= $formatter->format($reais);
            $extensiveNumber .= ($reais > 1) ? ' reais' : ' real';
        }

        if (count($numero) > 1 && $centavos > 0) {
            if ($extensiveNumber) {
                $extensiveNumber .= ' e ';
            }

            $extensiveNumber .= $formatter->format($centavos);
            $extensiveNumber .= ($centavos > 1) ? ' centavos' : ' centavo';
        }

        return $extensiveNumber;
    }
}
