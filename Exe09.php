  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Exercício 09</title>
	<style>
	body{
		background: #FF69B4;
		color: #C71585;
		font-family: Century Gothic;
	}
	</style>
  </head>
  </head>
    <body>
	<center>
    <h1>Exercicio 09 - Compra de Livro</h1>
    <p>Adriana e Igor</p>
    <hr>
<?php
if(isset($_POST["submit"])){
  $livros = $_POST["livro"];
  $quantidade = $_POST["quantidade"];
  $cidade = $_POST["cidade"];
  $nomeDaCidade = "";
  switch ($cidade) {
    case 1:
      $nomeDaCidade = "Santo André";
      break;
    case 2:
      $nomeDaCidade = "São Bernardo";
      break;
    case 5:
      $nomeDaCidade = "São Caetano";
      break;
    default:
      $nomeDaCidade = "Outras";
      break;
  }

  $valorDosLivros = $livros*$quantidade;
  $taxaDeImpostos = $valorDosLivros*0.0825;
  $taxaDeFrete = $valorDosLivros*$cidade/100;
  $total = $valorDosLivros + $taxaDeImpostos + $taxaDeFrete;

  echo "Você comprou ${quantidade} livros por R$" . number_format($livros,2, ",", ".") . " cada um, totalizando R$" . number_format($valorDosLivros,2, ",", ".");
  echo "<br>";
  echo "as taxas de imposto de 8,25 totalizam R$". number_format($taxaDeImpostos,2, ",", ".") ;
  echo "<br>" ;
  echo "O frete para ${nomeDaCidade} é de " . number_format($cidade,2, ",", ".") . "%, totalizando R$" . number_format($taxaDeFrete,2, ",", ".");
  echo "<br>" ;
  echo "<h2> O valor total do seu pedido é de R$". number_format($total,2, ",", ".") . ", para pagar a vista</h2>";
  } ?>
