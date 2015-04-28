<?php
    header("Content-Type:text/plain");
    require_once( 'include/common.inc.php' );
    
    $arg1 = GetParamFromGet( 'arg1', 0 );
    $arg2 = GetParamFromGet( 'arg2', 0 );
    echo Sum( $arg1, $arg2 );
                      