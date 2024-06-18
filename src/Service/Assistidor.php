<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\AssistivelInterface;

class Assistidor
{
    public function assistir(AssistivelInterface $conteudo): void
    {
        $conteudo->assistir();
    }
}
