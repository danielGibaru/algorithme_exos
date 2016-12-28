<?php
class exo4 {
	private static function pascal($hauteur = 5, $max = 0) {
	 
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
	
	public static function main(){
		echo "Nombre de lignes max : ";
		$l = readline();
		while (!is_numeric($l)) {
			echo "Veuillez entrer une valeur numérique\n";
			echo "Nombre de lignes max : ";
			$l = readline();
		}
		
		echo "Valeur max : ";
		$n = readline();
		while (!is_numeric($n)) {
			echo "Veuillez entrer une valeur numérique\n";
			echo "Valeur max : ";
			$n = readline();
		}
		
		self::pascal(intval($l), intval($n));
	}
}


exo4::main();