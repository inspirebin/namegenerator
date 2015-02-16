<?php
    //generate random consonants separated by vowels
    function generate_faux_word($letters = 4){

        //define arrays of consonants and vowels
        //no q, it's tough to remember
        $consonants = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z', 'q');
        $vowels = array('a', 'e', 'i', 'o', 'u');

        $ret_word = "";
        $consonant_toggle = true;
        //randomly choose a consonant then a vowel until the word is as long as the parameter
        while(strlen($ret_word) < $letters){
            $count = rand(0,10);
            if($count<5){
            if ($consonant_toggle){
                $ret_word .= $consonants[array_rand($consonants)];
                $consonant_toggle = false;
                if($ret_word>3){
                  $ret_word .= $consonants[array_rand($consonants)];
                }
            }
            }else{
                if($count>5){
                $ret_word .= $vowels[array_rand($vowels)];
                $consonant_toggle = true;
            }
            }
            
        }
        return $ret_word;
    }
        for($i=0;$i<100;$i++){
            $num =rand(4,8); 
    echo '<h1>'.generate_faux_word($num).'</h1>';
    echo "<br />";
        }

echo '<style>h1{font-family:Aller;font-size:40px;}</style>'
?>