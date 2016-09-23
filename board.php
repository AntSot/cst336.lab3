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

    
    for($i = 0; $i < 6; $i++){
        $player1[$i] = $index_arr[$traverse];
        $traverse++;
        $player2[$i] = $index_arr[$traverse];
        $traverse++;
        $player3[$i] = $index_arr[$traverse];
        $traverse++;
        $player4[$i] = $index_arr[$traverse];
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
                    echo "<img src=".""." class="."playerCard".">";
                    echo "<img src=".""." class="."playerCard".">";
                    $player1score = 0;
                    $player1score = $deck[$player1[0]]['num_val'];
                ?>
            </div>
            
            <div class="score">
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
                    $card1 = rand(1, 52);
                    $card2 = rand(1, 52);
                    $card3 = rand(1, 52);
                    $card4 = rand(1, 52);
                    
                    echo "<img src=".$deck[$player2[0]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player2[1]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player2[2]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player2[3]]['img']." class="."playerCard".">";
                    //Need whitespace picture
                    echo "<img src=".""." class="."playerCard".">";
                    echo "<img src=".""." class="."playerCard".">";
                ?>
            </div>
            
            <div class="score">
                Score: XX
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
                    $card1 = rand(1, 52);
                    $card2 = rand(1, 52);
                    $card3 = rand(1, 52);
                    $card4 = rand(1, 52);

                    echo "<img src=".$deck[$player3[0]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player3[1]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player3[2]]['img']." class="."playerCard".">";
                    echo "<img src=".$deck[$player3[3]]['img']." class="."playerCard".">";

                    //Need whitespace picture
                    echo "<img src=".""." class="."playerCard".">";
                    echo "<img src=".""." class="."playerCard".">";
                ?>
            </div>

            <div class="score">
                Score: XX
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
                    echo "<img src=".""." class="."playerCard".">";
                    echo "<img src=".""." class="."playerCard".">";
                ?>
            </div>
            
            <div class="score">
                Score: XX
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