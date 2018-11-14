"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
const pessoa_1 = __importDefault(require("./pessoa"));
class medico extends pessoa_1.default {
    constructor(login, senha) {
        super(login);
        this.logado = false;
        this.senha = senha;
    }
    /**
     * login
     */
    logar(login, senha) {
        let logado = true;
        console.log("Bem Vindo médico " + login);
    }
    /**
     * consultar_agenda
     */
    consultar_agenda() {
    }
    /**
     * receitar
     */
    receitar() {
    }
}
exports.default = medico;
