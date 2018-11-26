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
var invertebrado_1 = require("./invertebrado");
var poriferos = /** @class */ (function (_super) {
    __extends(poriferos, _super);
    function poriferos(nome, olhos, dentes, antenas, poros) {
        var _this = _super.call(this, nome, olhos, dentes, antenas) || this;
        _this.poros = poros;
        return _this;
    }
    return poriferos;
}(invertebrado_1["default"]));
exports["default"] = poriferos;
