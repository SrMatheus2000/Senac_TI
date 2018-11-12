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
var usuario = /** @class */ (function (_super) {
    __extends(usuario, _super);
    function usuario(login, senha_usuario) {
        var _this = _super.call(this, login) || this;
        _this.senha_usuario = senha_usuario;
        return _this;
    }
    /**
     * abrir_reclamacao
     */
    usuario.prototype.abrir_reclamacao = function (reclamacao) {
        console.log("Sua reclamação foi enviada. Sua opinião é muito importante para nós!");
    };
    return usuario;
}(pessoa_1["default"]));
exports["default"] = usuario;
