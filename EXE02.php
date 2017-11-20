<!DOCTYPE HTML>
<META charset="UTF-8">
<HTML><!--Exercício 02 - PHP - Prof.Celso Gallão-->
<HEAD>
	<TITLE>Exercício 02</TITLE>
</HEAD>
<BODY BGCOLOR="orange" TEXT="brown">
<?php
echo "<CENTER><H2>Exercício 02<P></H2>";
echo "<H3>Adriana e Igor</H3><HR>";

$nome1 = "José";
$nome2 = "Maria";
$mensagem1 = "$nome1 e $nome2";
echo $mensagem1;

echo "<br>";
$mensagem2 = $nome1 ." ama ". $nome2;
echo $mensagem2;

print "<br>";
print 'A variável $nome1 guarda '. $nome1;
print "<br>";
print 'A variável $nome2 guarda '. $nome2;
print "</CENTER>";
?>
</BODY>
</HTML>