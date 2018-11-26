"use strict";
exports.__esModule = true;
var zoologico = /** @class */ (function () {
    function zoologico(end, list) {
        this.endereco = end;
        this.listaDeAnimais = list;
    }
    zoologico.prototype.mostrarEndereco = function () {
        return this.endereco;
    };
    zoologico.prototype.mostrarLista = function () {
        return this.listaDeAnimais;
    };
    return zoologico;
}());
exports["default"] = zoologico;
