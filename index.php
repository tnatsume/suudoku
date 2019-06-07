<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>数独</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <form action="index.php"method="POST">
        <?php for($i=0;$i<9;$i++): ?>
            <?php for ($j=0;$j<9;$j++) :?>
                    <input type="number"name="<?php echo $i ?>_<?php echo $j?>"id="<?php echo $i ?>_<?php echo $j?>"  min="1" max="9">
            <?php endfor ?>
                <?php echo '<br>' ?>
        <?php endfor ?>

        <input type="submit"class="submit"value="送信">
        <input type="button" class="submit"value="クリア" onclick="cls()">

  
        </form>
    
    
    </div>
   
    <script>
        var cls = function() {
            for ( var i = 0; i < 9 ; i ++ ){
                for ( var j = 0 ; j < 9 ; j ++ ){
                    var str = i + '_' + j;
                    document.getElementById( str ).value = "" ;
                }
            }
        }
    </script>

</body>
</html>