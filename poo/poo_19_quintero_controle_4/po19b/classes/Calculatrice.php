<?php
    class Calculatrice{
        public function addition(int $val1, int $val2){
            return $val1+$val2;
        }

        public function soustraction(int $val1, int $val2){
            return $val1-$val2;
        }

        public function multiplication(int $val1, int $val2){
            return $val1*$val2;
        }

        public function division(int $val1, int $val2){
            if($val2 === 0){
                throw new Exception('Division par Zéro');
            }else{
                return $val1/$val2;
            }
        }
    }
?>