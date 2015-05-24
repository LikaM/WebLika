<?php
    require_once('include/common.inc.php');

    if ( !$link = mysql_connect('localhost', 'mysql_user', 'mysql_password') )
    {                                                      
        echo 'Not mysql';
        exit;
    }