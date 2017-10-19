<?php

if ( isset( $_GET[ "t1" ] ) && strlen(trim($_GET["t1"]))
&& isset( $_GET[ "t2" ] ) && strlen(trim($_GET["t1"])) ) {
    $t1 = $_GET[ "t1" ];
    $t2 = $_GET[ "t2" ];
} else {
    exit( "<h1>你没有权限访问该页面</h1>" );
}

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
    <h1>您输入的参数为:</h1>
    <h2>t1: <?php echo $t1?></h2>
    <h2>t2: <?php echo $t2?></h2>
</body>
</html>