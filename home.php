<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    
    <body>
        <?php include 'cards.php'; ?>
        
        <?php
        $rand = rand(1, 52);
        
        echo "My card is the ".$deck[$rand]['face']." of ".$deck[$rand]['suit'];
        
        echo "<br><img src=".$deck[$rand]['img'].">";

        ?>
        
        <br><br>
        
        <img src=<?php echo $deck['1']['img']?> alt="ace of clubs">
        <br><br>

    </body>
</html>