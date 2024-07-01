<?php

/*
Defina uma classe veiculo com as seguintes propriedades:
- marca
- modelo
- ano
- ligado (indicando se o veíuclo está ligado ou desligado)

2 - Implemente um método construtor que inicialize marca, modelo e ano.
Por padrão, o veículo é instanciado desligado.
Implemente o método ligar(esse método deve alterar a propriedade "ligado", se o veículo estiver desligado)
Implemente o método desligar(deve desligar se o veículo estiver ligado)
Implemnete o método exibirDados(esse método deve exibir as informações "marca, modelo, ano e ligado")

*/

class Veiculo {
    public $marca;
    public $modelo;
    public $ano;
    public $ligado;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->ligado = false;
    }

    public function ligar() {
        if (!$this->ligado) {
            $this->ligado = true;
            // echo "O carro está ligado<br>";
        }else {
            echo "O carro já está ligado<br>";
        }
    }

    public function desligar() {
        if ($this->ligado) {
            $this->ligado = false;
            // echo "O carro está desligado<br>";
        }
    }

    public function exibirDados() {
        echo "Marca: ". $this->marca. "<br>";
        echo "Modelo: ". $this->modelo. "<br>";
        echo "Ano: ". $this->ano. "<br>";
        echo $this->ligado ? "Estado: Ligado <hr>" : "Estado: Desligado <hr>";
    }
}

$carro1 = new Veiculo("Ford", "Fiesta", 2018);

$carro1->ligar();

$carro1->exibirDados();

$carro1->desligar();

$carro1->exibirDados();

?>