<?php
    header("Content-Type:text/plain");
    require_once( 'include/common.inc.php' );
    
    $degree = GetParamFromGet( 'deg', 0 );
    $minute = GetParamFromGet( 'min', 0 );
    $pi = 3.14159265359;
    $step = 0.0;

    $sine = array();       
   
    if ( $degree > 0 && $minute > 0 )
    {
        $step = ( ($degree + $minute / 60) * $pi / 180 );
        for ( $i = 0; $i <= 2*($pi); $i += $step )
        { 
            $sine[$i]['degree'] =  floor($i * 180 / $pi);
            $sine[$i]['minute'] =  ( ($i * 180 / $pi) - (floor($i * 180 / $pi)) ) * 60;
            $sine[$i]['sin']    =  round(sin($i),4);            
        }
     
        $vars = array               
        (                     
            'headline' => 'Sine table',     
            'sines' => $sine
        );                                                                     
                                     
        BuildLayout('sin_table.html', $vars);
    }                                                  
                                 