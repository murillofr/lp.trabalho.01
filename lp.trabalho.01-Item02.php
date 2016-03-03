<?php

  print "Total de rendimentos bancarios: ";
  $total_rend_banc = trim(fgets(STDIN));
  
  print "Total de rendimentos de salarios ou servicos: ";
  $total_rend_sal_ser = trim(fgets(STDIN));
  
  print "Total de outros rendimentos: ";
  $total_outros_rend = trim(fgets(STDIN));
  
  print "Servicos medicos pagos: ";
  $med = trim(fgets(STDIN));
  
  print "Servicos educacionais pagos: ";
  $edu = trim(fgets(STDIN));
  
  $total_med_edu = $med + $edu;
  
  print "\nTotal de impostos: ";
  $porce_rend_banc = ($total_rend_banc * 0.2);
  print "\nR$ " . $porce_rend_banc . " (sobre rendimentos bancarios)";
  
  if ($total_rend_sal_ser <= 8000) {
    
    $porce_rend_sal_ser = 0;
    print "\nR$ 0.00 (sobre salarios servicos)";
    
  }
  else {
    
    if ($total_rend_sal_ser >= 8000.01 && $total_rend_sal_ser <= 24000) {
      
      $porce_rend_sal_ser = ($total_rend_sal_ser * 0.15); 
      print "\nR$ " . $porce_rend_sal_ser . " (sobre salarios servicos)";
      
    }
    else {
      
      $porce_rend_sal_ser = ($total_rend_sal_ser * 0.2); 
      print "\nR$ " . $porce_rend_sal_ser . " (sobre salarios servicos)";
      
    }
    
  }
  
  $porce_outros_rend = ($total_outros_rend * 0.1); 
  print "\nR$ " . $porce_outros_rend . " (sobre outros rendimentos)";
  
  $imposto_bruto = $porce_rend_banc + $porce_rend_sal_ser + $porce_outros_rend;
  print "\nR$ " . $imposto_bruto . " (total)"; 
  
  print "\n------------------------------------------";
  print "\nMaximo a ser abatido:";
  
  if (($imposto_bruto * 0.3) < $total_med_edu ) {
    
    $max_abatido = $imposto_bruto * 0.3;
    print "\nR$ " . $max_abatido;
    
  }
  else {
    
    $max_abatido = $total_med_edu;
    print "\nR$ " . $max_abatido;
    
  }
  
  print "\n------------------------------------------";
  print "\nTotal de valores possiveis de abater:";
  print "\nR$ " . $med . " (servicos medicos)";
  print "\nR$ " . $edu . " (servicos educacionais)";
  print "\nR$ " . $total_med_edu . " (total)";
  print "\n------------------------------------------";
  print "\nImposto total:";  
  print "\nR$ " . $imposto_bruto . " (imposto bruto)";
  print "\nR$ " . $max_abatido . " (abatimentos)";
  
  $total = $imposto_bruto - $max_abatido;
  print "\nR$ " . $total . " (total)";
  
?>