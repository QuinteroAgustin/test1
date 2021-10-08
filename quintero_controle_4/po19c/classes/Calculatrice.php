<?php
    class Calculatrice{
        //rajout du "static" avant la denomination de la function pour la mettre en static
        public static function addition(int $val1, int $val2){
            return $val1+$val2;
        }

        public static function soustraction(int $val1, int $val2){
            return $val1-$val2;
        }

        public static function multiplication(int $val1, int $val2){
            return $val1*$val2;
        }

        public static function division(int $val1, int $val2){
            if($val2 === 0){
                throw new Exception('Division par Zéro');
            }else{
                return $val1/$val2;
            }
        }
    }
?>