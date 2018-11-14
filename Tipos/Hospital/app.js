"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
const m_dico_1 = __importDefault(require("./m\u00E9dico"));
let cirurgiao = new m_dico_1.default("cir", "123");
cirurgiao.logar("Matheus", "123");
cirurgiao.deslogar();
cirurgiao.logado = true;
