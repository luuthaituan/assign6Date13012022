<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assign 6</title>
</head>
<body>
<h1>Fibonacci Sequence</h1>
<form action="Fibonaci.php" method="get">
    N: <input type="text" name="number">
    <input type="submit" value="submit">
</form>
<?php
//Viết chương trình tính tổng n số Fibonaci đầu tiên
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$number = null;
if($_SERVER["REQUEST_METHOD"] == "GET"){
    if(empty($_GET["number"])){
        echo "Please enter something";
        die;
    }else{
        $number = (int)test_input($_GET["number"]);
        if(is_numeric($number) == FALSE){
            echo "This is not a number";
            die;
        }
    }
}

require 'Function.php';
$sum =0;
echo "FIBONACCI LIST: ";
echo "<br>";
for($i =0; $i < $number; $i++){
    echo fibo($i) . " ";
    $sum = $sum + fibo($i);
}
echo "<br>";
echo "The sum of all fibonacci numbers: " . $sum;
?>
</body>
</html>