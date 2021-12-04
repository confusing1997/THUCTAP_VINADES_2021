<?php

echo "Bài 3: Bài tập liên quan đến DateTime <br>
1. Hiển thị ngày hiện tại theo các định dạng <br>
2. Chuyển đổi ngày hiện tại thành timestamp <br>
3. Tính khoảng các giữa 2 ngày <br> <br> <br>";


echo "1. Hiện thị ngày hiện tại theo các định dạng: <br>";
echo "Hôm nay ngày : " . date("Y/m/d h:i:sa") . "<br>";
echo "Hôm nay ngày : " . date("Y.m.d") . "<br>";
echo "Hôm nay ngày : " . date("d-m-Y") . "<br> <br>";


echo "2. Chuyển đổi ngày hiện tại thành timestamp: <br>";
$now = date("d-m-Y");
echo strtotime($now) . "<br> <br>";


echo "3. Tính khoảng cách giữa 2 ngày: <br> <br>";
$datetime1 = new DateTime("2020-04-12");
echo "Ngày thứ nhất: ". $datetime1->format('d/m/Y') . "<br>";

$datetime2 = new DateTime("2021-04-01");
echo "Ngày thứ hai: ". $datetime1->format('d/m/Y') . "<br>" ;

$difference = $datetime1->diff($datetime2);

echo 'Khoảng cách: '.$difference->y.' năm, ' 
                   .$difference->m.' tháng, ' 
                   .$difference->d.' ngày';


?>