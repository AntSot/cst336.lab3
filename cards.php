        <?php
        
        /*
        WHAT DOES A CARD ARRAY CONTAIN
            - SUIT. What suit is the card.
            - FACE. What face is the card.
            - IMG. Directory for corresponding .png image
            - NUM_VALUE. What numercial value the card is
        
        SUIT ORDER (ALPHABETICAL)
            CLUB, DIAMOND, HEART, SPADE
            
        FACE ORDER
            ACE, 2, 3, 4, 5, 6, 7, 8, 9, 10, JACK, QUEEN, KING
            
        NUMBER VALUE ORDER
            1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
            
        
        */
        $deck = array(
        //CLUBS
            "1" => array(
                "suit"=>"clubs",
                "face"=>"ace",
                "img"=>"images/clubs/1.png",
                "num_value"=>1),
                
            "2" => array(
                "suit"=>"clubs",
                "face"=>"two",
                "img"=>"images/clubs/2.png",
                "num_value"=>2),
            
            "3" => array(
                "suit"=>"clubs",
                "face"=>"three",
                "img"=>"images/clubs/3.png",
                "num_value"=>3),
                
            "4" => array(
                "suit"=>"clubs",
                "face"=>"four",
                "img"=>"images/clubs/4.png",
                "num_value"=>4),
                
            "5" => array(
                "suit"=>"clubs",
                "face"=>"five",
                "img"=>"images/clubs/5.png",
                "num_value"=>5),
                
            "6" => array(
                "suit"=>"clubs",
                "face"=>"six",
                "img"=>"images/clubs/6.png",
                "num_value"=>6),
                
            "7" => array(
                "suit"=>"clubs",
                "face"=>"seven",
                "img"=>"images/clubs/7.png",
                "num_value"=>7),

            "8" => array(
                "suit"=>"clubs",
                "face"=>"eight",
                "img"=>"images/clubs/8.png",
                "num_value"=>8),
                
            "9" => array(
                "suit"=>"clubs",
                "face"=>"nine",
                "img"=>"images/clubs/9.png",
                "num_value"=>9),
                
            "10" => array(
                "suit"=>"clubs",
                "face"=>"ten",
                "img"=>"images/clubs/10.png",
                "num_value"=>10),
                
            "11" => array(
                "suit"=>"clubs",
                "face"=>"jack",
                "img"=>"images/clubs/11.png",
                "num_value"=>11),

            "12" => array(
                "suit"=>"clubs",
                "face"=>"queen",
                "img"=>"images/clubs/12.png",
                "num_value"=>12),

            "13" => array(
                "suit"=>"clubs",
                "face"=>"king",
                "img"=>"images/clubs/13.png",
                "num_value"=>13),
                
        //DIAMONDS 
            "14" => array(
                "suit"=>"diamonds",
                "face"=>"ace",
                "img"=>"images/diamonds/1.png",
                "num_value"=>1),
                
            "15" => array(
                "suit"=>"diamonds",
                "face"=>"two",
                "img"=>"images/diamonds/2.png",
                "num_value"=>2),
                
            "16" => array(
                "suit"=>"diamonds",
                "face"=>"three",
                "img"=>"images/diamonds/3.png",
                "num_value"=>3),
                
            "17" => array(
                "suit"=>"diamonds",
                "face"=>"four",
                "img"=>"images/diamonds/4.png",
                "num_value"=>4),
                
            "18" => array(
                "suit"=>"diamonds",
                "face"=>"five",
                "img"=>"images/diamonds/5.png",
                "num_value"=>5),
    
            "19" => array(
                "suit"=>"diamonds",
                "face"=>"six",
                "img"=>"images/diamonds/6.png",
                "num_value"=>6),

            "20" => array(
                "suit"=>"diamonds",
                "face"=>"seven",
                "img"=>"images/diamonds/7.png",
                "num_value"=>7),
                
            "21" => array(
                "suit"=>"diamonds",
                "face"=>"eight",
                "img"=>"images/diamonds/8.png",
                "num_value"=>8),
                
            "22" => array(
                "suit"=>"diamonds",
                "face"=>"nine",
                "img"=>"images/diamonds/9.png",
                "num_value"=>9),
                
            "23" => array(
                "suit"=>"diamonds",
                "face"=>"ten",
                "img"=>"images/diamonds/10.png",
                "num_value"=>10),
                
            "24" => array(
                "suit"=>"diamonds",
                "face"=>"jack",
                "img"=>"images/diamonds/11.png",
                "num_value"=>11),
                
            "25" => array(
                "suit"=>"diamonds",
                "face"=>"queen",
                "img"=>"images/diamonds/12.png",
                "num_value"=>12),
                
            "26" => array(
                "suit"=>"diamonds",
                "face"=>"king",
                "img"=>"images/diamonds/13.png",
                "num_value"=>13),
            
        //HEARTS
        
            "27" => array(
                "suit"=>"hearts",
                "face"=>"ace",
                "img"=>"images/hearts/1.png",
                "num_value"=>1),
                
            "28" => array(
                "suit"=>"hearts",
                "face"=>"two",
                "img"=>"images/hearts/2.png",
                "num_value"=>2),
                
            "29" => array(
                "suit"=>"hearts",
                "face"=>"three",
                "img"=>"images/hearts/3.png",
                "num_value"=>3),
                
            "30" => array(
                "suit"=>"hearts",
                "face"=>"four",
                "img"=>"images/hearts/4.png",
                "num_value"=>4),
            
            "31" => array(
                "suit"=>"hearts",
                "face"=>"five",
                "img"=>"images/hearts/5.png",
                "num_value"=>5),
                
            "32" => array(
                "suit"=>"hearts",
                "face"=>"six",
                "img"=>"images/hearts/6.png",
                "num_value"=>6),
                
            "33" => array(
                "suit"=>"hearts",
                "face"=>"seven",
                "img"=>"images/hearts/7.png",
                "num_value"=>7),
            
            "34" => array(
                "suit"=>"hearts",
                "face"=>"eight",
                "img"=>"images/hearts/8.png",
                "num_value"=>8),

            "35" => array(
                "suit"=>"hearts",
                "face"=>"nine",
                "img"=>"images/hearts/9.png",
                "num_value"=>9),

            "36" => array(
                "suit"=>"hearts",
                "face"=>"ten",
                "img"=>"images/hearts/10.png",
                "num_value"=>10),
                
            "37" => array(
                "suit"=>"hearts",
                "face"=>"jack",
                "img"=>"images/hearts/11.png",
                "num_value"=>11),
                
            "38" => array(
                "suit"=>"hearts",
                "face"=>"queen",
                "img"=>"images/hearts/12.png",
                "num_value"=>12),
                
            "39" => array(
                "suit"=>"hearts",
                "face"=>"king",
                "img"=>"images/hearts/13.png",
                "num_value"=>13),
        
        //SPADES
            "40" => array(
                "suit"=>"spades",
                "face"=>"ace",
                "img"=>"images/spades/1.png",
                "num_value"=>1),
                
            "41" => array(
                "suit"=>"spades",
                "face"=>"two",
                "img"=>"images/spades/2.png",
                "num_value"=>2),
                
            "42" => array(
                "suit"=>"spades",
                "face"=>"three",
                "img"=>"images/spades/3.png",
                "num_value"=>3),
                
            "43" => array(
                "suit"=>"spades",
                "face"=>"four",
                "img"=>"images/spades/4.png",
                "num_value"=>4),
                
            "44" => array(
                "suit"=>"spades",
                "face"=>"five",
                "img"=>"images/spades/5.png",
                "num_value"=>5),
                
            "45" => array(
                "suit"=>"spades",
                "face"=>"six",
                "img"=>"images/spades/6.png",
                "num_value"=>6),
                
            "46" => array(
                "suit"=>"spades",
                "face"=>"seven",
                "img"=>"images/spades/7.png",
                "num_value"=>7),
                
            "47" => array(
                "suit"=>"spades",
                "face"=>"eight",
                "img"=>"images/spades/8.png",
                "num_value"=>8),
                
            "48" => array(
                "suit"=>"spades",
                "face"=>"nine",
                "img"=>"images/spades/9.png",
                "num_value"=>9),
                
            "49" => array(
                "suit"=>"spades",
                "face"=>"ten",
                "img"=>"images/spades/10.png",
                "num_value"=>10),

            "50" => array(
                "suit"=>"spades",
                "face"=>"jack",
                "img"=>"images/spades/11.png",
                "num_value"=>11),
                
            "51" => array(
                "suit"=>"spades",
                "face"=>"queen",
                "img"=>"images/spades/12.png",
                "num_value"=>12),

            "52" => array(
                "suit"=>"spades",
                "face"=>"king",
                "img"=>"images/spades/13.png",
                "num_value"=>13)
        );
        ?>