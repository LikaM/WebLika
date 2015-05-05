<?php
    require_once( 'include/common.inc.php' );
   
    $endStr = GetParamFromGet( 'str', '' );
   
    if ( $endStr !== '' )    
    {
        $endStr = Last( $endStr );
        echo $endStr;
    }
    