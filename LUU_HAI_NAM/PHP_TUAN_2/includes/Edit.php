<?php 

include '../config.php';

$dataConn = new Database();
$id = $_GET['id'];
$records = $dataConn->selectDetail('tbl_sinhvien', $id);

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
        
        $dataConn->editData('tbl_sinhvien', $code, $user, $sexual, $address, $gmail, $phone, $descripe);
        header("Location: ../Bai2.php");
               
    }

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
        <form action="" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên sinh viên</label>
                    <?php 
                        foreach ($records as $record)
                        {

                        }
                    ?>
                    <input type="text" class="form-control" value="<?php echo $record['ten_sinh_vien'];  ?>" name="edit_user_name" id="user_name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ma sinh viên</label>
                    <input type="text" class="form-control" name="edit_code_sv" readonly  value="<?php echo $record['ma_sinh_vien'];  ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Ngày sinh</label>
                    <input type="date" class="form-control" name="edit_born" readonly  value="<?php echo $record['ngay_sinh'];  ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giới tính</label>
                    <input type="text" class="form-control" name="edit_sexual"  value="<?php echo $record['gioi_tinh'];  ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Địa chỉ</label>
                    <input type="text" class="form-control" name="edit_address"  value="<?php echo $record['dia_chi'];  ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" name="edit_gmail"  value="<?php echo $record['email'];  ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Số điện thoại</label>
                    <input type="text" class="form-control" name="edit_phone"  value="<?php echo $record['sdt'];  ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Số cmnd</label>
                    <input type="text" class="form-control" name="edit_id_number" readonly  value="<?php echo $record['cmnd'];  ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả bản thân</label>
                    <input type="text" class="form-control" name="edit_descripe"  value="<?php echo $record['mo_ta'];  ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="edit_submit_button">Submit</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>