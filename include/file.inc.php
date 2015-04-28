<?php
    function SetFileWrite( $fd, $text )
    {                              
        fwrite( $fd, $text ); 
        return;
    }
 
                          