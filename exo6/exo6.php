<?php

final class exo6 {
    private static function perroquet() {
        
        $input = "";
        echo "Veuillez ecrire quelque chose \n";
        $input = readline();
        
        echo "Vous avez ecrit : " . $input . "\n";

        $actionValide = false;
        while(!$actionValide) {
            echo "Voulez vous quitter ? o/n : ";
        
            $action = "n";
            $action = readline();
    
            if ($action[0] == 'o' || $action[0] == 'O') {
                return;
            }
            else if ($action[0] == 'n' || $action[0] == 'N'){
                $actionValide = true;
            }
            else {
                echo "Veuillez entrer une réponse valide\n";
            }
        }
        
        echo "\n";
        self::perroquet();
    }
    
    public static function main() {
        self::perroquet();
    }
}

exo6::main();