<?php 

include '../config.php';

$dataConn = new Database();


    if (isset($_POST['edit_submit_button']))
    {
        

        $user = trim($_POST['edit_user_name']);
        $code = trim($_POST['edit_code_sv']);
        $born =  trim($_POST['edit_born']);
        $sexual =  trim($_POST['edit_sexual']);
        $address =  trim($_POST['edit_address']);
        $gmail =  trim($_POST['edit_gmail']);
        $phone =  trim($_POST['edit_phone']);
        $id_number =  trim($_POST['edit_id_number']);
        $descripe = trim($_POST['edit_descripe']);
        $id = trim($_POST['id_row']);
        echo $user;



    if (!empty($user) && !empty($code) && !empty($gmail) && !empty($id_number) && !empty($phone)) 
    {
        if (filter_var($gmail, FILTER_VALIDATE_EMAIL) && preg_match('/^[0-9]{10}+$/', $phone)) 
        {
            if (strlen($id_number) == 9 || strlen($id_number) == 12)
            {
                if (!$dataConn->checkData('tbl_sinhvien', $code) && !$dataConn->checkEmail('tbl_sinhvien', $gmail)) 
                {
                    $dataConn->editData('tbl_sinhvien', $code, $user, $sexual, $address, $gmail, $phone, $descripe);
                    header("Location: ../Bai2.php");
                }
            }
            
        }

        
    } 


    }