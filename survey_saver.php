<?php
    header("Content-Typ(text/plain");
    require_once( 'include/common.inc.php' );
    if ( function_exists( 'GetParamFromGet' ) )
    {
        $firstName = GetParamFromGet( 'first_name', '' );
        $lastName  = GetParamFromGet( 'last_name', '' );
        $emailName = GetParamFromGet( 'email', '' );
        $age       = GetParamFromGet( 'age', '' );
    }
    else
    {
        $emailName = '';
    }                   
  
    $dirName = $_SERVER['DOCUMENT_ROOT'] . "/data"; 
                            
    if ( $emailName == '')
    {
        exit();
    }    
 
    $fileName = $dirName . "/" . $emailName . ".txt";  
                                                       
    $fp = fopen( $fileName, 'w');
    SetFileWrite( $fp, "First Name: " . $firstName . "\n" );
    SetFileWrite( $fp, "Last Name:  " . $lastName . "\n" );
    SetFileWrite( $fp, "Email:      " . $emailName . "\n" );
    SetFileWrite( $fp, "Age:        " . $age . "\n" );
    fclose( $fp );

 
