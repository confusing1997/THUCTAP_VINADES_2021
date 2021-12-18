<?php 
include '../config.php';

$dataConn = new Database();

        $id = $_GET['id'];
         if ($dataConn->removeData('tbl_sinhvien', $id))
         {
            header("Location: ../Bai2.php");

         }