<?php
    require_once( 'include/common.inc.php' );
    if ( function_exists( 'GetParamFromGet' ) )
    {
        $endStr = GetParamFromGet( 'str', '' );
    }
    else
    {
        $endStr = '';
    }

    if ( function_exists( 'Last' ) )
    {
        $endStr = Last( $endStr );
    }
    echo $endStr;