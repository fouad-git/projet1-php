<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>page1</title>
</head>
<body>
<h1 class="page1">Table de multiplication de 3 !</h1>
<div class="tab3">
<form  action="page1.php" type="hidden" method="post">
<input type="hidden"  name="tab3">

</form>

 <?php
if(isset($_POST['tab3'])){
    $table3 = ($_POST['tab3']);
    $table3 = 3;

   
    for($i = 0; $i<11; $i++){
      echo "$table3" .' '. "x" .' '. "$i" .' '. "=" . $table3 * $i . "<br/>";
    
    }
    
  } 
   else {
      echo "pas encore de chiffre entrée";
        }
 
   
      
?> 

</div>

</body>
</html>