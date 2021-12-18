<?php 

set_time_limit(20);


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
        <div class="col-md-9">
            <form action="./Student.php" method="post" enctype="multipart/form-data" onsubmit="return checkForm()">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên sinh viên</label>
                    <input type="text" class="form-control" name="user_name" id="user_name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ma sinh viên</label>
                    <input type="text" class="form-control" name="code_sv" id="code_sv">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Ngày sinh</label>
                    <input type="date" class="form-control" name="born" id="born">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giới tính</label>
                    <input type="text" class="form-control" name="sexual" id="sexual">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Địa chỉ</label>
                    <input type="text" class="form-control" name="address" id="address">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" name="gmail" id="gmail">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Số điện thoại</label>
                    <input type="text" class="form-control" name="phone" id="phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Số cmnd</label>
                    <input type="text" class="form-control" name="id_number" id="id_number">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả bản thân</label>
                    <input type="text" class="form-control" name="descripe" id="descripe">
                </div>
                <div class="form-group">
                    <input type="file" name="fileUpload">
                </div>
                
                <button type="submit" class="btn btn-primary" name="submit_button">Submit</button>
            </form>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>  
<script>
    function checkForm()
    {
        var user_name = $("#user_name").val();
        var code_sv = $("#code_sv").val();
        var gmail = $("#gmail").val();
        var born = $("#born").val();
        var sexual = $("#sexual").val();
        var address = $("#address").val();
        var id_number = $("#id_number").val();
        var phone = $("#phone").val();


        if (user_name == "" || code_sv == "" || gmail == "" || born == "" 
            || sexual == "" || address == "" || id_number == "" || phone == "")
        {
            return false;
        }
        return true;
    }
</script>
</html>
