"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
class carro {
    constructor(vMaxima, aceleracao) {
        this.velocidadeMaxima = vMaxima;
        this.aceleracao = aceleracao;
        this.velocidadeAtual = 0;
    }
    acelerar(vAceleracao) {
        while (this.velocidadeAtual < vAceleracao && this.velocidadeAtual < this.velocidadeMaxima) {
            this.velocidadeAtual += this.aceleracao;
            if (this.velocidadeAtual >= this.velocidadeMaxima)
                this.velocidadeAtual = this.velocidadeMaxima;
            else if (this.velocidadeAtual >= vAceleracao)
                this.velocidadeAtual = vAceleracao;
            console.log("A velocidade atual é de: " + this.velocidadeAtual + " Km/hora");
        }
        if (this.velocidadeAtual == this.velocidadeMaxima)
            console.log("Você chegou na velocidade máxima de: " + this.velocidadeMaxima + " Km/hora");
        else
            console.log("Você chegou na velocidade desejada de: " + vAceleracao + " Km/hora");
    }
    freiar(vParada) {
        if (vParada >= this.velocidadeAtual)
            console.log("Você não pode reduzir para uma velocidade mais alta!");
        else {
            while (this.velocidadeAtual > 0 && this.velocidadeAtual > vParada) {
                this.velocidadeAtual -= this.velocidadeMaxima / 5;
                if (this.velocidadeAtual <= 0)
                    this.velocidadeAtual = 0;
                else if (this.velocidadeAtual <= vParada)
                    this.velocidadeAtual = vParada;
                console.log("A velocidade atual é de: " + this.velocidadeAtual + " Km/hora");
            }
            if (this.velocidadeAtual == 0)
                console.log("Você Parou!");
            else
                console.log("Você reduziu até a velocidade desejada de " + vParada + " Km/hora");
        }
    }
    informarVelocidade() {
        return this.velocidadeAtual;
    }
}
exports.default = carro;
// let carro1 = new carro(100, 10)
// carro1.acelerar(50);
// carro1.freiar(25);
