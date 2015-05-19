<?php
 //   header("Content-Type:multipart/form-data");
    require_once('include/common.inc.php');

    $vars = array
    (
        'headline' => 'Surveys'  
    );
    BuildLayout('surveys.html', $vars);
    print_r( $_SESSION);
                                          