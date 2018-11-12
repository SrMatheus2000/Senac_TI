"use strict";
exports.__esModule = true;
var pessoa = /** @class */ (function () {
    function pessoa(login) {
        this.login = login;
    }
    /**
     * login
     */
    pessoa.prototype.logar = function (login) {
        console.log("Bem Vindo" + login);
    };
    /**
     * consultar_exame
     */
    pessoa.prototype.consultar_exame = function () {
    };
    /**
     * deslogar
     */
    pessoa.prototype.deslogar = function () {
        console.log("Você deslogou!");
    };
    return pessoa;
}());
exports["default"] = pessoa;
