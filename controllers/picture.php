<?php

$flag = TRUE;

if(isset($_FILES['img'])) {

    var_dump($_FILES['img']);

    $tmpName = $_FILES['img']['tmp_name'];

    //File error code check
    if($_FILES['img']['error'] == 0) {
        echo 'no error code';
    } else {
        //has error
        echo 'error : ' .$_FILES['img']['error']. ' ';
        $flag = FALSE;
    }

    //file size must be less than 8388608 bytes
    if ($_FILES['img']['size'] > 8388608) {
        echo 'your file is too large';
        $flag = FALSE;
    } else {
        echo 'file size is good';
    }

    //check MIME type of $_FILES
    if((exif_imagetype($tmpName))) {
        echo 'header indicates it is an image';
    } else {
        $flag = FALSE;
        echo 'header indicates it is not an image';
    }

    //no errors
    if($flag == TRUE) {
        
    //replace spaces with underscors
    $cleanName = str_replace(' ', '_', $_FILES['img']['name']);

    //change name
    $date = date_create();
    $timeStamp = date_timestamp_get($date);
    $newFileName = $timeStamp.$cleanName;
    echo 'new name : ' .$newFileName. ' ';

    //move file to directory
    if(!move_uploaded_file($tmpName, 'uploadedFiles/'.$newFileName)){

        echo 'failed move';

        } else {

        echo 'successful move';

        }

    }
}

