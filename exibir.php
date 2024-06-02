<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pessoa Cadastrada</title>
    <link rel="stylesheet" href="show.css">
    
</head>

<body>

  <fieldset>
  <button onclick="history.back()">Voltar</button>
    <h1>Sua Compra </h1>
   
    <?php

$tipo = $_POST['PessoaTipo'];
require_once("Bebidas.php");

if ($tipo == 'FuncAdm') {
    // Verifique se as variáveis estão definidas no $_POST antes de usá-las
    $cachaca = isset($_POST['cachaca']) ? $_POST['cachaca'] :0 ;
    $jack = isset($_POST['jack']) ? $_POST['jack'] : 0;
    $domeco = isset($_POST['domeco']) ? $_POST['domeco'] :0 ;
    $vodka = isset($_POST['vodka']) ? $_POST['vodka'] :0 ;
    $red = isset($_POST['red']) ? $_POST['red'] : 0;
    $white = isset($_POST['White']) ? $_POST['White'] : 0;
    $gelo = isset($_POST['gelo']) ? $_POST['gelo'] :0 ;
    $energetico = isset($_POST['energetico']) ? $_POST['energetico'] :0 ;

    // Preços unitários das bebidas
    $precoCachaca = 20; // Exemplo: R$10 por unidade
    $precoJack = 140;
    $precoDomeco = 45;
    $precoVodka = 25;
    $precoRed = 120;
    $precoWhite = 120;
    $precoGelo = 5;
    $precoEnergetico = 10;

    // Calcular o valor total
    $valorTotal = ($cachaca * $precoCachaca) +
                  ($jack * $precoJack) +
                  ($domeco * $precoDomeco) +
                  ($vodka * $precoVodka) +
                  ($red * $precoRed) +
                  ($white * $precoWhite) +
                  ($gelo * $precoGelo) +
                  ($energetico * $precoEnergetico);

    // Instancia a classe BebidasQuentes com os valores obtidos do formulário
    $pessoa1 = new BebidasQuentes($cachaca, $jack, $domeco, $vodka, $red, $white, $gelo, $energetico);

    // Chama o método VerPessoa da classe BebidasQuentes e exibe o resultado
    echo $pessoa1->VerPessoa();

    // Exibe o valor total da compra
    echo "<h2>Valor total da compra: R$ $valorTotal Reais </h2>";
}



  
  elseif ($tipo == 'refrigerantes') {
  require_once("Refrigerantes.php");
    $coca = isset($_POST['coca']) ? $_POST['coca'] :0 ;
    $fanta = isset ($_POST['fanta']) ?$_POST['fanta']:0;
    $sprit = isset( $_POST['sprit']) ? $_POST['sprit'] :0;
    $guarana = isset( $_POST['guarana']) ? $_POST['guarana']:0;
    $pepsi = isset($_POST['pepsi']) ? $_POST['pepsi']:0;
    $kaut = isset($_POST['kaut']) ? $_POST['kaut'] :0;
    $gelo = isset ($_POST['gelo']) ?$_POST['gelo'] :0;
    $energetico= isset($_POST['energetico']) ?$_POST['energetico']:0;
    

    $precogelo = 5;
    $precoenergetico = 10;
    $precococa = 12;
    $precoguarana = 9.50;
    $precokaut = 8.50;
    $precosprit = 9;
    $precopepsi = 10;
    $precofanta = 9;

    $valorTotal = ($coca * $precococa)+
                  ($fanta * $precofanta)+
                  ($sprit * $precosprit)+
                  ($kaut * $precokaut)+
                  ($gelo * $precogelo)+
                  ($guarana * $precoguarana)+
                  ($pepsi * $precopepsi)+
                  ($energetico* $precoenergetico);

    $pessoa2 = new refrigerentes($coca, $fanta, $sprit, $guarana, $pepsi, $kaut , $gelo, $energetico);
    echo $pessoa2->VerPessoa();
    echo" <h2> o valor da sua compra: R$ $valorTotal Reais <h2>";
 
  }
  
  
  
  
  elseif ($tipo == 'suco')  {
    require_once("Suco.php");

    $laranja = isset( $_POST['laranja'])?$_POST['laranja']:0;
    $maracuja = isset( $_POST['maracuja'])?$_POST['maracuja']:0;
    $manga = isset( $_POST['manga'])?$_POST['manga']:0;
    $maca = isset( $_POST['maca'])?$_POST['maca']:0;
    $uva = isset( $_POST['uva'])?$_POST['uva']:0;
    $morango = isset( $_POST['morango'])?$_POST['morango']:0;
    $abacaxi = isset( $_POST['abacaxi'])?$_POST['abacaxi']:0;

    $precolaranja = 8;
    $precomaracuja = 8.50;
    $precomanga = 7;
    $precomaca = 9;
    $precouva = 8;
    $precomorango = 9;
    $precoabacaxi = 8.50;
    
    $valorTotal =($precolaranja*$laranja)+
                  ($precomaracuja*$maracuja)+
                  ($precomanga*$manga)+
                  ($precomaca*$maca)+  
                  ($precouva*$uva)+  
                  ($precomorango*$morango)+  
                  ($precoabacaxi*$abacaxi);

    
    $pessoa3 = new PessoaSuco ($laranja, $maracuja, $manga, $maca, $uva, $morango, $abacaxi);
    echo $pessoa3->VerPessoa();
    echo"<h2>  o valor da sua compra : R$ $valorTotal Reais </h2>";
  } 

?>

  </fieldset>


</body>

</html>