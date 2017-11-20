<?php
  $inicio = $_GET["inicio"];
  $fim = $_GET["fim"];
  $tipo = $_GET["tipo"];
 ?>
 <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Exercício 06</title>
	<style>
		body{
			background: #6A5ACD;
			color: #B0C4DE;
			font-family: Century Gothic;
		}
		h1{
			font-weight: bold;
		}
		</style>
  </head>
  <body>
  <center>
  <?php if($tipo=="1"){?>
	<h1>Exercício 06 - Números Pares</h1>
  <?php }else{?>
	<h1>Exercício 06 - Números Ímpares</h1>
  <?php }?>
	Utilizando Loop com for()
		<hr>
<?php
  $inicio = $_GET["inicio"];
  $fim = $_GET["fim"];
  $tipo = $_GET["tipo"];
  for ($i=$inicio; $i <= $fim ; $i++) {
    if($tipo=="1"){
      if($i%2==0){
        echo "${i} - ";
      }
    }
    if($tipo=="2"){
      if($i%2!=0){
        echo "${i} - ";
      }
    }
  }
    echo "fim!";

 ?>
</center>
</body>
</html>
