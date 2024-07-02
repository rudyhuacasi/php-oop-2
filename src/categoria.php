<?php
class Categoria
{
    public string $nome;
    public string $icona;

    public function __construct(string $nome, string $icona)
    {
        $this->nome = $nome;
        $this->icona = $icona;
    }
}
?>