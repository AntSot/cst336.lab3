<?php

/*
    function function_name(){
        code_to_be_executed;
    }
*/

function deal(){
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
}





?>