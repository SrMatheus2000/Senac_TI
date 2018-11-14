"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
class arma {
    constructor(projeteis, capacidade, tirosPorSegundo = 1) {
        this.capacidade = capacidade;
        this.projeteisNoPente = projeteis;
        this.tirosPorSegundo = tirosPorSegundo;
    }
    atirar(disparos = 1) {
        for (let i = 0; i < disparos; i++) {
            if (this.projeteisNoPente == 0)
                console.log("Não ha balas, por favor recarregue");
            else {
                this.projeteisNoPente -= this.tirosPorSegundo;
                console.log("BANG");
            }
        }
        console.log("Você tem " + this.projeteisNoPente + " balas em seu pente!");
    }
    recarregar() {
        this.projeteisNoPente = this.capacidade;
    }
    informarBalas() {
        return this.projeteisNoPente;
    }
}
exports.default = arma;
