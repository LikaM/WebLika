<?php
    header("Content-Type:text/plain");

    $queryString = '';
    if ( isset( $_SERVER['QUERY_STRING'] ) )
    {
        $queryString = "Query string = '" . $_SERVER['QUERY_STRING'] . "'";
        echo $queryString;
    }
                                                           