<?php
    require_once( 'include/common.inc.php' );

    $vars = array
    (
        'headline' => 'Картинки'  
    );
    BuildLayout('image_upload.html', $vars);

    
    $SUCCESS = false;
    if ( isset( $_FILES['images'] ) )
    {    
        $fileinfo = $_FILES['images'];
        if ( $fileinfo['error'] == UPLOAD_ERR_OK )
        {
            $newFileName = unigid() . "." . pathinfo( $fileInfo['name'], PATHINFO_EXTENSION);
            $destionPath = ROOT_DIR . 'uploads/images' . $newFileName;
            $SUCCESS = move_uploaded_file( $fileinfo['tmp_name'], $destionPath );
        }
    }

                                                   