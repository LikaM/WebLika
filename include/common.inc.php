<?php
    session_start();

    require_once( 'request.inc.php' );
    require_once( 'string.inc.php' );
    require_once( 'math.inc.php' );
    require_once( 'survey.inc.php' );
    require_once( 'config.inc.php' );
    require_once( 'template.inc.php' );
    require_once( 'vendor/Smarty/libs/Smarty.class.php' );
    require_once( 'database.inc.php' );
    require_once( 'users.inc.php' );

    dbConnect();