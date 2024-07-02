<?php
class Prodotto
{
    use Position;

    public function __construct(string $titolo, float $prezzo, string $immagine, Categoria $categoria, string $tipo)
    {
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
        $this->tipo = $tipo;
    }

    public function stampaCard()
    {
        echo "<div class='card'>";
        echo "<img src='{$this->immagine}' alt='{$this->titolo}'>";
        echo "<h2>{$this->titolo}</h2>";
        echo "<p>Prezzo: €{$this->prezzo}</p>";
        echo "<p>Categoria: {$this->categoria->icona} {$this->categoria->nome}</p>";
        echo "<p>Tipo: {$this->tipo}</p>";
        echo "</div>";
    }
}
?>