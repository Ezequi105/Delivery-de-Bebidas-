<?php
require_once("Pessoa.php");// Inclui o arquivo "Pessoa.php" que contém a definição da classe Pessoa.

class refrigerentes extends Pessoa // aqui esta fazendo a herança da class pessoa
{
    public $coca; // aqui declara as propriedades da class refrigerentes 
    public $fanta;
    public $sprit;
    public $guarana;
    public $pepsi;
    public $kaut;

    
   

    function __construct($coca, $fanta, $sprit, $guarana, $pepsi, $kaut , $gelo, $energetico) 
    //Este é o método construtor da classe. 
    //Ele é chamado quando um novo objeto da classe FuncionarioDocente é criado.
     //O construtor recebe vários parâmetros que são usados para inicializar as propriedades da classe.
    {
        
        parent::__construct( $gelo, $energetico );// Esta linha chama o construtor da classe pai (Pessoa) para inicializar as propriedades herdadas (gelo e energetico).
        
        $this->coca = $coca; //Estas linhas inicializam as propriedades específicas da classe FuncionarioDocente com os valores passados como parâmetros.
        $this->fanta = $fanta;
        $this->sprit = $sprit;
        $this->guarana = $guarana;
        $this->pepsi = $pepsi;
        $this->kaut = $kaut;

    }

    function VerPessoa() // esse metodo vai exibir as propriedades do objeto pessoa 
    {
        parent::VerPessoa(); // essa linha e para exibir informaçoes herdades 
        
        echo "<p> <b>Coca: </b>" . $this->coca . "</p>";
        echo "<p> <b>fanta: </b>" . $this->fanta . " </p>";
        echo "<p> <b>sprit: </b> " . $this->sprit. ' ' . "</p>";
        echo "<p> <b>guarana: </b> " . $this->guarana. ' ' . "</p>";
        echo "<p> <b>pepsi: </b> " . $this->pepsi. ' ' . "</p>";
        echo "<p> <b>kaut: </b> " . $this->kaut. '' . "</p>";
        echo "<p> <b>gelo: </b> " . $this->gelo. ' ' . "</p>";
        echo "<p> <b>energetico: </b> " . $this->energetico . "</p>";
        echo "<hr>";
        echo "</div>";
        //Estas linhas exibem as informações específicas da classe FuncionarioDocente, 
        //incluindo as propriedades herdadas (gelo e energetico) e as propriedades específicas
        // (coca, pepsi, guarana, sprit, fanta, kaut).
    }
}
?>