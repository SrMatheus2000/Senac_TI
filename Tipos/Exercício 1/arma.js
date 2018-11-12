"use strict";
exports.__esModule = true;
var arma = /** @class */ (function () {
    function arma(projeteis, capacidade, tirosPorSegundo) {
        if (tirosPorSegundo === void 0) { tirosPorSegundo = 1; }
        this.capacidade = capacidade;
        this.projeteisNoPente = projeteis;
        this.tirosPorSegundo = tirosPorSegundo;
    }
    arma.prototype.atirar = function (disparos) {
        if (disparos === void 0) { disparos = 1; }
        for (var i = 0; i < disparos; i++) {
            if (this.projeteisNoPente == 0)
                console.log("Não ha balas, por favor recarregue");
            else {
                this.projeteisNoPente -= this.tirosPorSegundo;
                console.log("BANG");
            }
        }
        console.log("Você ainda tem " + this.projeteisNoPente + " balas em seu pente!");
    };
    arma.prototype.recarregar = function () {
        this.projeteisNoPente = this.capacidade;
    };
    arma.prototype.informarBalas = function () {
        return this.projeteisNoPente;
    };
    return arma;
}());
exports["default"] = arma;
//fazer tudo num metodo so
// let pistola = new arma(10, 10)
// pistola.atirar()
