<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page4</title>
</head>
<body>
<p>Page 4 - Intégrer un mode révision : l'utilisateur choisit une 
table de multiplication et doit
répondre à une multiplication tirée au hasard dans la table sélectionnée.</p>
<form action="page4.php" method="post">
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
if(isset($_POST['tab[]'])){//si une variable existe ou est déclarée
        $ope = $_POST['tab[]'];//mets la valeur dans $ope
       
    if(isset($_POST['submit'])){//si le bouton est soumi
            foreach($ope as $tablo){//pour chaque élément du tableau $ope  on copie sa valeur dans la variable $tablo
                  echo "voici la table du $tablo <br><br>"; 
                    for($i=0; $i<11; $i++){
                      
                     $resultat = $i*$tablo;
                         echo "$i" . '  ' . "X" . '  ' . "$tablo" . '  '. "=" . $resultat. "<br><br>"; 
                                //montre var i X par var tablo égal à la veriable résultat
                               
                    }
                    echo $tablo_rand = array_rand($tablo);
                    echo "<pre>";
                    print_r($tablo_rand );
                    echo "</pre>";
            }  
    

     }
   

}
?>
<pre>
-------------

                   ^__^
                   (°°)\_________
                   (__)(( )) )))) )\
                        ||---- w || \/
                   www  ||       ||


</pre>
</body> 
</html>
