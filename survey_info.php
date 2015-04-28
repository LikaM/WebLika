<?php
    header("Content-Typ(text/plain");
    require_once( 'include/common.inc.php' );
    if ( function_exists( 'GetParamFromGet' ) )
    {
        $emailName = GetParamFromGet( 'email', '' );      
    }
    else
    {
        $emailName = '';
    }

    if ( $emailName == '')
    {
        exit();
    }    

    $dirName = $_SERVER['DOCUMENT_ROOT'] . "/data";
    $fileName = $dirName . "/" . $emailName . ".txt";   
 
    if ( ( file_exists( $fileName ) ) && ( is_readable( $fileName ) ) )
    {
        $fh = fopen( $fileName, "r" );
        while ( !feof( $fh ) ) 
        {
	    $row = fgets( $fh ); //читает файл построчно
            echo $row.'<br>';
        }
	fclose($fh);
    }    

   
                                      