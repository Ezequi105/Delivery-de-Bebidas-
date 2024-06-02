<?php

$Pessoa = $_POST['pessoa'];
if ($Pessoa == "FuncAdm") {
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
        echo "<title>x</title>";
        echo "<meta charset='utf-8'>";
        echo " <link rel='stylesheet' href='BQ.css' />";
    echo "</head>";
    echo "<body>";
        echo "<div id='header'>";
             echo "<h1 id='h1' align='center'> Bebidas Quentes</h1>";
         echo "</div>";
    echo "<div id='content'>";
    
    echo "<fieldset>";
    //echo "<main id='formulario' method='post' action='exibir.php'>";
    
    //Nota: O type="hidden" deve ser aplicado corretamente no input escondido, não no botão submit.  
    
      
        echo 
        '<form action="exibir.php" method="post">
            <label>
                <img src="img/images.jpg" alt="">
            </label><br>
            <label for="quantidade">Cachaça 51 </label>
            <label for="quantidade"> R$ 20,00 </label>
            <input type="number" id="quantidade" name="cachaca" min="1" value="1" required><br>
            <input type="submit" value="Enviar" >
            <input type="hidden" value="FuncAdm" name="PessoaTipo"> 
        </form>';
    
    
    
        echo 
        '<form action="exibir.php" method="post">
        <label>
            <img src="img/jack.jpg" alt="">
        </label><br>
        <label for="quantidade">Jack Daniels</label>
        <label for="quantidade"> R$ 140,00 </label>
        <input type="number" id="quantidade" name="jack" min="1" value="1" required><br>
        <input type="submit" value="Enviar" >
        <input type="hidden" value="FuncAdm" name="PessoaTipo">

        </form>'; 

    
             echo '<form action="exibir.php" method="post">
            <label>
                <img src="img/screen.webp" alt="">
            </label><br>
            <label for="quantidade">Domeco</label>
            <label for="quantidade"> R$ 45,00 </label>
            <input type="number" id="quantidade" name="domeco" min="1" value="1" required><br>
            <input type="submit" value="Enviar" >
            <input type="hidden" value="FuncAdm" name="PessoaTipo">

            </form>';
                    

  
            echo '<form action="exibir.php" method="post">
            <label>
                <img src="img/vodka.jpg" alt="">
            </label><br>
            <label for="quantidade">Vodka</label>
            <label for="quantidade"> R$ 25,00 </label>
            <input type="number" id="quantidade" name="vodka" min="1" value="1" required><br>
            <input type="submit" value="Enviar" >
            <input type="hidden" value="FuncAdm" name="PessoaTipo">

            </form>'; 

   
            echo '<form action="exibir.php" method="post">
            <label>
                <img src="img/white.png" alt="">
            </label><br>
            <label for="quantidade">White Horse</label>
            <label for="quantidade"> R$ 120,00 </label>
            <input type="number" id="quantidade" name="red" min="1" value="1" required><br>
            <input type="submit" value="Enviar" >
            <input type="hidden" value="FuncAdm" name="PessoaTipo">

            </form>'; 

            
            echo '<form action="exibir.php" method="post">
            <label>
                <img src="img/red.jpg" alt="">
            </label><br>
            <label for="quantidade">Red Label</label>
            <label for="quantidade"> R$ 120,00 </label>
            <input type="number" id="quantidade" name="White" min="1" value="1" required><br>
            <input type="submit" value="Enviar" >
            <input type="hidden" value="FuncAdm" name="PessoaTipo">
            
            </form>';
            
            echo 
        '<form action="exibir.php" method="post">
            <label>
                <img src="img/geloo.jpg" alt="">
            </label><br>
            <label for="quantidade">Gelo de Sabor</label>
            <label for="quantidade"> R$ 5,00 </label>
            <input type="number" id="quantidade" name="gelo" min="1" value="1" required><br>
            <input type="submit" value="Enviar" >
            <input type="hidden" value="FuncAdm" name="PessoaTipo">
        </form>';
        
        echo 
        '<form action="exibir.php" method="post">
            <label>
                <img src="img/energetico.jpg" alt="">
            </label><br>
            <label for="quantidade">Energetico</label>
            <label for="quantidade"> R$ 10,00 </label>
            <input type="number" id="quantidade" name="energetico" min="1" value="1" required><br>
            <input type="submit" value="Enviar">
            <input type="hidden" value="FuncAdm" name="PessoaTipo">
        </form>';

        echo '</div>';
    echo "</fieldset>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
}


 elseif ($Pessoa == 'FuncDocente') {
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
            echo "<title>x</title>";
            echo "<meta charset='utf-8'>";
          echo " <link rel='stylesheet' href='BQ.css' />";
    echo "</head>";
    echo "<body>";
    echo "<div id='header'>";
        echo "<h1 id='h1' align='center'>Refrigerantes</h1>";
    echo "</div>";
    echo "<div id='content'>";
    echo "<fieldset>";
            
   echo 
           '<form action="exibir.php" method="post">
               <label>
                   <img src="img/coca.webp" alt="">
               </label><br>
               <label for="quantidade">Coca Cola </label>
               <label for="quantidade"> R$ 12,00 </label>
               <input type="number" id="quantidade" name="coca" min="1" value="1" required><br>
               <input type="submit" value="Enviar" >
               <input type="hidden" value="refrigerantes" name="PessoaTipo">

           </form>';

           echo 
           '<form action="exibir.php" method="post">
               <label>
                   <img src="img/guarana.jpg" alt="">
               </label><br>
               <label for="quantidade">guarana</label>
               <label for="quantidade"> R$ 9,50 </label>
               <input type="number" id="quantidade" name="guarana" min="1" value="1" required><br>
               <input type="submit" value="Enviar" >
               <input type="hidden" value="refrigerantes" name="PessoaTipo">

           </form>';
           
           
           echo 
           '<form action="exibir.php" method="post">
               <label>
                   <img src="img/kuat.jpg" alt="">
               </label><br>
               <label for="quantidade">Kaut</label>
               <label for="quantidade"> R$ 8,50 </label>
               <input type="number" id="quantidade" name="kaut" min="1" value="1" required><br>
               <input type="submit" value="Enviar" >
               <input type="hidden" value="refrigerantes" name="PessoaTipo">

           </form>';

           echo 
           '<form action="exibir.php" method="post">
               <label>
                   <img src="img/pepsi.webp" alt="">
               </label><br>
               <label for="quantidade">Pepsi</label>
               <label for="quantidade"> R$ 10,00 </label>
               <input type="number" id="quantidade" name="pepsi" min="1" value="1" required><br>
               <input type="submit" value="Enviar">
               <input type="hidden" value="refrigerantes" name="PessoaTipo">
           </form>';

           echo 
           '<form action="exibir.php" method="post">
               <label>
                   <img src="img/fanta.png" alt="">
               </label><br>
               <label for="quantidade">Fanta</label>
               <label for="quantidade"> R$ 9,50 </label>
               <input type="number" id="quantidade" name="fanta" min="1" value="1" required><br>
               <input type="submit" value="Enviar" >
               <input type="hidden" value="refrigerantes" name="PessoaTipo">
           </form>';
           
           echo 
           '<form action="exibir.php" method="post">
               <label>
                   <img src="img/sprit.webp" alt="">
               </label><br>
               <label for="quantidade">Sprit</label>
               <label for="quantidade"> R$ 9,00 </label>
               <input type="number" id="quantidade" name="sprit" min="1" value="1" required><br>
               <input type="submit" value="Enviar" >
               <input type="hidden" value="refrigerantes" name="PessoaTipo">
           </form>';

            echo 
            '<form action="exibir.php" method="post">
                <label>
                    <img src="img/geloo.jpg" alt="">
                </label><br>
                <label for="quantidade">Gelo de Sabor</label>
                <label for="quantidade"> R$ 5,00 </label>
                <input type="number" id="quantidade" name="gelo" min="1" value="1" required><br>
                <input type="submit" value="Enviar" >
                <input type="hidden" value="refrigerantes" name="PessoaTipo">
            </form>';
            
            echo 
            '<form action="exibir.php" method="post">
                <label>
                    <img src="img/energetico.jpg" alt="">
                </label><br>
                <label for="quantidade">Energetico</label>
                <label for="quantidade"> R$ 10,00 </label>
                <input type="number" id="quantidade" name="energetico" min="1" value="1" required><br>
                <input type="submit" value="Enviar">
                <input type="hidden" value="refrigerantes" name="PessoaTipo">
            </form>'; 

    echo '</div>';
    echo "</fieldset>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
}
else {
    echo "<!DOCTYPE html>";
    echo "<html>";
        echo "<head>";
        echo "<title>Página de cadastro</title>";
        echo "<meta charset='utf-8'>";
        echo " <link rel='stylesheet' href='BQ.css' />";
    echo "</head>";
    echo "<body>";
    echo "<div id='header'>";
        echo "<h1 id='h1' align='center'>sucos</h1>";
    echo "</div>";
    echo "<div id='content'>";
    echo "<fieldset>";
    
    echo 
           '<form action="exibir.php" method="post">
               <label>
                   <img src="img/laranja.webp" alt="">
               </label><br>
               <label for="quantidade">laranja </label>
               <label for="quantidade"> R$ 8,00 </label>
               <input type="number" id="quantidade" name="laranja" min="1" value="1" required><br>
               <input type="submit" value="Enviar" >
               <input type="hidden" value="suco" name="PessoaTipo">

           </form>';

           echo 
           '<form action="exibir.php" method="post">
               <label>
                   <img src="img/maracuja.jpg" alt="">
               </label><br>
               <label for="quantidade">maracuja</label>
               <label for="quantidade"> R$ 8,50 </label>
               <input type="number" id="quantidade" name="maracuja" min="1" value="1" required><br>
               <input type="submit" value="Enviar" >
               <input type="hidden" value="suco" name="PessoaTipo">

           </form>';
           
           
           echo 
           '<form action="exibir.php" method="post">
               <label>
                   <img src="img/suco.jpg" alt="">
               </label><br>
               <label for="quantidade">manga</label>
               <label for="quantidade"> R$ 7,00 </label>
               <input type="number" id="quantidade" name="manga" min="1" value="1" required><br>
               <input type="submit" value="Enviar" >
               <input type="hidden" value="suco" name="PessoaTipo">

           </form>';

           echo 
           '<form action="exibir.php" method="post">
               <label>
                   <img src="img/maça.webp" alt="">
               </label><br>
               <label for="quantidade">maça</label>
               <label for="quantidade"> R$ 9,00 </label>
               <input type="number" id="quantidade" name="maca" min="1" value="1" required><br>
               <input type="submit" value="Enviar">
               <input type="hidden" value="suco" name="PessoaTipo">
           </form>';

           echo 
           '<form action="exibir.php" method="post">
               <label>
                   <img src="img/uva.webp" alt="">
               </label><br>
               <label for="quantidade">Uva</label>
               <label for="quantidade"> R$ 8,00 </label>
               <input type="number" id="quantidade" name="uva" min="1" value="1" required><br>
               <input type="submit" value="Enviar" >
               <input type="hidden" value="suco" name="PessoaTipo">
           </form>';
           
           echo 
           '<form action="exibir.php" method="post">
               <label>
                   <img src="img/morango.webp" alt="">
               </label><br>
               <label for="quantidade">Morango</label>
               <label for="quantidade"> R$ 9,00 </label>
               <input type="number" id="quantidade" name="morango" min="1" value="1" required><br>
               <input type="submit" value="Enviar" >
               <input type="hidden" value="suco" name="PessoaTipo">
           </form>';

            echo 
            '<form action="exibir.php" method="post">
                <label>
                    <img src="img/abacaxi.jpg" alt="">
                </label><br>
                <label for="quantidade">abacaxi</label>
                <label for="quantidade"> R$ 8.50 </label>
                <input type="number" id="quantidade" name="abacaxi" min="1" value="1" required><br>
                <input type="submit" value="Enviar" >
                <input type="hidden" value="suco" name="PessoaTipo">
            </form>';
            
          
    echo '</div>';
    echo "</fieldset>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
}

?>