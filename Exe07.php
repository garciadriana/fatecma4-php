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
  ." a uma taxa de jurus mensal de " . number_format($taxa/$qtd ,3) . "%<br>"
  ."você tera guardado um total de R$" . number_format($total ,2);
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
    <form name="fomr3" action="Exe07.php" method="POST">

      <p>Quantidade de alunos na equipe </p>
      <input type="text" name="depositos" value="">
      <input type="text" name="qtdDep" value="">
      <p>Nome do representante da equipe</p>
      <input type="text" name="anos" value="1">
      <input type="text" name="taxa" value="2">
      <input type="submit" name="submit" value="Enviar">
    </form>
  </body>
  </html>
<?php } ?>
