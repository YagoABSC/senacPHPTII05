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

// const conta1 = new Conta(1001, 50);
// const conta2 = new Conta(1002);

// conta1.sacar(30);
// conta2.depositar(50); 
/*Se o usuário digitar uma string a culpa é do front*/
// conta2.sacar(80);

// console.log(conta1.toString());
// console.log(conta2.toString());
