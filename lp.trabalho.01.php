<?php

  print "Qual o sexo do cliente? ";
  $sexo = trim(fgets(STDIN));
  
  if ($sexo == "M" || $sexo == "m" || $sexo == "F" || $sexo == "f") {
    
    
    
  }
  else {
    
    print "\nVocê digitou o sexo incorretamente.\nVálido apenas (M/F ou m/f).\nTente novamente.";
    
  }

?>