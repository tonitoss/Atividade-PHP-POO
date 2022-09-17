<?php
/*
Exercício 01: Crie uma classe chamada Invoice que possa ser utilizado por uma loja de suprimentos de informática para 
representar uma fatura de um item vendido na loja. Uma fatura deve incluir as seguintes informações como atributos

número do item faturado,
descrição do item
quantidade comprada do item
preço unitário do item
Sua classe deve ter um construtor que inicialize os quatro atributos. Se a quantidade não for positiva, ela deve ser 
configurada como 0. Se o preço por item não for positivo ele deve ser configurado como 0.0. Forneça um método set e um 
método get para cada variável de instância. Além disso, forneça um método chamado getInvoiceAmount que calcula o valor da 
fatura (isso é, multiplica a quantidade pelo preço por item) e depois retorna o valor.
*/

class Invoice{
    private $numero;
    private $descricao;
    private $quantidade;
    private $precounit;

    public function __construct($par1, $par2, $par3, $par4){
        $this->numero = $par1;
        $this->descricao = $par2;
        if($par3 <= 0){
            $this->quantidade = 0;
        }
        else{
            $this->quantidade = $par3;
        }

        if($par4 <= 0){
            $this->precounit = 0.0; 
        }
        else{
            $this->precounit = $par4;
        }
        $this->quantidade = $par3;
        $this->precounit = $par4;
    }
    
    public function __set($atributo, $value){
        $this->$atributo = $value;
    }
    
    public function __get($atributo){
        return $this->$atributo;
    }

    public function getInvoiceAmount() {
        return ($this->precounit * $this->quantidade);
    }
}

$cd = new invoice( 13, "Melodrama", 200, 39.99);

echo "<p>Número de Fatura: {$cd->numero}<p>";

echo "<p>Descrição do Item: {$cd->descricao}<p>";

echo "<p>Quantidade: {$cd->quantidade}<p>";

echo "<p>Preço unitário: {$cd->precounit}<p>";

echo "<p>Preço total : {$cd->getInvoiceAmount()}<p>";

?>