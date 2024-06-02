<?php
require_once("Pessoa.php"); // incluindo o arquivo da class pessoa 

class bebidasQuentes extends Pessoa // esta fazendo a herança da class pessoa 
{
    public $cachaca; // esta declarando as propiedades da class bebidas quentes 
    public $jack;
    public $domeco;
    public $vodka;
    public $white;
    public $red;
    

    function __construct($cachaca,$jack, $domeco, $vodka, $white, $red, $gelo,$energetico) // esta criando novas propriedades para a class bebidas quentes. (gelo , energetico)
    {
        parent::__construct( $gelo,$energetico); // esta inicializando as propiedades herdades da class e da propia class 
        $this->cachaca = $cachaca;
        $this->jack = $jack;
        $this->domeco = $domeco;
        $this->vodka = $vodka;
        $this->white = $white; 
        $this->red = $red;
      
    }

    function VerPessoa() // esta exibindo as informçoes da class 
    {
        parent::VerPessoa(); // aqui esta exibindo as propriedades herdadas e as da class tbm 
        echo "<div id='conteudo'>";
        echo " <p> <b>cachaca:</b> " .$this->cachaca. "</p>";
        echo "<p> <b>jack:</b> " . $this->jack. "</p>";
        echo "<p> <b>domeco:</b> " . $this->domeco. "</p>";
        echo "<p> <b>vodka:</b> " . $this->vodka. "</p>";
        echo "<p> <b>red label :</b> " .$this->red. "</p>";
        echo "<p> <b>white:</b> " .$this->white. "</p>";
        echo "<p> <b>gelo:</b> " . $this->gelo . "</p>";
        echo "<p> <b>energetico:</b> " . $this->energetico ."</p> ";
        echo "<hr>";
        echo "</div>";
    }
}
?>