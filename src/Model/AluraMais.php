<?php

namespace Alura\Solid\Model;

class AluraMais extends Video implements PontuavelInterface
{
    private string $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    public function recuperarUrl(): string
    {
        return self::URL_VIDEO . str_replace(' ', '-', strtolower($this->categoria));
    }

    public function recuperarPontuacao(): int
    {
        return $this->minutosDeDuracao() * 2;
    }
}
