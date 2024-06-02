<?php
require_once("Pessoa.php");
class PessoaSuco extends Pessoa
{
    public $laranja;
    public $maracuja;
    public $manga;
    public $maca;
    public $uva;
    public $morango;
    public $abacaxi;


    function __construct($laranja, $maracuja, $manga, $maca, $uva, $morango, $abacaxi)
    {
        $this->laranja = $laranja;
        $this->maracuja = $maracuja;
        $this->manga = $manga;
        $this->maca = $maca;
        $this->uva = $uva;
        $this->morango = $morango;
        $this->abacaxi = $abacaxi;
    }

    function VerPessoa()
    {
        parent::VerPessoa();
        echo "<p><b>laranja: $this->laranja </p>";
        echo "<p><b>maracuja: $this->maracuja </p>";
        echo "<p><b>manga: $this->manga </p>";
        echo "<p><b>maca: $this->maca </p>";
        echo "<p><b>uva: $this->uva </p>";
        echo "<p><b>morango: $this->morango </p>";
        echo "<p><b>abacaxi:  $this->abacaxi </p>";        
        echo "<hr>";
        echo "</div>";
    }
}
?>