<?php
    header("Content-Type:text/plain"); 
    require_once( 'include/common.inc.php' );
   
    $stroka = GetParamFromGet( 'str', '' );
                                 
    if ( $stroka == TRUE )
    {
        $stroka = ExtraBlank( $stroka );
        echo $stroka;
    }
    