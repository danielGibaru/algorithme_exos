<?php
function pascal($hauteur = 5, $max = 0) {
    
    if ($hauteur > 20) $hauteur = 20;
    $pascal = array(array(1));
    
    echo 1 . "\n";
    for ($i = 1; $i <= $hauteur; $i++) {
		$pascal[$i][0] = 1;
        echo 1 . " ";
        
        $isMax = false;
		for($j = 1; $j <= $i; $j++) {
            $t = isset($pascal[$i-1][$j]) ? $pascal[$i-1][$j] : 0;
            $pascal[$i][$j] = $pascal[$i-1][$j-1] + $t;
            
            echo $pascal[$i][$j] . " ";
            
            if ($pascal[$i][$j] >= $max and $max > 0)
                $isMax = true;
        }
        echo "\n";
        
        if ($isMax)
            break;
	}
}

pascal(20, 0);