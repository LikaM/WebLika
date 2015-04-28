<?php
    header("Content-Type:text/plain");
    $queryString = "Query string = '" . $_SERVER['QUERY_STRING'] . "'";
    echo $queryString;
                                                                