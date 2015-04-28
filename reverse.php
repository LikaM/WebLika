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

    if ( function_exists( 'Revers' ) )
    {
        $stroka = Revers( $stroka );
    }
    echo $stroka;