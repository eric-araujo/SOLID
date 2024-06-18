<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\PontuavelInterface;

class CalculadorPontuacao
{
    public function recuperarPontuacao(PontuavelInterface $conteudo): int
    {
        return $conteudo->recuperarPontuacao();
    }
}
