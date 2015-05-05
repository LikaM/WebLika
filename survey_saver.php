<?php
    header("Content-Type:text/plain");
    require_once( 'include/common.inc.php' );

    $arrayData = array();
    $arrayData =  SetSurveyFile();
                           
    if ( $arrayData['email'] == '')
    {
        exit();
    }
    
    $fileName = SetFileName( $dirName = "data", $arrayData['email'] );     
   
    if ( $fileName )
    {
        $fp = fopen( $fileName, 'w');
        if ( $fp )                                                  
        {
            fwrite( $fp, "First Name: " . $arrayData['first_name'] . "\n" );
            fwrite( $fp, "Last Name:  " . $arrayData['last_name'] . "\n" );
            fwrite( $fp, "Email:      " . $arrayData['email'] . "\n" );
            fwrite( $fp, "Age:        " . $arrayData['age'] . "\n" );
            fclose( $fp );                  
        }
    }

 
       