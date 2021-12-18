<?php 

include 'config.php';

$data = new Database();
$output = '';
if (isset($_POST['export_excel']))
{
    $query = "select * from tbl_sinhvien order by id desc";
    $result = mysqli_query($data->connection, $query);
    if (mysqli_num_rows($result) > 0)
    {
        $output .= '
        <table class="table" bordered = "1">
            <tr>
                <th>Mã sinh viên</th>
                <th>Tên sinh viên</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Mô tả</th>
            </tr>
        ';

        while ($row = mysqli_fetch_array($result)) 
        {
            $output .= '
            
            <tr>
                <td>'.$row["ma_sinh_vien"].'</td>
                <td>'.$row["ten_sinh_vien"].'</td>
                <td>'.$row["ngay_sinh"].'</td>
                <td>'.$row["gioi_tinh"].'</td>
                <td>'.$row["dia_chi"].'</td>
                <td>'.$row["email"].'</td>
                <td>'.$row["sdt"].'</td>
                <td>'.$row["mo_ta"].'</td>
            </tr>
            ';
        }
        $output .= '</table>';
        header("Content-Type: application/xls");
        header("Content-Disposition:attachment; filename=excel.xls");
        echo $output;
    }
}

?>