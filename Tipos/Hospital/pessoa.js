"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
class pessoa {
    constructor(login) {
        this.login = login;
    }
    /**
     * login
     */
    logar(login, senha = "") {
        console.log("Bem Vindo " + login);
    }
    /**
     * consultar_exame
     */
    consultar_exame() {
        console.log("Exame Consultado");
    }
    /**
     * deslogar
     */
    deslogar() {
        // if (logado == true) 
        console.log("Você deslogou!");
    }
}
exports.default = pessoa;
