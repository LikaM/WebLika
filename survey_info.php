<?php
    header("Content-Type:text/plain");
    require_once( 'include/common.inc.php' );
     
    $emailName = GetParamFromGet( 'email', '' );      

    if ( $emailName == '')
    {
        exit();
    }

    $path = GetSurveyFilePath( $emailName );   
    if ( file_exists( $path ) )                                             
    {   
        $fh = fopen( $path, "r" );
        if ( $fh )                                                  
        {   
            $array = file_get_contents( $path );
            echo $array;
                
            fclose( $fh );
        } 
    }        
      
   
                                      