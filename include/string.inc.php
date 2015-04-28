<?php
    function Last( $str )
    {
        $lastStr = isset( $str[0] ) ? $str[strlen( $str ) - 1] : '';
        return $lastStr;
    }

    function WithoutLast( $str )
    {
        $withoutLastStr = substr( $str, 0, strlen( $str ) - 1 );
        return $withoutLastStr;
    }

    function Revers( $str )
    {
        for ( $i = 0; $i < strlen( $str ); $i++ ) 
        { 
            $reversStr = $str[$i] . $reversStr;
        }       
        return $reversStr;
    }

    function ExtraBlank( $str )
    {   
        
        $blankStr = trim( $str );
        while ( strpos( $blankStr, '  ' ) !== false )
        {
            $blankStr = str_replace( '  ', ' ', $blankStr );
        }; 
        return $blankStr;
    }               