<?php
final class exo2 {
    private static function sortTab(&$tableau, $croissant = true)
    {
        $loops = 0;
        $proceed = true;
        while ($proceed)
        {
            $proceed = false;
            for ($i = 0; $i < count($tableau)-1; $i++)
            {
                if (($croissant && $tableau[$i+1] < $tableau[$i]) ||
                    (!$croissant && $tableau[$i+1] > $tableau[$i]) )
                {
                    $tmp = $tableau[$i];
                    $tableau[$i] = $tableau[$i+1];
                    $tableau[$i+1] = $tmp;
                    $proceed = true;
                }
                $loops++;
            }
        } 
        return $loops;
    }
    
    public static function main() {
        $tableau = array(12,654,81,55,34,1516,489,13,99,79,642,125);
        self::sortTab($tableau, false);
        print_r($tableau);
    }
}

exo2::main();