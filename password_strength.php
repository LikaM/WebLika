<?php
    header("Content-Type:text/plain");
    require_once( 'include/common.inc.php' );

   
    $passwordStr = GetParamFromGet( 'password', '' );
            
    if ( $passwordStr == '' )
    {
        exit;
    }
   
    $strength = 0;

    $typeValue = array
    ( "password" => "/[^0-9-a-zA-Z]/",
      "number"   => "/[^0-9]/",
      "strHigh"  => "/[^A-Z]/",
      "strSmall" => "/[^a-z]/"
    );

    $countArray = array();
    
    foreach ( $typeValue as $i => $value )
    {          
        $countArray[$i] = StrengthPassword ( $value, $passwordStr ); 

        if ( ( $value == $typeValue["password"] ) || ( $value == $typeValue["number"] ) )
        {
            $strength += 4 * $countArray[$i];
        }

        if ( ( ( $value == $typeValue["strHigh"] ) || ( $value == $typeValue["strSmall"] ) ) && ( $countArray[$i] > 0 ) )
        {
            $strength += ( $countArray["password"] - $countArray[$i] ) * 2;     
        }
    }
     
    if ( ( $countArray["password"] == ( $countArray["strHigh"] + $countArray["strSmall"] ) ) || ( $countArray["password"] == $countArray["number"] ) )
    {
        $strength -= $countArray["password"];  
    }
                          
    foreach ( count_chars( $passwordStr, 1 ) as $i => $val )
    {
        if ( $val > 1 )
        {
            $strength -=  $val;
        }
    }                     

    echo $strength ; 
                                                                       