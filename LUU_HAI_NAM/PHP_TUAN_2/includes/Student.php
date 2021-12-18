<?php

include '../config.php';

$dataConn = new Database();

$target_dir = "../uploads";
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);

$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


if (isset($_POST['submit_button'])) {

    $fileName = rand(1000, 10000)."-".$_FILES["fileUpload"]["name"];
    $tempName = $_FILES["fileUpload"]["tmp_name"];

    $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
    
    $user = trim($_POST['user_name']);
    $code = trim($_POST['code_sv']);
    $born =  trim($_POST['born']);
    $sexual =  trim($_POST['sexual']);
    $address =  trim($_POST['address']);
    $gmail =  trim($_POST['gmail']);
    $phone =  trim($_POST['phone']);
    $id_number =  trim($_POST['id_number']);
    $descripe = trim($_POST['descripe']);

    if ($check !== false)
    {
    
        if (!empty($user) && !empty($code) && !empty($gmail) && !empty($id_number) && !empty($phone)) 
        {
            if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "gif")
            {
                if ($_FILES["fileUpload"]["size"] < 2097152) 
                {
                        if (filter_var($gmail, FILTER_VALIDATE_EMAIL) && preg_match('/^[0-9]{10}+$/', $phone)) 
                        {
                            if (strlen($id_number) == 9 || strlen($id_number) == 12)
                            {
                                if (!$dataConn->checkData('tbl_sinhvien', $code) && !$dataConn->checkEmail('tbl_sinhvien', $gmail)) 
                                {
                                    move_uploaded_file($tempName, $target_dir.'/'.$fileName);
                                    $dataConn->insert('tbl_sinhvien', $code, $user, $born, $sexual, $address,$gmail, $phone, $id_number, $descripe, $fileName);
                                    header("Location: ../Bai2.php");
                                }
                            }
                            
                        }
                        
                } 

            }               
        }
    }
    

    
}





?>