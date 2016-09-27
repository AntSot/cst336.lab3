<!DOCTYPE html>
<html>
    <head>
        <?php include 'cards.php'; ?>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />

        <title></title>
    </head>
    
    <body>
        
    <?php
    $index_arr = range(1, 52);
    shuffle($index_arr);
    $traverse = 0;
    $player1 = array(0, 0, 0, 0, 0, 0);
    $player2 = array(0, 0, 0, 0, 0, 0);
    $player3 = array(0, 0, 0, 0, 0, 0);
    $player4 = array(0, 0, 0, 0, 0, 0);

    
    for($i = 0; $i < 4; $i++){
        $player1[$i] = $index_arr[$traverse];
        $traverse++;
        $player2[$i] = $index_arr[$traverse];
        $traverse++;
        $player3[$i] = $index_arr[$traverse];
        $traverse++;
        $player4[$i] = $index_arr[$traverse];
        $traverse++;
    }
    
    $extra = rand(0, 2);
    for($i=0; $i<$extra; $i++){
        $player1[4+$i] = $index_arr[$traverse];
        $traverse++;
    }
    $extra = rand(0, 2);
    for($i=0; $i<$extra; $i++){
        $player2[4+$i] = $index_arr[$traverse];
        $traverse++;
    }
    $extra = rand(0, 2);
    for($i=0; $i<$extra; $i++){
        $player3[4+$i] = $index_arr[$traverse];
        $traverse++;
    }
    $extra = rand(0, 2);
    for($i=0; $i<$extra; $i++){
        $player4[4+$i] = $index_arr[$traverse];
        $traverse++;
    }
    ?>


        <div class="playerRow">
            
            <div class="playerIcon">
                <img id="player1icon" src="images/icons/cat.jpg"></img>
            </div>
            
            <div class="playerHand">
                <?php
                    echo "<img src=".$deck[$player1[0]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player1[1]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player1[2]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player1[3]]['img']." class="."playerCard".">";
                    //Need whitespace picture
                    echo "<img src=".$deck[$player1[4]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player1[5]]['img']." class="."playerCard".">";
                ?>
            </div>
            
            <div class="score">
                <?php
                $player1score = $deck[$player1[0]]['num_value'] 
                    + $deck[$player1[1]]['num_value'] 
                    + $deck[$player1[2]]['num_value'] 
                    + $deck[$player1[3]]['num_value']
                    + $deck[$player1[4]]['num_value'] 
                    + $deck[$player1[5]]['num_value'];
                ?>
                Score: <?php echo $player1score; ?>
            </div>
            
            <div class="winner">
                WINNER!
            </div>        

        </div>
        

        <script>
            document.getElementById('player1icon').src="images/icons/dog.jpg";
        </script>
        
        <!---------------------------------------------------------------->
        
        <div class="playerRow">
            
            <div class="playerIcon">
                <img id="player2icon" src="images/icons/cat.jpg"></img>
            </div>
            
            <div class="playerHand">
                <?php
                    echo "<img src=".$deck[$player2[0]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player2[1]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player2[2]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player2[3]]['img']." class="."playerCard".">";
                    //Need whitespace picture
                    echo "<img src=".$deck[$player2[4]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player2[5]]['img']." class="."playerCard".">";
                ?>
            </div>
            
            <div class="score">
                <?php
                $player2score = $deck[$player2[0]]['num_value'] 
                    + $deck[$player2[1]]['num_value'] 
                    + $deck[$player2[2]]['num_value'] 
                    + $deck[$player2[3]]['num_value']
                    + $deck[$player2[4]]['num_value'] 
                    + $deck[$player2[5]]['num_value'];
                ?>
                Score: <?php echo $player2score; ?>
            </div>
            
            <div class="winner">
                WINNER!
            </div>        

        </div>
        
        <!---------------------------------------------------------->
        
        <div class="playerRow">
            
            <div class="playerIcon">
                <img id="player3icon" src="images/icons/iguana.jpg"></img>
            </div>
            
            <div class="playerHand">
                <?php
                    echo "<img src=".$deck[$player3[0]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player3[1]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player3[2]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player3[3]]['img']." class="."playerCard".">";
                    //Need whitespace picture
                    echo "<img src=".$deck[$player3[4]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player3[5]]['img']." class="."playerCard".">";
                ?>
            </div>

            <div class="score">
                <?php
                $player3score = $deck[$player3[0]]['num_value'] 
                    + $deck[$player3[1]]['num_value'] 
                    + $deck[$player3[2]]['num_value'] 
                    + $deck[$player3[3]]['num_value']
                    + $deck[$player3[4]]['num_value'] 
                    + $deck[$player3[5]]['num_value'];
                ?>
                Score: <?php echo $player3score; ?>
            </div>
            
            <div class="winner">
                WINNER!
            </div>        
            
        </div>
        
        <!------------------------------------------------------->
        <div class="playerRow">
            
            <div class="playerIcon">
                <img id="player4icon" src="images/icons/rabbit.jpg"></img>
            </div>
            
            <div class="playerHand">
                <?php

                    echo "<img src=".$deck[$player4[0]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player4[1]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player4[2]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player4[3]]['img']." class="."playerCard".">";
                    //Need whitespace picture
                    echo "<img src=".$deck[$player4[4]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player4[5]]['img']." class="."playerCard".">";
                ?>
            </div>
            
            <div class="score">
                <?php
                $player4score = $deck[$player4[0]]['num_value'] 
                    + $deck[$player4[1]]['num_value'] 
                    + $deck[$player4[2]]['num_value'] 
                    + $deck[$player4[3]]['num_value']
                    + $deck[$player4[4]]['num_value'] 
                    + $deck[$player4[5]]['num_value'];
                ?>
                Score: <?php echo $player4score; ?>
            </div>
            
            <div class="winner">
                WINNER!
            </div>
            
        </div>
        
        <br><br>

        <form action="board.php">
            <input type="submit" value="Play Again" id="playButton">
        </form>
       
    </body>
</html>