<?php
    class entrada{

        private $valoredad;

        public function _construct(){
            $this->valoredad = 0;
        }

        public function getValoredad(){
            return $this->valoredad;
        }

        public function setValoredad($valor){
            $this->valoredad = $valor;
        }

        public function calcularFuncion(){

            if($this->getValoredad() < 5){
                echo "La funcion es gratis.";
            }elseif ($this->getValoredad() <= 12 ) {
                echo "Paga la mitad de la tarifa.";
            }elseif($this->getValoredad() <= 54){
                echo "Paga la tarifa completa.";
    
            }elseif($this->getValoredad() > 55){
                echo "La funcion es gratis.";
            }else{
                echo" Por favor ingrese un valor.";
            }
    
            return($this->getValoredad());
        }

    }

?>

