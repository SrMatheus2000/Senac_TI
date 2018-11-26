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
var reptil = /** @class */ (function (_super) {
    __extends(reptil, _super);
    function reptil(nome, olhos, dentes, vertebras, aquatico) {
        var _this = _super.call(this, nome, olhos, dentes, vertebras) || this;
        _this.aquatico = aquatico;
        return _this;
    }
    return reptil;
}(vertebrado_1["default"]));
exports["default"] = reptil;
