<?php
    $g_dbLink = null;
    
    function dbConnect()
    {
        global $g_dbLink;
        $g_dbLink = mysqli_connect
                    ( DB_HOST,
                      DB_USER,
                      DB_PASS,
                      DB_NAME,
                      DB_PORT );
        if ( mysqli_connect_error() )
        {
            echo "Sorry. Unable to connect to DB...";
            exit();
        }
    }               

    function dbExecute( $query )
    {
        global $g_dbLink;
        $data = array();
        if ( $result = mysqli_query($g_dbLink, $query) )
        {
            while( $row = mysqli_fetch_assoc($result) )
            {
                array_push( $data, $var );
            }
            mysqli_free_result( $result);
        }
        return $data;
    }

    function dbQuote( $query )
    {
        global $g_dbLink;
        return mysqli_real_escape_string( $g_dbLink, $query);
    }