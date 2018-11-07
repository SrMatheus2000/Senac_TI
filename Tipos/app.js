"use strict";
exports.__esModule = true;
var arma_1 = require("./arma");
var metralhadora_1 = require("./metralhadora");
// let kaddet = new carro(100, 10)
// kaddet.acelerar(100)
var m16 = new metralhadora_1["default"](50, 50, 51);
var pistola = new arma_1["default"](10, 10);
pistola.atirar(2);
// m16.atirar();
