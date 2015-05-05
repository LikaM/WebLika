<?php

    function SetSurveyFile()
    {     
        $arraySurvey = array();         
        $arraySurvey['first_name']  = GetParamFromGet( 'first_name', '' );
        $arraySurvey['last_name']   = GetParamFromGet( 'last_name', '' );
        $arraySurvey['email']       = GetParamFromGet( 'email', '' );
        $arraySurvey['age']         = GetParamFromGet( 'age', '' );

        return $arraySurvey;
    }


    function GetFileName( $dirName, $fileName )
    {               
        $path = '.' . "/" . $dirName;
        $path = $path . "/" . $fileName . ".txt";   
     
        if ( ( !file_exists( $path ) ) || ( !is_readable( $path ) ) )
        {
            $path = '';
        }   
         
        return $path;
    }

    function SetFileName( $dirName, $fileName )
    {            
        $path = '.' . "/" . $dirName;       
        
        if ( !file_exists( $path ) )
        {
            if ( !is_dir( $path ) )
            {  
                mkdir ( $path, 0755, true );
            }
        }
  
        $path .= "/" . $fileName . ".txt"; 
    
        return $path;
    }                                                               