<?php

echo "BÀI 1: <br>
    1. Viết PHP script với mảng cho trước <br>
    2. Tìm giá trị trung bình của các phần tử trong mảng<br>
    3. Hiển thị 5 phần tử nhỏ nhất và lớn nhất.<br>
    4. Sắp xếp các phần tử theo giá trị tăng dần <br>
    5. Tìm kiếm giá trị xuất hiện trong mảng hay không và hiển thị số lần xuất hiện<br>
    6. Xóa 1 phần tử trong mảng có giá trị bất kỳ<br>
    7. Tìm kiếm giá trị lớn nhất và nhỏ nhất trong mảng<br>
    8. Hiển thị danh sách các phần tử và số lần xuất hiện trong mảng<br>
    9. Chuyển mảng đã cho thành chuỗi JSON <br> <br>";

echo "<br> <br>";

echo "1. Mảng cho trước: ";
$array = array(11, 256, 342, -2, -5, 25, 43,  77, 99, 9, 910, 311, 120);
foreach ($array as $value)
{
    echo $value . " ";
}
echo "<br> <br>";
$arrCount = count($array);
function sumOfArr()
{
    global $array, $sum, $arrCount;
    $sum = 0;

    foreach ($array as $number)
    {
        $sum += $number;
    } 
    
    return  $sum/$arrCount;
}
 

echo "2. Giá trị trung bình các phần tử trong mảng: " . sumOfArr() . "<br> <br>";

echo "3. Hiện thị 5 phần tử nhỏ nhất: ";

sort($array);
for ($i = 0; $i <= 4; $i ++)
{
    echo $array[$i] . " ";
}
echo "<br> <br>";

echo "4. Hiện thị 5 phần tử lớn nhất: ";

for ($i = $arrCount-1; $i > $arrCount-6; $i--)
{
    echo $array[$i] . " ";
}

echo "<br> <br>";


echo "5. Sắp xếp mảng theo giá trị tăng dần: ";

sort($array);

foreach ($array as $number) 
{
    echo "$number ";
}

echo "<br>";
echo "<br>";

echo "5. Tìm kiếm giá trị xuất hiện trong mảng hay không và hiển thị số lần xuất hiện";

echo "<pre>";
print_r(array_count_values($array));
echo "</pre>";
echo "<br>";
echo "<br>";

echo "6. Xóa 1 phần tử trong mảng có giá trị bất kì: <br>";
$random_keys = array_rand($array, 1);
$value =  $array[$random_keys];

unset($array[$random_keys]);
echo "Mảng sau khi đã bị xóa 1 phần tử bất kì: ";
echo "<pre>";
print_r($array);
echo "</pre>";

echo "7. Tìm giá trị lớn nhất trong mảng: " . max($array). "<br>";
echo "Giá trị nhỏ nhất trong mảng: ". min($array);
echo "<br>";
echo "<br>";

echo "8. Tìm kiếm giá trị xuất hiện trong mảng hay không và hiển thị số lần xuất hiện: ". "<br>";
$array = array(11, 256, 342, -2, -5, 25, 43,  77, 99, 9, 910, 311, 120);
if (isset($_GET['submit_btn']))
{
    $val =  $_GET['inputName'];
    $soLanXuatHien = 0;
        
    for ($i = 0; $i < $arrCount; $i++)
    {
        if ($array[$i] == $val)
        {
            $soLanXuatHien ++;
        }
    }

    echo "Số bạn vừa nhập: ". $val . "<br>";
    echo "Số lần xuất hiện trong mảng: " . $soLanXuatHien . "<br> <br>";
}


echo "9. Chuyển mảng đã cho thành chuối JSON: ";
echo json_encode($array);

echo "<br>";
echo "<br>";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
       <div class="container">
           <form action="" method="GET">
               <div class="form-group row">
                   <label for="inputName" class="col-sm-1-12 col-form-label"></label>
                   <div class="col-sm-1-12">
                       <input type="number" class="form-control" name="inputName" id="inputName" placeholder="">
                   </div>
               </div>
            
               <button type="submit" name="submit_btn" class="btn btn-primary">Submit</button>
           </form>
       </div>
    </div>
</body>
</html>