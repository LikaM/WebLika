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
        $reversStr = '';
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

    function CalcStrengthForLength($password)
    {
        return 4 * strlen($password);
    }

    function CalcStrengthForDigits($password)
    {       
        return 4 * ( strlen( preg_replace( "/[^0-9]/", '', $password ) ) ); 
    }

    function CalcStrengthForUppercase($password)
    {       
        $uppercase = preg_replace( "/[^A-Z]/", '', $password );
        if ( strlen( $uppercase ) > 0 )
        {
            return ( strlen( $password ) - strlen( $uppercase ) )  * 2;
        }
        else
        {
            return 0;
        }         
    }

    function CalcStrengthForLowercase($password)
    {       
        $lowercase = preg_replace( "/[^a-z]/", '', $password );
        if ( strlen( $lowercase ) > 0 )
        {
            return  ( strlen( $password ) - strlen( $lowercase ) ) * 2;
        }
        else
        {
            return 0;
        } 
    }

    function CalcStrengthForSymbolsAll($password)
    {       
        $symbols = preg_replace( "/[^a-zA-Z]/", '', $password );
        if ( strlen( $symbols ) == strlen( $password ) )
        {
            return strlen( $password );
        }
        else
        {
            return 0;
        } 
    }

    function CalcStrengthForNumbersAll($password)
    {       
        $numbers = preg_replace( "/[^0-9]/", '', $password );
        if ( strlen( $numbers ) == strlen( $password ) )
        {
            return strlen( $password );
        }
        else
        {
            return 0;
        } 
    }                                                       

    function CalcStrengthForDoublesSymbols($password)
    {    
        $countDoublesSymbols = 0;     
        foreach ( count_chars( $password, 1 ) as $i => $val )
        {
            if ( $val > 1 )
            {                  
                $countDoublesSymbols +=  $val;
            }     
        }

        return $countDoublesSymbols;
    }                