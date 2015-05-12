<?php
    header("Content-Type:text/plain");
    require_once( 'include/common.inc.php' );

   
    $password = GetParamFromGet( 'password', '' );
            
    if ( $password == '' )
    {
        exit;
    }   

    $strength = 0;

    $strength += CalcStrengthForLength($password);
    $strength += CalcStrengthForDigits($password);
    $strength += CalcStrengthForUppercase($password);
    $strength += CalcStrengthForLowercase($password);
    $strength -= CalcStrengthForSymbolsAll($password);                                                        
    $strength -= CalcStrengthForNumbersAll($password);
    $strength -= CalcStrengthForDoublesSymbols($password);            

    echo $strength;                                
                                                                       
