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
var operador = /** @class */ (function (_super) {
    __extends(operador, _super);
    function operador(login, senha_operador) {
        var _this = _super.call(this, login) || this;
        _this.senha_operador = senha_operador;
        return _this;
    }
    /**
     * agendar_consulta
     */
    operador.prototype.agendar_consulta = function (nome_paciente, nome_medico, data_consulta, cod_consulta) {
        this.consultas[cod_consulta] = [nome_paciente, nome_medico, data_consulta];
    };
    /**
     * desmarcar_consulta
     */
    operador.prototype.desmarcar_consulta = function (cod_consulta) {
        this.consultas[cod_consulta] = 0;
    };
    return operador;
}(pessoa_1["default"]));
exports["default"] = operador;
