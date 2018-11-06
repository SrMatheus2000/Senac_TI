var arma = /** @class */ (function () {
    function arma(projeteis, capacidade) {
        this.capacidade = capacidade;
        this.projeteisNoPente = projeteis;
    }
    arma.prototype.atirar = function () {
        if (this.projeteisNoPente == 0)
            console.log("Não ha balas, por favor recarregue");
        else {
            this.projeteisNoPente -= 1;
            console.log("BANG");
            console.log("Você ainda tem " + this.projeteisNoPente + " balas em seu pente!");
        }
    };
    arma.prototype.recarregar = function () {
        this.projeteisNoPente = this.capacidade;
    };
    arma.prototype.informarBalas = function () {
        return this.projeteisNoPente;
    };
    return arma;
}());
var pistola = new arma(10, 10);
pistola.atirar();
