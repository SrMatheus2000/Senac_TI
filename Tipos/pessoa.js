"use strict";
exports.__esModule = true;
var pessoa = /** @class */ (function () {
    function pessoa(nome, sobrenome, carro, arma) {
        this.nome = nome;
        this.sobrenome = sobrenome;
        this.carro = carro;
        this.arma = arma;
    }
    pessoa.prototype.dizerNome = function () {
        console.log("Seu nome é: " + this.nome + " " + this.sobrenome);
    };
    pessoa.prototype.informarCarro = function () {
        // console.log("Seu carro é um: " + this.carro)
        return this.carro;
    };
    pessoa.prototype.informarArma = function () {
        // console.log("Sua arma é uma: " + this.arma)
        return this.arma;
    };
    return pessoa;
}());
exports["default"] = pessoa;
// let matheus = new pessoa("Matheus", "Wandscheer", "Kaddet", "Bazuca")
// matheus.dizerNome()
// console.log (matheus.informarArma())
// console.log (matheus.informarCarro())
