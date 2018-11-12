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
var pessoa_1 = require("./pessoa");
var medico = /** @class */ (function (_super) {
    __extends(medico, _super);
    function medico(login, senha) {
        return _super.call(this, login) || this;
    }
    /**
     * consultar_agenda
     */
    medico.prototype.consultar_agenda = function () {
    };
    /**
     * receitar
     */
    medico.prototype.receitar = function () {
    };
    return medico;
}(pessoa_1["default"]));
exports["default"] = medico;
