 <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Exercício 07</title>
	<style>
	body{
		background: #008000;
		color: #9ACD32;
		font-family: Century Gothic;
		
	}
	</style>
  </head>
  <body>
  <center>
    <h1>Valor futuro com depósitos regulares</h1>
	<hr>
<?php
if(isset($_POST["submit"])){
  $dep = $_POST["depositos"];
  $qtd = $_POST["qtdDep"];
  $anos = $_POST["anos"];
  $taxa = $_POST["taxa"];
  $taxaPorcento = $taxa/100;

  $depositos=$qtd*$anos;
  $total = $dep;
  $contador = 1;
  while($depositos > $contador){
    $jurosDoTotal=$total*($taxaPorcento/$qtd);
    $total+=$jurosDoTotal+$dep;
    $contador++;
  }
  echo "Fazendo " . $depositos . " mensais de R$${dep} <br>"
  ." a uma taxa de juros mensal de " . number_format($taxa/$qtd ,3) 
  . "%<br>"
  ."você terá guardado um total de R$" . number_format($total ,2);
} ?>
  </body>
  </center>