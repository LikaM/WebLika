<?php
    header("Content-Type:text/plain"); 
    require_once( 'include/common.inc.php' );
    if ( function_exists( 'GetParamFromGet' ) )
    {
        $stroka = GetParamFromGet( 'str', '' );
    }
    else
    {
        $stroka = '';
    }
                                 
    if ( ( function_exists( 'ExtraBlank' ) ) && ( $stroka == TRUE ) )
    {
        $stroka = ExtraBlank( $stroka );
    }
    echo $stroka;