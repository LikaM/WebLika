<?php
    function GetParamFromGet( $paramName, $defaultValue = '' )
    {                                                              
        $result = $defaultValue;
        if ( isset( $_GET[$paramName] ) )
        {
            $result = $_GET[$paramName];
        }
        return $result;
    }

