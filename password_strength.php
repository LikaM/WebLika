<?php
    header("Content-Typ(text/plain");
    require_once( 'include/common.inc.php' );

    if ( function_exists( 'GetParamFromGet' ) )
    {
        $passwordStr = GetParamFromGet( 'password', '' );        
    }
    else
    {
        $passwordStr = '';
    }                   
  
    $strength = 0; 
    $strength += 4 * ( strlen ( $passwordStr ) );

    $numbers = preg_replace( "/[^0-9]/", '', $passwordStr );
    $strength += 4 * ( strlen ( $numbers ) );

    $str = preg_replace("/[^A-Z]/", '', $passwordStr );
    if ( strlen( $str ) > 0 )
    {
        $strength += ( ( strlen( $passwordStr ) - strlen( $str ) ) ) * 2;
    }

    $str = preg_replace( "/[^a-z]/", '', $passwordStr );
    if ( strlen( $str ) > 0 )
    {
        $strength += ( ( strlen( $passwordStr ) - strlen( $str ) ) ) * 2;
    }

    $str = preg_replace( "/[^a-zA-Z]/", '', $passwordStr );
    if ( strlen( $str ) == strlen( $passwordStr ) )
    {
        $strength -= strlen( $passwordStr );
    }

    $numbers = preg_replace( "/[^0-9]/", '', $passwordStr );
    if ( strlen( $numbers ) == strlen( $passwordStr ) )
    {
        $strength -= strlen( $passwordStr );
    }

    foreach ( count_chars( $passwordStr, 1 ) as $i => $val )
    {
        if ( $val > 1 )
        {
            $strength -=  $val;
        }
    }
   
   echo $strength;
                            
                                                             

 
           