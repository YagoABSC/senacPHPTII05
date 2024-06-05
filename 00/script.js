// console.log("Olá, mundo")

class Conta{
    constructor (numero, saldo = 0){
        this.numero = numero;
        this.saldo = saldo;
    }

    sacar(valor){
        if (this.saldo >= valor && valor > 0) {
            this.saldo -= valor;  
        }else{
            console.log("Saldo insuficiente.")
        }
        
    }

    depositar(valor){
        if (valor > 0) {
            this.saldo += valor;    
        } else{
            console.log("Valor incorreto")
        }
        
    }

    toString(){
        return `Numero: ${this.numero} - Saldo: ${this.saldo}`;
    }
}

class ContaCorrente extends Conta{
    constructor(numero, saldo = 0, limiteChequeEspecial = 200){
        super(numero, saldo);
        this.limiteChequeEspecial = limiteChequeEspecial
    }

    sacar(valor){
        const valorDisponivelSaque = this.saldo + this.limiteChequeEspecial;

        if (valor > 0 && valorDisponivelSaque >= valor) {
            this.saldo -= valor;
        }else{
            console.log("Saldo insuficiente.");
        }
    }
}

class ContaPoupanca extends Conta{
    constructor(numero, saldo = 0, taxaRendimento = 0.2){
        super(numero, saldo);
        this.taxaRendimento = taxaRendimento
    }

    aplicarRendimento(valor){
        console.log("Rendimento aplicado");
        const aplicarRendi = this.saldo * this.taxaRendimento;

        if (valor > 0 && valor >= this.saldo) {
            
        }
    }
}

let contaC = new ContaCorrente(2001, 500);

contaC.sacar(700);
console.log(contaC.toString());

let contaP = new ContaPoupanca(2002,500);
contaP.aplicarRendimento();
// contaC.aplicarRendimento(); erro por não existir função nessa classe

// const conta1 = new Conta(1001, 50);
// const conta2 = new Conta(1002);

// conta1.sacar(30);
// conta2.depositar(50); 
/*Se o usuário digitar uma string a culpa é do front*/
// conta2.sacar(80);

// console.log(conta1.toString());
// console.log(conta2.toString());
