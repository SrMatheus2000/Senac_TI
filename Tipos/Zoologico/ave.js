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
var vertebrado_1 = require("./vertebrado");
var aves = /** @class */ (function (_super) {
    __extends(aves, _super);
    function aves(nome, dentes, olhos, vertebras, voa) {
        var _this = _super.call(this, nome, dentes, olhos, vertebras) || this;
        _this.voa = voa;
        return _this;
    }
    aves.prototype.voar = function () {
        if (this.voa == true) {
            console.log("Ave pode voar");
        }
        else {
            console.log("Ave nao pode voar");
        }
    };
    return aves;
}(vertebrado_1["default"]));
exports["default"] = aves;
