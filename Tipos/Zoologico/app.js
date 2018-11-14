"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
const animal_1 = __importDefault(require("./animal"));
const zoologico_1 = __importDefault(require("./zoologico"));
let animais = [];
// let animais = []
// let animais = new Array
let toto = new animal_1.default("toto", 50, 2);
let aranha = new animal_1.default("aranha", 0, 4);
let peixe = new animal_1.default("peixe", 20, 2);
let zebra = new animal_1.default("zebra", 30, 2);
let gato = new animal_1.default("gato", 40, 2);
animais.push(toto);
animais.push(aranha);
animais.push(peixe);
animais.push(zebra);
animais.push(gato);
let prisao = new zoologico_1.default("lugar nenhum", animais);
console.log(prisao.mostrarLista());
