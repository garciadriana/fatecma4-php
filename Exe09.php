<?php
if(isset($_POST["submit"])){
  $livros = $_POST["livro"];
  $quantidade = $_POST["quantidade"];
  $cidade = $_POST["cidade"];
  $nomeDaCidade = "";
  switch ($cidade) {
    case 1:
      $nomeDaCidade = "Santo andré";
      break;
    case 2:
      $nomeDaCidade = "São bernardo";
      break;
    case 5:
      $nomeDaCidade = "São caetano";
      break;
    default:
      $nomeDaCidade = "Outras";
      break;
  }

  $valorDosLivros = $livros*$quantidade;
  $taxaDeImpostos = $valorDosLivros*0.0825;
  $taxaDeFrete = $valorDosLivros*$cidade/100;
  $total = $valorDosLivros + $taxaDeImpostos + $taxaDeFrete;

  echo "Voce comprou ${quantidade} livros por R$" . number_format($livros,2, ",", ".") . " cada um, totalizando R$" . number_format($valorDosLivros,2, ",", ".");
  echo "<br>";
  echo "as taxas de imposto de 8,25 totalizam R$". number_format($taxaDeImpostos,2, ",", ".") ;
  echo "<br>" ;
  echo "O frete para ${nomeDaCidade} é de " . number_format($cidade,2, ",", ".") . "%, totalizando R$" . number_format($taxaDeFrete,2, ",", ".");
  echo "<br>" ;
  echo "O valor total do seu pedido é de R$". number_format($total,2, ",", ".") . ", para pagar a vista";
}else {?>
}else {?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Exe07</title>
  </head>
  <body>
    <h1>Exercicio 5 - equipes com até 4 alunos</h1>
    <p>Aluno 1 - Aluno2</p>
    <hr>
    <form name="fomr3" action="Exe09.php" method="POST">

      <input type="radio" name="livro" value="10"> 10
      <br>
      <input type="radio" name="livro" value="12"> 12
      <br>
      <input type="radio" name="livro" value="15"> 15
      <br>
      <input type="text" name="quantidade" value="">
      <br>
      <select name="cidade" value="">
        <option value="1">Santo andre 1%</option>
        <option value="2">São bernardo 2%</option>
        <option value="5">São Caetano 5%</option>
        <option value="10">Outras 10%</option>
      </select>
      <input type="submit" name="submit" value="Enviar">
    </form>
  </body>
  </html>
<?php } ?>
