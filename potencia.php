<?php

     function pot($x, $y) {
         // Verificar se expoente e zero
        if ($y == 0) {
            return 1;
        } 

        // Verificar se expoente e negativo
        if ($y < 0) {
            $x = 1 / $x;
            $y = $y * -1;
        }

         $mult = $x;
         for ($i = 0; $i < $y; $i++) {
             $mult = $mult * $x;
         }
         return $mult;
     }

     $num = $_POST['num'];
     $pot = $_POST['pot'];

     $resultado = pot ($num, $pot);

     echo $resultado;

?>