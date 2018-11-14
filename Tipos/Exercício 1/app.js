"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
const arma_1 = __importDefault(require("./arma"));
// import metralhadora from "./metralhadora";
// let kaddet = new carro(100, 10)
// kaddet.acelerar(100)
// let m16 = new metralhadora(50, 50, 51);
// let pistola = new arma(10, 10)
// pistola.atirar(2)
// m16.atirar();
let pistola = new arma_1.default(10, 10);
pistola.atirar();
let metralhadora = new arma_1.default(100, 100, 10);
metralhadora.atirar(10);
