<?php

  print "Qual o sexo do cliente? ";
  $sexo = trim(fgets(STDIN));
  
  if ($sexo == "M" || $sexo == "m" || $sexo == "F" || $sexo == "f") {
    
    if ($sexo == "M" || $sexo == "m") {
      
      print "Quantas cervejas foram consumidas? ";
      $cerva = trim(fgets(STDIN));
      
      print "Quantos refrigerantes foram consumidos? ";
      $refri = trim(fgets(STDIN));
      
      print "Quantos espetinhos foram consumidos? ";
      $espet = trim(fgets(STDIN));
      
      $entrada = 10;
      $total_bebida_comida = ($cerva * 2.5) + ($refri * 2) + ($espet * 4);
      
        if ($total_bebida_comida <= 15) {
          
          $couver = 3;
          
        }
        else {
          
          $couver = 0;
          
        }
      
      $subtotal = $entrada + $total_bebida_comida + $couver;
      $total = $subtotal * 1.1;
      
      print "\nValor da conta:";
      print "\nR$ " . $entrada . " (valor básico)";
      print "\nR$ " . $total_bebida_comida . " (bebida e comida)";
      print "\nR$ " . $couver . " (cantores)";
      print "\nR$ " . $subtotal . " (subtotal sem 10%)";
      print "\n------------------------------------------";
      print "\nR$ " . $total . " (total)";
      
    }
    else {
    
      print "Quantas cervejas foram consumidas? ";
      $cerva = trim(fgets(STDIN));
      
      print "Quantos refrigerantes foram consumidos? ";
      $refri = trim(fgets(STDIN));
      
      print "Quantos espetinhos foram consumidos? ";
      $espet = trim(fgets(STDIN));
      
      $entrada = 8;
      $total_bebida_comida = ($cerva * 2.5) + ($refri * 2) + ($espet * 4);
      
      if ($total_bebida_comida <= 15) {
      
        $couver = 3;
      
      }
      else {
      
        $couver = 0;
      
      }
      
      $subtotal = $entrada + $total_bebida_comida + $couver;
      $total = $subtotal * 1.1;
      
      print "\nValor da conta:";
      print "\nR$ " . $entrada . " (valor básico)";
      print "\nR$ " . $total_bebida_comida . " (bebida e comida)";
      print "\nR$ " . $couver . " (cantores)";
      print "\nR$ " . $subtotal . " (subtotal sem 10%)";
      print "\n------------------------------------------";
      print "\nR$ " . $total . " (total)";      
      
    }
    
  }
  else {
    
    print "\nVocê digitou o sexo incorretamente.\nVálido apenas (M/F ou m/f).\nTente novamente.";
    
  }

?>