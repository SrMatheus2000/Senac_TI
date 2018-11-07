"use strict";
var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    }
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
exports.__esModule = true;
var arma_1 = require("./arma");
var metralhadora = /** @class */ (function (_super) {
    __extends(metralhadora, _super);
    function metralhadora() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    metralhadora.prototype.rajada = function () {
        //    for (let i = 0; i < 3; i++) {
        //        this.atirar()
        //    }
        if (this.projeteisNoPente == 0)
            console.log("Não ha balas, por favor recarregue");
        else {
            for (var i = 0; i < 3; i++) {
                this.projeteisNoPente -= 1;
                console.log("BANG");
            }
            console.log("Você ainda tem " + this.projeteisNoPente + " balas em seu pente!");
        }
    };
    return metralhadora;
}(arma_1["default"]));
exports.metralhadora = metralhadora;
