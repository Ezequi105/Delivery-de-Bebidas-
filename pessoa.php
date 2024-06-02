<?php
/*aqui esta a class pessoa q esta contendo todos os atributos de todas as class  */
class Pessoa
{
    public $gelo;
    public $energetico;

    

    /*aqui esta as ativando as funçoes desses atributos  */




    function __construct($gelo,$energetico)
    {
        $this->gelo = $gelo;
        $this->energetico = $energetico;
        
       
    }

    function VerPessoa() // aqui esta exibindo os atributos 
    {
        echo "<div id='conteudo'>";
        
        //echo "<p> <b>gelo:</b> " . $this->gelo . "</p>";
        //echo "<p> <b>energetico:</b> " . $this->energetico . "</p>";
       
        
    }
}
?>