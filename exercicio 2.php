<?php
/*
A fim de representar empregados em uma firma, crie uma classe chamada Empregado que inclui as três informações 
a seguir como atributos:

um primeiro nome
um sobrenome
um salário mensal.
Sua classe deve ter um construtor que inicializa os três atributos. Forneça um método set e get para cada atributo. 
Se o salário mensal não for positivo, configure-o como 0.0. Crie um método que exibe o salário anual e um que dê 10% de 
aumento no salário.
*/
    
    class Empregado{
        private $nome;
        private $sobrenome;
        private $salario;
            
        public function __construct($par1, $par2, $par3){
            $this->nome = $par1;
            $this->sobrenome = $par2;
            $this->salario = $par3;
    
            if($par3 <= 0){
                $this->salario = 0.0; 
            }else{
                $this->salario = $par3;
            }
            
        }
    
        public function __set($atributo, $value){
            $this->$atributo = $value;
        }
        public function __get($atributo){
            return $this->$atributo;
        }
        public function getEmpregadosAmount() {
            return ($this->salario * 12);
        }
        public function getAumentoAmount() {
            return ($this->salario / 10 + $this->salario);
        }
        
    }
    
    $funcionario1 = new Empregado( "Maria", "Borim", 1500.00);
    
    echo "<p>Nome: {$funcionario1->nome}<p>";
    
    echo "<p>Sobrenome: {$funcionario1->sobrenome}<p>";
    
    echo "<p>Salário mensal: {$funcionario1->salario}<p>";
    
    echo "<p>Salário anual: {$funcionario1->getEmpregadosAmount()}<p>";
    
    echo "<p>Aumento do salário: {$funcionario1->getAumentoAmount()}<p>";
    
?>