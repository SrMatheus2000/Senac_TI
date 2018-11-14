"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
class zoologico {
    constructor(end, list) {
        this.endereco = end;
        this.listaDeAnimais = list;
    }
    mostrarEndereco() {
        return this.endereco;
    }
    mostrarLista() {
        return this.listaDeAnimais;
    }
}
exports.default = zoologico;
