"use strict";
exports.__esModule = true;
var arma_1 = require("./arma");
// import metralhadora from "./metralhadora";
// let kaddet = new carro(100, 10)
// kaddet.acelerar(100)
// let m16 = new metralhadora(50, 50, 51);
// let pistola = new arma(10, 10)
// pistola.atirar(2)
// m16.atirar();
var pistola = new arma_1["default"](10, 10);
pistola.atirar();
var metralhadora = new arma_1["default"](100, 100, 10);
metralhadora.atirar(10);
