<?php

  print "Qual o sexo do cliente? ";
  $sexo = trim(fgets(STDIN));
  
  if ($sexo == "M" || $sexo == "m" || $sexo == "F" || $sexo == "f") {
    
    
    
  }
  else {
    
    print "\nVoc� digitou o sexo incorretamente.\nV�lido apenas (M/F ou m/f).\nTente novamente.";
    
  }

?>