<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .row {
            width: 963px;
            /* background-color: #ccc; */
        }

        .column {
            float: left;
            width: 100px;
            border: 1px dashed blue;
            margin-right: 5px;
            margin-bottom: 10px;
            text-align: center;
        }

        .clear {
            clear:both;
        }
    
    </style>
</head>
<body>
<div id="container">
       <?php for($j = 1; $j < 10 ; $j++)  {?>

        <div class="row">

           <?php for($i=$j ; $i < 10 ; $i++ ) { ?>
            
            <div class="column"><?php printf("%d*%d = %d", $j,$i,$j*$i )  ?></div>

           <?php } ?>

            <div class="clear"></div>
        </div><br/>

           <?php } ?>

    </div>
</body>
</html>