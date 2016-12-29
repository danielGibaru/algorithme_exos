<?php

final class exo8 {
    private static function triangle($hauteur = 5, $char = 'm') {
        for ($i = 0; $i < $hauteur; $i++) {
            for ($j = 0; $j <= $i; $j++) {
                echo $char[0] . " ";
            }
            echo "\n";
        }
    }
    
    public static function main() {
        
        echo "Veuillez entrer la hauteur du triangle : ";
        $h = readline();
        if (!is_numeric($h)) {
            echo "\tTaille invalide, utilisation de la valeur par défaut : 5\n";
            $h = 5;
        }
        
        echo "Veuillez entrer le caractère à afficher : ";
        $c = readline();
        
        self::triangle($h, $c);
    }
}

exo8::main();