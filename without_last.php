<?php
    require_once( 'include/common.inc.php' );
    
    $stroka = GetParamFromGet( 'str', '' );
    
    if ( $stroka !== '' )
    {
        $stroka = WithoutLast( $stroka );
        echo $stroka;
    }

    