<?php
    header("Content-Type:text/plain");
    require_once( 'include/common.inc.php' );
    
    $degree = GetParamFromGet( 'deg', 0 );
    $minute = GetParamFromGet( 'min', 0 );
    $pi = 3.14159265359;
    $step = 0.0;

    $deg = array();
    $min = array();
    $sin = array();
            
           
                         
    if ( $degree > 0 && $minute > 0 )
    {
        $step = ( ($degree + $minute / 60) * $pi / 180 );
        for ( $i = 0; $i <= 2*($pi); $i += $step )
        { 
            $deg[$i] = floor($i * 180 / $pi);
            $min[$i] = ( ($i * 180 / $pi) - (floor($i * 180 / $pi)) ) * 60;
            $sin[$i] = round(sin($i),4);
       
 $tableSin = array
            (               
                
                    'degree' =>	$deg[$i],
                    'minute' => $min[$i],
                    'sin'    => $sin[$i]
              );
 
                             
                          
//        
  //print_r ( $tableSin);                                                        
        }
       
     
//print_r ( $tableSin);
        $vars = array               
        (                       
            'headline' => 'Sin table',     
            'sins'     => $tableSin
        );                                                                     
            
                       
        BuildLayout('sin_table.html', $vars);
    }                                                     
                                 