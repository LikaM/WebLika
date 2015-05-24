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
            $[deg[$i] =  floor($i * 180 / $pi);
            $min =  ( ($i * 180 / $pi) - (floor($i * 180 / $pi)) ) * 60;
            $sin = round(sin($i),4);

$arr = array("somearray" => array(6 => 5, 13 => 9, "a" => 42));

        $arr = array( array('Вася', 'слесарь', 2500 ), 
            array('Миша','строитель', 3000), 
            array('Андрей', 'шофер', 2700)); 
 $table_sin = array
        (         
           array 'deg' => GetParamFromGet( 'first_name', '' ),
            'min' => GetParamFromGet( 'last_name', '' ),
            'sin' => GetParamFromGet( 'age', '' )
        );

echo $sin . "   \n";                                                           
        }
     
        $vars = array               
        (                     
            'headline' => 'Sin table',     
            'sins' => $sin
        );                                                                     
            
                       
        BuildLayout('sin_table.html', $vars);
    }                                                  
                                 