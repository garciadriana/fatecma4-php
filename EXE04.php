<!DOCTYPE html>
<html><!--EXERCÍCIO 04 - PHP - PROF. CELSO GALLÃO -->
<head>
<title>Exercício 04</title>
</head>
<body bgcolor="red" text="white">
<center>
<h1>Exercício 04 - Verficação do Sexo</h1>
<h2>Condicional com if()<h2>
<hr>
<h1>
<?php
//Definindo variáveis e valores
$aluno1 = "Adriana";
$aluno2 = "Mileny";
$nomes = "$aluno1 e $aluno2";
$sexo1 = "f";
$sexo2 = "f";

//Utilizando condicional if() e operadores lógicos
if (($sexo1 == "M" || $sexo1 =="m") && ($sexo2 == "M" || $sexo2=="m")){
echo "$nomes - São dois cabras machos!";
}
elseif (($sexo1 == "F" || $sexo1 == "f") && ($sexo2 == "F" || $sexo2 == "f")){
echo "$nomes - São duas princesinhas!";
}
else{
echo "$nomes - É um lindo casal!";
}
?>
</h1>
</center>
</body>
</html>