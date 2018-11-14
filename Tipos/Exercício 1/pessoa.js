"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
class pessoa {
    constructor(nome, sobrenome, carro, arma) {
        this.nome = nome;
        this.sobrenome = sobrenome;
        this.carro = carro;
        this.arma = arma;
    }
    dizerNome() {
        console.log("Seu nome é: " + this.nome + " " + this.sobrenome);
    }
    informarCarro() {
        // console.log("Seu carro é um: " + this.carro)
        return this.carro;
    }
    informarArma() {
        // console.log("Sua arma é uma: " + this.arma)
        return this.arma;
    }
}
exports.default = pessoa;
// let matheus = new pessoa("Matheus", "Wandscheer", "Kaddet", "Bazuca")
// matheus.dizerNome()
// console.log (matheus.informarArma())
// console.log (matheus.informarCarro())
