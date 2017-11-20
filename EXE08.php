<?php

if($_GET["modelo"]=="1"){
  for ($i=1; $i <= 100; $i+=2) {
    echo $i . " ";
  }
  echo "fim !";
}


if($_GET["modelo"]=="2"){
  for ($i=-50; $i < 50; $i++) {
    echo $i . " ";
  }
  echo "fim !";
}

if($_GET["modelo"]=="3"){
  for ($i=300; $i < 350; $i+=3) {
    echo $i . " ";
  }
  echo "fim !";
}
