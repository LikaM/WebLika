<?php
    header("Content-Type:text/plain");
    $Query_string = "Query string = '" . $_SERVER[QUERY_STRING].".'";
    echo $Query_string;
                      