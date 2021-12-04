<?php 

echo "Bài tập với chuỗi <br>
1. Viết hàm đảo ngược 1 chuỗi <br>
2. Chuyển chuỗi đã cho thành chữ HOA <br>
3. Kiểm tra xem chuỗi đã cho có chứa một chuỗi nào đó không <br>
4. Đếm số ký tự xuất hiện trong chuỗi và hiển thị <br>
5. Thay thế chữ bất kỳ trong chuỗi thành chữ khác <br> <br> <br>";


if (isset($_GET['submit_btn']))
{
    $string = htmlentities($_GET['inputName']);
    $stringReplace = htmlentities($_GET['strReplace']);
    $stringToReplace = htmlentities($_GET['strToReplace']);

    echo "Chuỗi cho trước: ".$string ."<br> <br>";
    echo "1. Viết hàm đảo ngược 1 chuỗi: " . strrev($string) . "<br> <br>";

    echo "2. Chuyễn chuỗi đã cho thành chữ HOA: " . strtoupper($string) . "<br> <br>";

    echo "3. Kiểm tra chuỗi đã cho đã có chứa 1 chuỗi nào đó không: ";
    $checkStr = explode(" ", $string);

    if (count($checkStr) <= 1)
    {
        echo "Không chứa chuỗi nào <br> <br> <br>";
    }
    else 
    {   
        echo "<pre>";
        print_r($checkStr);
        echo "</pre>";
        echo "<br> <br> <br>";
    }

    echo "4. Đếm số ký tự xuất hiện trong chuỗi: " . strlen($string) . "<br>";
    echo "Hiển thị ký tự trong chuỗi: ";
    $chars = str_split($string);

    foreach ($chars as $char)
    {
        echo $char . " ";
    }
    echo "<br> <br>";

    echo "5. Thay thế chữ bất kì trong chuỗi thành chữ khác: <br> <br>";
    echo "Chữ để thay thế: ". $stringToReplace . "<br>";
    echo "Chữ bị thay thế: ". $stringReplace ."<br>";
    echo str_replace($stringToReplace, $stringReplace, $string);

}
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
    <dv class="container">
        <div class="container">
            <form action="" method="GET">
                <div class="form-group row">
                    <label for="inputName" class="col-sm-1-12 col-form-label">Mời bạn nhập chuỗi bất kì: </label>
                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder="">
                </div>

                <table>

                    <th>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-1-12 col-form-label">Chữ để thay thế: </label>
                            <input type="text" class="form-control" name="strReplace">
                        </div>
                    </th>

                    <th>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-1-12 col-form-label">Chữ bị thay thế: </label>
                            <input type="text" class="form-control" name="strToReplace">
                        </div>
                    </th>

                </table>

                <button type="submit" class="btn btn-primary" name="submit_btn">Submit</button>
            </form>
        </div>
    </dv>
</body>
</html>