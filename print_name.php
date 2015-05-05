<?php
    header("Content-Type:text/plain");

    $queryString = '';

    if ( isset( $_GET['name'] ) )
    {  
        if ( strlen( $_GET['name'] ) > 0 )
        {
            $queryString = "Hello, Dear " . $_GET['name'] . "!";
        }
        else
        {
            $queryString = "Hello, Dear!";
        }
        echo $queryString;
    }
                      