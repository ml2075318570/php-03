<?php 
$parameter1 = $_GET["t1"];
$parameter2 = $_GET["t2"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>输入的参数</h1>
    <h2>参数1: <?php echo $parameter1?></h2>
    <h2>参数2: <?php echo $parameter2?></h2>
</body>
</html>