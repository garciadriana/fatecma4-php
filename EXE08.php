<?php
$modelo = $_GET["modelo"];
$cor1 = "";
$cor2 = "";
if($modelo=="1"){
	$cor1 = "#006400";
	$cor2 = "#FFFFFF";
} else if($modelo=="2"){
	$cor1 = "#000080";
	$cor2 = "#87CEFA";
} else {
	$cor1 = "#800000";
	$cor2 = "#FFD700";
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercício 08</title>
	<style>
	body{
		background: <?php echo $cor1;?>;
		color: <?php echo $cor2;?>;
		font-family: Century Gothic;
	}
	</style>	
  </head>
  <body>
  <center>
	<h1>Exercício 08 - Modelos de Sequências Diferentes</h1>
	<p>Adriana e Igor</p>
	<hr>
  <?php if($modelo=="1"){?>
	Modelo 1 - Exibir a sequência de 1 até 100 com passo 2
  <?php }else if($modelo=="2"){?>
	Modelo 2 - Exibir a sequência de -50 até 50 com passo 1
  <?php }else{?>
	Modelo 3 - Exibir a sequência de 300 até 350 com passo 3
  <?php }?>
		<hr>
<?php
$cont=1;
if($modelo=="1"){
  for ($i=1; $i <= 100; $i+=2) {
    echo $i . " ";
		  
	if($cont%10==0){
	  echo "<br>";
	} 
	 $cont++;
  }
  echo "fim!";
}


if($modelo=="2"){
  for ($i=-50; $i < 50; $i++) {
    echo $i . " ";
		if($cont%10==0){
	  echo "<br>";
	} 
	 $cont++;
  }
  echo "fim!";
}

if($modelo=="3"){
  for ($i=300; $i < 350; $i+=3) {
    echo $i . " ";
		if($cont%10==0){
	  echo "<br>";
	} 
	 $cont++;
  }
  echo "fim!";
}
?>