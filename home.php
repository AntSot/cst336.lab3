<!DOCTYPE html>
<html>
    <head>
        <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
        <?php include 'cards.php'; ?>
        
        <?php
        $rand = rand(1, 52);
        //reference variable to set scores for users
        $score = 0;
        
        //echo "My card is the ".$deck[$rand]['face']." of ".$deck[$rand]['suit'];
        
        //echo "<br><img src=".$deck[$rand]['img'].">";
        
        
        //users playing silverjack
        $users = array(
            array(
            "name" => "Crono",
            "cardAmounts" => mt_rand(4, 6),
            "score" => 0,
            "picture" => "assets/pro_pics/crono.jpg",
            "cards" => array(),
            "i_won" => false
        ),
        array(
            "name" => "Rock",
            "cardAmounts" => mt_rand(4, 6),
            "score" => 0,
            "picture" => "assets/pro_pics/megaman.png",
            "cards" => array(),
            "i_won" => false
        ),
        array(
            "name" => "Master",
            "cardAmounts" => mt_rand(4, 6),
            "score" => 0,
            "picture" => "assets/pro_pics/pokeball.png",
            "cards" => array(),
            "i_won" => false
        ),
        array(
            "name" => "Slender",
            "cardAmounts" => mt_rand(4, 6),
            "score" => 0,
            "picture" => "assets/pro_pics/slender.png",
            "cards" => array(),
            "i_won" => false
        ),
        );
        
        //echo all these divs later
        $divsToPrint = array();
        
        
        //draw cards and return array of drawn cards
        //similar to above 
        //however it should take the card out and 
        //prevent it from being drawn again
        function drawCards(&$deck, $amount, &$score)
        {
            //create to return to user "cards"
            $newArray = array();
            //size of deck initially
            $size = count($deck);
            
            
            //create array to pass back
            for($i = 0; $i < $amount; $i++)
            {
                do{
                    $rand_int = mt_rand(1,($size-1));
                }while(var_dump($deck[$rand_int]) != NULL);
                $newArray[$i] = $deck[$rand_int]['img'];
                array_splice($deck, $rand_int, 1);
                $size--;
                $score += $deck[$rand_int]["num_value"];
                echo "<br><br>";
                var_dump($deck[$rand_int]);
                echo "<br><br>";
            }
            return $newArray;
        }
        
        //set cards for all users
        function setCards(&$users, &$deck)
        {
            $temp = $deck;
            for($i = 0; $i < count($users); $i++)
            {
                $score = 0;
                $users[$i]["cards"] = drawCards($temp, $users[$i]["cardAmounts"], $score);
                $users[$i]["score"] = $score;
            }
            
        }
        
        setCards($users, $deck);
        
        ///was using this to see if set cards was work
        for($i = 0; $i < count($users); $i++)
        {
            echo "<br><br>";
            echo "Currently, we're looking at " . $users[$i]["name"] . " ";
            echo " and their score is " . $users[$i]["score"]. " ";
            echo "Here are their cards:";
            echo "<br><br>";
            var_dump($users[$i]["cards"]);
        }
        
        
        //determine winner using users "score"
        function getWinner(&$users)
        {
            //find index where score is closest to 42
            $max = 0;
            //current closest 
            $closest = 50000;
            $tCheck = 0;
            for($i = 0; $i < count($users); $i++)
            {
                $tCheck = abs($users[$i]["score"] - 42);
                if($users[$i]["score"] < 43)
                {
                    if($tCheck < $closest)
                    {
                        $closest = $tCheck;
                        $max = $i;
                    }
                }
            }
            $users[$max]["i_won"] = true;
        }
        
        getWinner($users);
        
        ?>
        
        <?php ?>
        
       <div class = "container"> 
           <div class = "board">
                <ul></ul>
                
                
           </div>
       </div>
       
       <form action="home.php">
          <input type="submit" value="Submit">
        </form>

    </body>
</html>