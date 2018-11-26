"use strict";
exports.__esModule = true;
var animal_1 = require("./animal");
var zoologico_1 = require("./zoologico");
var animais = [];
// let animais = []
// let animais = new Array
var toto = new animal_1["default"]("toto", 50, 2);
var aranha = new animal_1["default"]("aranha", 0, 4);
var peixe = new animal_1["default"]("peixe", 20, 2);
var zebra = new animal_1["default"]("zebra", 30, 2);
var gato = new animal_1["default"]("gato", 40, 2);
animais.push(toto);
animais.push(aranha);
animais.push(peixe);
animais.push(zebra);
animais.push(gato);
var prisao = new zoologico_1["default"]("lugar nenhum", animais);
console.log(prisao.mostrarLista());
