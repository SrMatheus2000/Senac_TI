"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
const pessoa_1 = __importDefault(require("./pessoa"));
class operador extends pessoa_1.default {
    constructor(login, senha_operador) {
        super(login);
        this.senha_operador = senha_operador;
    }
    /**
     * agendar_consulta
     */
    agendar_consulta(nome_paciente, nome_medico, data_consulta, cod_consulta) {
        this.consultas[cod_consulta] = [nome_paciente, nome_medico, data_consulta];
    }
    /**
     * desmarcar_consulta
     */
    desmarcar_consulta(cod_consulta) {
        this.consultas[cod_consulta] = 0;
    }
}
exports.default = operador;
