<?php
    require_once( 'include/common.inc.php' );

    $vars = array
    (
        'headline' => 'Template Engine',
        'name' => 'Sarah'
    );

    BuildLayout('index.html', $vars);    
   
