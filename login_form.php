<?php
    require_once('include/common.inc.php');

    $vars = array
    (
        'headline' => 'Login'  
    );
    BuildLayout('login_form.html', $vars);
    
    dbConnect();

    if ( isset( $_POST['submit']) ) )
    {
        findUsers( $_POST['login'], $_POST['password'] );
    }
               
