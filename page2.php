<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page2</title>
</head>
<body>
    <h1>Sélectionner une
 table de multiplication entre 1 et 10 dans la liste déroulante.</h1>
 <form  action="page2.php" method="post">
     <label for="tabmulti">Choississez une table de multiplication au hasard :</label>
<select name="tablo" id="tab10" size="1">
        <option value="1" >table de 1</option> 
         <option value="2" >table de 2</option>
         <option value="3" >table de 3</option>
         <option value="4" >table de 4</option>
         <option value="5" >table de 5</option>
         <option value="6" >table de 6</option>
         <option value="7" >table de 7</option>
         <option value="8" >table de 8</option>
         <option value="9" >table de 9</option>
         <option value="10" >table de 10</option>
</select>
<!--<input type="number" name="tablo" id="tabmulti">-->

<input type="submit" name="tabmulti" value="valider">

</form>
<?php
if(isset($_POST['tablo'])){
$tablu = $_POST['tablo'];

  for($i = 0; $i<11; $i++){
      echo "<br/><center>" . $tablu . "*" . $i . "=" . $tablu * $i . "</center> ";
      
  }
}  
else{
    echo "Vous n'avez pas sélectionner de chiffres";
  }

?> 
</body>
</html>