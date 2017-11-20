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
} ?>
