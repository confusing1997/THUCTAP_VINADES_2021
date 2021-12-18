<?php 

    include 'config.php';

    $data = new Database();



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
        <div class="col-md-12">
            <div class="row" style="margin-bottom: 15px;">
                <a class="btn btn-primary" href="includes/Add_Student.php" role="button">Add student</a>
            </div>
            <div class="row">
                <form action="" method="POST" role="form">
                    <input type="text" class="form-control" name="search_string" >
                    <button type="submit" name="submit_search" class="btn btn-primary">Find</button>
                </form>
            </div>
            <div class="row" style="margin-bottom: 15px;">
                <form action="" method="POST"  role="form">
                    <div class="form-group">
                        <label class="" for="">Từ ngày</label>
                        <input type="date" class="form-control" name="dateStart">
                    </div>

                    <div class="form-group">
                        <label class="" for="">Đến ngày</label>
                        <input type="date" class="form-control" name="dateEnd">
                    </div>
                
                    <button type="submit" name="search_days" class="btn btn-primary">Search</button>

                </form>
                
            </div>

            <div class="row">

                    <table class="table table-striped">
                        <tr>
                            <th>STT</th>
                            <th>Tên sinh viên</th>
                            <th>Ngày sinh</th>
                            <th>Địa chỉ</th>
                            <th>Email</th>
                            <th>Sdt</th>
                            <th>Option</th>
                        </tr>

                        <?php 

                        $stt = 0;

                        if (isset($_POST['search_days'])) 
                        {
                            $dateStart = $_POST['dateStart'];
                            $dateEnd = $_POST['dateEnd'];
                            $records = $data->searchDays('tbl_sinhvien', $dateStart, $dateEnd);

                            foreach ($records as $record) 
                            {
                                $stt++;
                        ?>
                                <tr>
                                    <td><?php echo $stt; ?></td>
                                    <td><?php echo $record['ten_sinh_vien']; ?></td>
                                    <td><?php echo $record['ngay_sinh']; ?></td>
                                    <td><?php echo $record['dia_chi']; ?></td>
                                    <td><?php echo $record['email']; ?></td>
                                    <td><?php echo $record['sdt']; ?></td>
                                    <td>
                                
                                        <a  class="btn btn-danger" name=""
                                            onclick="return confirm ('Bạn muốn xóa sinh viên này?');" 
                                            href="./includes/Student.php?id=<?php echo $record['id'] ?>" role="button">Delete</a>
                                        <a class="btn btn-primary" href="#" role="button">Edit</a>

                                    </td>
                                </tr>

                        <?php
                            }
                        }
                        
                    

                        $stt = 0;

                        if (isset($_POST['submit_search'])) 
                        {
                            $search_string = trim($_POST['search_string']);
                            $records = $data->searchData('tbl_sinhvien', $search_string);

                            foreach ($records as $record) 
                            {
                                $stt++;
                        ?>

                        <tr>
                            <td><?php echo $stt;?></td>
                            <td><?php echo $record['ten_sinh_vien']; ?></td>
                            <td><?php echo $record['ngay_sinh']; ?></td>
                            <td><?php echo $record['dia_chi']; ?></td>
                            <td><?php echo $record['email']; ?></td>
                            <td><?php echo $record['sdt']; ?></td>
                            <td>
                        
                                <a  class="btn btn-danger"
                                    onclick="return confirm ('Bạn muốn xóa sinh viên này?');"
                                    name="" href="./includes/Student.php?id=<?php echo $record['id'] ?>" role="button">Delete</a>
                                <a class="btn btn-primary" href="#" role="button">Edit</a>

                            </td>

                        </tr>

                    <?php
                        }
                        
                    }
                    else 
                    {

                        $stt = 0;
                    
                        $records = $data->select('tbl_sinhvien');

                        foreach ($records as $record) 
                        {
                            $stt++;
                    ?>  
                    <tr>
                        <td><?php echo $stt;?></td>
                        <td><?php echo $record['ten_sinh_vien']; ?></td>
                        <td><?php echo $record['ngay_sinh']; ?></td>
                        <td><?php echo $record['dia_chi']; ?></td>
                        <td><?php echo $record['email']; ?></td>
                        <td><?php echo $record['sdt']; ?></td>

                        <td>
                    
                            <a class="btn btn-danger"
                                onclick="return confirm ('Bạn muốn xóa sinh viên này?');" 
                                name="delete_data" href="./includes/Delete.php?id=<?php echo $record['id']; ?>" role="button">Delete</a>
                            <a class="btn btn-primary" name="insert_data" href="./includes/Edit.php?id=<?php echo $record['id']; ?>" role="button">Edit</a>
                        </td>
                    </tr>

                    <?php 
                        }
                    }
                
                    ?>
                    </table>

                    <form action="excel.php" method="post">
                        <button type="submit" class="btn btn-success" name="export_excel">Export</button>
                    </form>
                </div>
        </div>
        
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>   

</html>