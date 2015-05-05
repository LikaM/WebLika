<?php
    header("Content-Type:text/plain");
    require_once( 'include/common.inc.php' );
     
    $emailName = GetParamFromGet( 'email', '' );      

    if ( $emailName == '')
    {
        exit();
    }

    $fileName = GetFileName( $dirName = "data", $emailName );    
    if ( $fileName )
    {   
        $fh = fopen( $fileName, "r" );
        if ( $fh )                                                  
        {   
            $array = file_get_contents( $fileName );
            echo $array;
                
            fclose( $fh );
        } 
    }        
      
   
                                      