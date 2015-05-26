<?php
    require_once('include/common.inc.php');

    $vars = array
    (
        'headline' => 'Survey'  
    );
    BuildLayout('survey_form.html', $vars);

$arr = array();
$arr[] =  $_POST;

  $_SESSION['arr'] = $_POST;
  
 print_r($_SESSION);