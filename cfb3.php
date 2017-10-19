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
    <div class="big">
      <?php for($j = 1;$j < 10;$j++)  {?>
        <div class="row">
            <?php for($i = 1;$i <= $j;$i++)  {?>
             <div class="column">
              <?php printf("%d*%d=%d",$j,$i,1*$i) ?>
             </div>
            <?php }  ?>
             <div class="clear"></div>
          
        </div><br/>
            <?php }  ?>
    </div>
</body>
</html>