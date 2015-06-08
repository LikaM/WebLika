<?php
    function findUsers( $login, $password )
    {
        $login    = dbQuote( $login );
        $password = dbQuote( $password );
        $query = "SELECT * FROM users WHERE login=$login AND password=$password;";
        return dbExecute( $query );
    }   

   function addUsers( $login, $password )
    {
        $login    = dbQuote( $login );
        $password = dbQuote( $password );
        $query = "INSERT INTO users (login, password)
                  VALUES ($login, $password);";
        return dbExecute( $query );       
    }