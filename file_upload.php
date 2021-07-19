<?php

    try {
        $target_dir = "uploads/";
        $filename = $target_dir . randomString() . '_' .basename($_FILES["file"]["name"]);
        move_uploaded_file($_FILES["file"]["tmp_name"], $filename);

        echo json_encode(array(
            "success" => true,
            "url" => $filename
        ));
    } catch (Exception $e) {
        echo json_encode(array(
            "success" => false
        ));   
    }
    

    function randomString($length = 15) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
?>