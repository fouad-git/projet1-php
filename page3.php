<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page3</title>
</head>
<body>
    
<h1>Page 3 - Le choix de la ou des table(s) de multiplication à afficher se fait par checkboxes et par un bouton "valider".
     La ou les table(s) de multiplication sélectionée(s) s'affiche(nt) en dessous.</h1>
     <form action="page3.php" method="post">
         <input type='checkbox' name='tab[]' value="1"><br/>
         <input type='checkbox' name='tab[]' value="2"><br/>
         <input type='checkbox' name='tab[]' value="3"><br/>
         <input type='checkbox' name='tab[]' value="4"><br/>
         <input type='checkbox' name='tab[]' value="5"><br/>
         <input type='checkbox' name='tab[]' value="6"><br/>
         <input type='checkbox' name='tab[]' value="7"><br/>
         <input type='checkbox' name='tab[]' value="8"><br/>
         <input type='checkbox' name='tab[]' value="9"><br/>
         <input type='checkbox' name='tab[]' value="10"><br/>
         <input type='submit' name='submit'>
</form>
<?php
if(isset($_POST['tab'])){//si une variable existe ou est déclarée
        $ope = $_POST['tab'];//mets la valeur dans $ope
    
    if(isset($_POST['submit'])){//si le bouton est soumi
            foreach($ope as $tablo){//pour chaque élément du tableau $ope  on copie sa valeur dans la variable $tablo
                  echo "voici la table du $tablo <br><br>";//affiche "voici la table du ('valeur de la variable') 
                    for($i=0; $i<11; $i++){//pour var i égal à 0 ,tant que var i est inférieur à 11,incrémenté de 1.
                      
                          $resultat = $i*$tablo;//création var resultat égal valeur de var i multiplier par 
                          //la valeur de var tablo case sélectionner
                          var_dump($resultat);
                                echo "$i" . '  ' . "X" . '  ' . "$tablo" . '  '. "=" . $resultat. "<br><br>"; //montre var i X par var tablo égal à la veriable résultat
                    }
            }   

     }

}
    
?>
</body>
</html>
