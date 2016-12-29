<?php
final class exo3 {
    private static function find($str, $char){
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            if($str[$i] == $char[0]) $count++;
        }
        
        return $count;
    }
    
    public static function main() {
        echo "Veuillez entrer un mot : ";
        $str = readline();
        
        echo "Veuillez entrer la lettre à compter : ";
        $char = readline();
        
        echo "La lettre " . $char[0] . " est presente " .
              self::find($str,$char) . " fois dabs le mot " . $str . "\n";
    }
}

exo3::main();