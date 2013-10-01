
<html>
  <head>
  
  
  </head>
  <body>
    <h2>Panel Principal</h2>
	<a href="Tarea4.0_POST .php"><h4>Intentar de nuevo</h4></a>
<?php
    // obtiene los datos de entrada del formulario
    $Codigo = $_POST['txtCodigo'];
    $Pass = $_POST['txtPass'];
    // utiliza los datos de entrada del formulario
   
	
	if($Codigo == 100 and $Pass == "udg"){
	
	echo "<h1>Bienvenido</ h1>";
	}else{
	
	echo "<h1>Error</ h1>";
	
	}
    ?>
	
	
	
</body>
</html