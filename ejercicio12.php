<?php
if ($_POST){
	
	$valorA=$_POST['valorA'];
	$valorB=$_POST['valorB'];
	
    
   if ($valorA != $valorB){

   	echo "El valor de A es diferente al de B";
   	
   }

   else{
   		echo "El valor de A es igual al de B";
   }

}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Operadores Relacionales</title>
	</head>

    <body>
	 	<form action="ejercicio12.php" method="post">
	 		valor A:
	 		<input type="text" name="valorA" id="">
	 		<br/>
	 		valorB:
	 		<input type="text" name="valorB" id="">
	 		<br/>
	 		<input type="submit" value="Calcular">
	 	</form>
	 </body>

</html>