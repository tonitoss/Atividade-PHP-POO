<?php
/*
Escreva uma classe que represente um circulo no plano cartesiano. Forneça os seguintes membros de classe:

1. Um contrutor que incialize o ponto em um local por parâmetros ou na origem do espaço;
2. Métodos getter e setter.
3. Métodos de inflar e desinflar que respectivamente aumenta e diminuem o tamanho do circulo.
4. Método para mover o circulo a partir de outro ponto ou para a origem do espaço.
5. Método que retorna a àrea do círculo. 
*/
    class Círculo{
        private $x;
        private $y;
        private $raio;

        //1
        public function circulo($raio, $x = 0, $y = 0 ){
            $this->x = $x;
            $this->y = $y;
            $this->setRaio($raio);
        }

        //2
        public function getX(){
            return $this->x;
        }

        public function setX($x){
            $this->x = $x;
        }

        public function getY(){
            return $this->y;
        }

        public function setY($x){
            $this->y = $y;
        }

        public function getRaio(){
            return $this->raio;
        }

        public function setRaio($raio){
            $this->raio = $raio < 0 ? 0 : $raio;
        }

        //3
        public function increase($value){
            $this->setRaio($this->raio + $value);
        }

        public function decrease($value){
            $this->setRaio($this->raio - $value);
        }

        //4
        public function move($point){
            $this->x = $point->getX();
            $this->y = $point->getY();
        }
        
        // 5
        public function area(){
            return pi() * ($this->raio * 2);
        }    
    }
?>