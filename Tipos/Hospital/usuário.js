"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
const pessoa_1 = __importDefault(require("./pessoa"));
class usuario extends pessoa_1.default {
    constructor(login, senha_usuario) {
        super(login);
        this.senha_usuario = senha_usuario;
    }
    /**
     * abrir_reclamacao
     */
    abrir_reclamacao(reclamacao) {
        console.log("Sua reclamação foi enviada. Sua opinião é muito importante para nós!");
    }
}
exports.default = usuario;
