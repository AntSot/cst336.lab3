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
                "img"=>"assets/clubs/1.png",
                "num_value"=>1),
                
            "2" => array(
                "suit"=>"clubs",
                "face"=>"two",
                "img"=>"assets/clubs/2.png",
                "num_value"=>2),
            
            "3" => array(
                "suit"=>"clubs",
                "face"=>"three",
                "img"=>"assets/clubs/3.png",
                "num_value"=>3),
                
            "4" => array(
                "suit"=>"clubs",
                "face"=>"four",
                "img"=>"assets/clubs/4.png",
                "num_value"=>4),
                
            "5" => array(
                "suit"=>"clubs",
                "face"=>"five",
                "img"=>"assets/clubs/5.png",
                "num_value"=>5),
                
            "6" => array(
                "suit"=>"clubs",
                "face"=>"six",
                "img"=>"assets/clubs/6.png",
                "num_value"=>6),
                
            "7" => array(
                "suit"=>"clubs",
                "face"=>"seven",
                "img"=>"assets/clubs/7.png",
                "num_value"=>7),
            "8" => array(
                "suit"=>"clubs",
                "face"=>"eight",
                "img"=>"assets/clubs/8.png",
                "num_value"=>8),
                
            "9" => array(
                "suit"=>"clubs",
                "face"=>"nine",
                "img"=>"assets/clubs/9.png",
                "num_value"=>9),
                
            "10" => array(
                "suit"=>"clubs",
                "face"=>"ten",
                "img"=>"assets/clubs/10.png",
                "num_value"=>10),
                
            "11" => array(
                "suit"=>"clubs",
                "face"=>"jack",
                "img"=>"assets/clubs/11.png",
                "num_value"=>11),
            "12" => array(
                "suit"=>"clubs",
                "face"=>"queen",
                "img"=>"assets/clubs.12.png",
                "num_value"=>12),
            "13" => array(
                "suit"=>"clubs",
                "face"=>"king",
                "img"=>"assets/clubs/13.png",
                "num_value"=>13),
                
        //DIAMONDS 
            "14" => array(
                "suit"=>"diamonds",
                "face"=>"ace",
                "img"=>"assets/diamonds/1.png",
                "num_value"=>1),
                
            "15" => array(
                "suit"=>"diamonds",
                "face"=>"two",
                "img"=>"assets/diamonds/2.png",
                "num_value"=>2),
                
            "16" => array(
                "suit"=>"diamonds",
                "face"=>"three",
                "img"=>"assets/diamonds/3.png",
                "num_value"=>3),
                
            "17" => array(
                "suit"=>"diamonds",
                "face"=>"four",
                "img"=>"assets/diamonds/4.png",
                "num_value"=>4),
                
            "18" => array(
                "suit"=>"diamonds",
                "face"=>"five",
                "img"=>"assets/diamonds/5.png",
                "num_value"=>5),
    
            "19" => array(
                "suit"=>"diamonds",
                "face"=>"six",
                "img"=>"assets/diamonds/6.png",
                "num_value"=>6),
            "20" => array(
                "suit"=>"diamonds",
                "face"=>"seven",
                "img"=>"assets/diamonds/7.png",
                "num_value"=>7),
                
            "21" => array(
                "suit"=>"diamonds",
                "face"=>"eight",
                "img"=>"assets/diamonds/8.png",
                "num_value"=>8),
                
            "22" => array(
                "suit"=>"diamonds",
                "face"=>"nine",
                "img"=>"assets/diamonds/9.png",
                "num_value"=>9),
                
            "23" => array(
                "suit"=>"diamonds",
                "face"=>"ten",
                "img"=>"assets/diamonds/10.png",
                "num_value"=>10),
                
            "24" => array(
                "suit"=>"diamonds",
                "face"=>"jack",
                "img"=>"assets/diamonds/11.png",
                "num_value"=>11),
                
            "25" => array(
                "suit"=>"diamonds",
                "face"=>"queen",
                "img"=>"assets/diamonds/12.png",
                "num_value"=>12),
                
            "26" => array(
                "suit"=>"diamonds",
                "face"=>"king",
                "img"=>"assets/diamonds/13.png",
                "num_value"=>13),
            
        //HEARTS
        
            "27" => array(
                "suit"=>"hearts",
                "face"=>"ace",
                "img"=>"assets/hearts/1.png",
                "num_value"=>1),
                
            "28" => array(
                "suit"=>"hearts",
                "face"=>"two",
                "img"=>"assets/hearts/2.png",
                "num_value"=>2),
                
            "29" => array(
                "suit"=>"hearts",
                "face"=>"three",
                "img"=>"assets/hearts/3.png",
                "num_value"=>3),
                
            "30" => array(
                "suit"=>"hearts",
                "face"=>"four",
                "img"=>"assets/hearts/4.png",
                "num_value"=>4),
            
            "31" => array(
                "suit"=>"hearts",
                "face"=>"five",
                "img"=>"assets/hearts/5.png",
                "num_value"=>5),
                
            "32" => array(
                "suit"=>"hearts",
                "face"=>"six",
                "img"=>"assets/hearts/6.png",
                "num_value"=>6),
                
            "33" => array(
                "suit"=>"hearts",
                "face"=>"seven",
                "img"=>"assets/hearts/7.png",
                "num_value"=>7),
            
            "34" => array(
                "suit"=>"hearts",
                "face"=>"eight",
                "img"=>"assets/hearts/8.png",
                "num_value"=>8),
            "35" => array(
                "suit"=>"hearts",
                "face"=>"nine",
                "img"=>"assets/hearts/9.png",
                "num_value"=>9),
            "36" => array(
                "suit"=>"hearts",
                "face"=>"ten",
                "img"=>"assets/hearts/10.png",
                "num_value"=>10),
                
            "37" => array(
                "suit"=>"hearts",
                "face"=>"jack",
                "img"=>"assets/hearts/11.png",
                "num_value"=>11),
                
            "38" => array(
                "suit"=>"hearts",
                "face"=>"queen",
                "img"=>"assets/hearts/12.png",
                "num_value"=>12),
                
            "39" => array(
                "suit"=>"hearts",
                "face"=>"king",
                "img"=>"assets/hearts/13.png",
                "num_value"=>13),
        
        //SPADES
            "40" => array(
                "suit"=>"spades",
                "face"=>"ace",
                "img"=>"assets/spades/1.png",
                "num_value"=>1),
                
            "41" => array(
                "suit"=>"spades",
                "face"=>"two",
                "img"=>"assets/spades/2.png",
                "num_value"=>2),
                
            "42" => array(
                "suit"=>"spades",
                "face"=>"three",
                "img"=>"assets/spades/3.png",
                "num_value"=>3),
                
            "43" => array(
                "suit"=>"spades",
                "face"=>"four",
                "img"=>"assets/spades/4.png",
                "num_value"=>4),
                
            "44" => array(
                "suit"=>"spades",
                "face"=>"five",
                "img"=>"assets/spades/5.png",
                "num_value"=>5),
                
            "45" => array(
                "suit"=>"spades",
                "face"=>"six",
                "img"=>"assets/spades/6.png",
                "num_value"=>6),
                
            "46" => array(
                "suit"=>"spades",
                "face"=>"seven",
                "img"=>"assets/spades/7.png",
                "num_value"=>7),
                
            "47" => array(
                "suit"=>"spades",
                "face"=>"eight",
                "img"=>"assets/spades/8.png",
                "num_value"=>8),
                
            "48" => array(
                "suit"=>"spades",
                "face"=>"nine",
                "img"=>"assets/spades/9.png",
                "num_value"=>9),
                
            "49" => array(
                "suit"=>"spades",
                "face"=>"ten",
                "img"=>"assets/spades/10.png",
                "num_value"=>10),
            "50" => array(
                "suit"=>"spades",
                "face"=>"jack",
                "img"=>"assets/spades/11.png",
                "num_value"=>11),
                
            "51" => array(
                "suit"=>"spades",
                "face"=>"queen",
                "img"=>"assets/spades/12.png",
                "num_value"=>12),
            "52" => array(
                "suit"=>"spades",
                "face"=>"king",
                "img"=>"assets/spades/13.png",
                "num_value"=>13)
        );
        ?>