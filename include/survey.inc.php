<?php
                 
    function GetSurveyFromRequest()
    {     
        $info = array
        (         
            'first_name' => GetParamFromGet( 'first_name', '' ),
            'last_name'  => GetParamFromGet( 'last_name', '' ),
            'email'      => GetParamFromGet( 'email', '' ),
            'age'        => GetParamFromGet( 'age', '' )
        );  
        return $info;
    }


    function GetSurveyFilePath( $email )
    {               
        $path = '.' . "/data/" . $email . ".txt";        
        return $path ;
    }

    function SaveSurveyToFile( $survey )
    {            
        $path = GetSurveyFilePath( $survey['email'] ); 
 
        $fp = fopen( $path, 'w');
        if ( $fp )                                                  
        {
            fwrite( $fp, "First Name: " . $survey['first_name'] . "\n" );
            fwrite( $fp, "Last Name:  " . $survey['last_name'] . "\n" );
            fwrite( $fp, "Email:      " . $survey['email'] . "\n" );
            fwrite( $fp, "Age:        " . $survey['age'] . "\n" );
            fclose( $fp );                  
        }    
        return;
    }                                                               