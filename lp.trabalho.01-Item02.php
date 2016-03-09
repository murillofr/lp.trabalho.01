<?php

  print "Total de rendimentos bancarios: R$ ";
  $total_rend_banc = trim(fgets(STDIN));
  
  print "Total de rendimentos de salarios ou servicos: R$ ";
  $total_rend_sal_ser = trim(fgets(STDIN));
  
  print "Total de outros rendimentos: R$ ";
  $total_outros_rend = trim(fgets(STDIN));
  
  print "Servicos medicos pagos: R$ ";
  $med = trim(fgets(STDIN));
  
  print "Servicos educacionais pagos: R$ ";
  $edu = trim(fgets(STDIN));
  
  $total_med_edu = $med + $edu;
  
  print "\nTotal de impostos: ";
  $porce_rend_banc = ($total_rend_banc * 0.2);
  print "\nR$ " . number_format($porce_rend_banc,2,",",".") . " (sobre rendimentos bancarios)";
  
  if ($total_rend_sal_ser <= 8000) {
    
    $porce_rend_sal_ser = 0;
    print "\nR$ 0,00 (sobre salarios servicos)";
    
  }
  else {
    
    if ($total_rend_sal_ser >= 8000.01 && $total_rend_sal_ser <= 24000) {
      
      $porce_rend_sal_ser = ($total_rend_sal_ser * 0.15); 
      print "\nR$ " . number_format($porce_rend_sal_ser,2,",",".") . " (sobre salarios servicos)";
      
    }
    else {
      
      $porce_rend_sal_ser = ($total_rend_sal_ser * 0.2); 
      print "\nR$ " . number_format($porce_rend_sal_ser,2,",",".") . " (sobre salarios servicos)";
      
    }
    
  }
  
  $porce_outros_rend = ($total_outros_rend * 0.1); 
  print "\nR$ " . number_format($porce_outros_rend,2,",",".") . " (sobre outros rendimentos)";
  
  $imposto_bruto = $porce_rend_banc + $porce_rend_sal_ser + $porce_outros_rend;
  print "\nR$ " . number_format($imposto_bruto,2,",",".") . " (total)"; 
  
  print "\n------------------------------------------";
  print "\nMaximo a ser abatido:";
  
  if (($imposto_bruto * 0.3) < $total_med_edu ) {
    
    $max_abatido = $imposto_bruto * 0.3;
    print "\nR$ " . number_format($max_abatido,2,",",".");
    
  }
  else {
    
    $max_abatido = $total_med_edu;
    print "\nR$ " . number_format($max_abatido,2,",",".");
    
  }
  
  print "\n------------------------------------------";
  print "\nTotal de valores possiveis de abater:";
  print "\nR$ " . number_format($med,2,",",".") . " (servicos medicos)";
  print "\nR$ " . number_format($edu,2,",",".") . " (servicos educacionais)";
  print "\nR$ " . number_format($total_med_edu,2,",",".") . " (total)";
  print "\n------------------------------------------";
  print "\nImposto total:";  
  print "\nR$ " . number_format($imposto_bruto,2,",",".") . " (imposto bruto)";
  print "\nR$ " . number_format($max_abatido,2,",",".") . " (abatimentos)";
  
  $total = $imposto_bruto - $max_abatido;
  print "\nR$ " . number_format($total,2,",",".") . " (total)";
  
?>