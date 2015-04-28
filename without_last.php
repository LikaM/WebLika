<?php
    require_once( 'include/common.inc.php' );
    if ( function_exists( 'GetParamFromGet' ) )
    {
        $stroka = GetParamFromGet( 'str', '' );
    }
    else
    {
        $stroka = '';
    }

    if ( function_exists( 'WithoutLast' ) )
    {
        $stroka = WithoutLast( $stroka );
    }
    echo $stroka;