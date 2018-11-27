function function_nome_aula() {
    let nome = $("#nome_aula").val();
    if (nome == "") {
        $("#nome_aula").css("border", "solid fuchsia").focus();
        $("#idNome").html("Nome em branco!");
        return false;
    } else {
        $("#nome_aula").css("border", "");
        $("#idNome").html("");
        return true;
    }
}

function function_descricao_aula() {
    let descricao = $("#descricao_aula").val();
    if (descricao == "") {
        $("#descricao_aula").css("border", "solid fuchsia").focus();
        $("#idDescricao").html("Descrição em branco!");
        return false;
    } else {
        $("#descricao_aula").css("border", "");
        $("#idDescricao").html("");
        return true;
    }
}

function function_data_aula() {
    let data = $("#data_aula").val();
    if (data == "") {
        $("#data_aula").css("border", "solid fuchsia").focus();
        $("#idData").html("Data em branco!");
        return false;
    } else {
        $("#data_aula").css("border", "");
        $("#idData").html("");
        return true;
    }
}

function function_hora_aula() {
    let hora = $("#hora_aula").val();
    if (hora == "") {
        $("#hora_aula").css("border", "solid fuchsia").focus();
        $("#idHora").html("Hora em branco!");
        return false;
    } else {
        $("#hora_aula").css("border", "");
        $("#idHora").html("");
        return true;
    }
}

function checa_aula() {
    let nome_arquivo = $("#arquivo_aula").val();
    let extencao = nome_arquivo.substr((nome_arquivo.lastIndexOf('.') + 1));
    let nome = $("#nome_aula").val();
    let descricao = $("#descricao_aula").val();
    let data = $("#data_aula").val();
    let hora = $("#hora_aula").val();
    if (
        (nome == "" || descricao == "" || data == "" || hora == "") || 
        (nome_arquivo != "" && (extencao != "zip" && extencao != "pdf"))
    ) {
        if (nome == "") {
            $("#nome_aula").css("border", "solid fuchsia").focus();
            $("#idNome").html("Nome em branco!");
        } else {
            $("#nome_aula").css("border", "");
            $("#idNome").html("");
        }
        if (descricao == "") {
            $("#descricao_aula").css("border", "solid fuchsia").focus();
            $("#idDescricao").html("Descrição em branco!");
        } else {
            $("#descricao_aula").css("border", "");
            $("#idDescricao").html("");
        }
        if (data == "") {
            $("#data_aula").css("border", "solid fuchsia").focus();
            $("#idData").html("Data em branco!");
        } else {
            $("#data_aula").css("border", "");
            $("#idData").html("");
        }
        if (hora == "") {
            $("#hora_aula").css("border", "solid fuchsia").focus();
            $("#idHora").html("Hora em branco!");
        } else {
            $("#hora_aula").css("border", "");
            $("#idHora").html("");
        }
        if (nome_arquivo != "" && (extencao != "zip" && extencao != "pdf")) {
            $("#arquivo_aula").css("border", "solid fuchsia").focus();
            $("#idArquivo").html("O arquivo deve estar no formato zip ou pdf!" + extencao);
        } else {
            $("#arquivo_aula").css("border", "");
            $("#idArquivo").html("");
        }
        return false;
    } else {
        return true;
    }
}

function checa_cadastro() {
    let nome     = $("#nome").val();
    let cpf      = $("#cpf").val();
    let telefone = $("#telefone").val();
    let email    = $("#email").val();
    let senha    = $("#senha").val();
    let senha2   = $("#senha2").val();
    if (
        nome     == "" ||
        cpf      == "" ||
        telefone == "" ||
        email    == "" ||
        senha    != senha2
    ) {
        if (nome == "") {
            $("#nome").css("border", "solid fuchsia").focus();
            $("#idNome").html("Nome em branco!");
        } else {
            $("#nome").css("border", "");
            $("#idNome").html("");
        }
        if (cpf == "") {
            $("#cpf").css("border", "solid fuchsia").focus();
            $("#idCPF").html("CPF em branco!");
        } else {
            $("#cpf").css("border", "");
            $("#idCPF").html("");
        }
        if (telefone == "") {
            $("#telefone").css("border", "solid fuchsia").focus();
            $("#idTelefone").html("Telefone em branco!");
        } else {
            $("#telefone").css("border", "");
            $("#idTelefone").html("");
        }
        if (email == "") {
            $("#email").css("border", "solid fuchsia").focus();
            $("#idEmail").html("Email em branco!");
        } else {
            $("#email").css("border", "");
            $("#idEmail").html("");
        }
        if (senha == "") {
            $("#senha").css("border", "solid fuchsia").focus();
            $("#idSenha").html("Senha em branco!");
        } else {
            $("#senha").css("border", "");
            $("#idSenha").html("");
        }
        if (senha2 == "") {
            $("#senha2").css("border", "solid fuchsia").focus();
            $("#idSenha2").html("Confirmação de Senha em branco!");
        } else {
            if (senha == senha2) {
                $("#senha2").css("border", "");
                $("#idSenha2").html("");
            } else {
                $("#senha2").css("border", "solid fuchsia").focus();
                $("#idSenha2").html("Senhas diferentes!");
            }
        }
        return false;
    } else {
        $("#nome").css("border", "");
        $("#idNome").html("");
        $("#cpf").css("border", "");
        $("#idCPF").html("");
        $("#telefone").css("border", "");
        $("#idTelefone").html("");
        $("#email").css("border", "");
        $("#idEmail").html("");
        $("#senha").css("border", "");
        $("#idSenha").html("");
        $("#senha2").css("border", "");
        $("#idSenha2").html("");
        return true;
    }
}

function fMasc(objeto, mascara) {
    obj  = objeto
    masc = mascara
    setTimeout("fMascEx()", 1)
}

function fMascEx() {
    obj.value = masc(obj.value)
}

function mTel(tel) {
    tel = tel.replace(/\D/g, "")
    tel = tel.replace(/^(\d)/, "($1")
    tel = tel.replace(/(.{3})(\d)/, "$1)$2")
    if (tel.length == 9) {
        tel = tel.replace(/(.{1})$/, "-$1")
    } else if (tel.length == 10) {
        tel = tel.replace(/(.{2})$/, "-$1")
    } else if (tel.length == 11) {
        tel = tel.replace(/(.{3})$/, "-$1")
    } else if (tel.length == 12) {
        tel = tel.replace(/(.{4})$/, "-$1")
    } else if (tel.length > 12) {
        tel = tel.replace(/(.{4})$/, "-$1")
    }
    return tel;
}

function mCNPJ(cnpj) {
    cnpj = cnpj.replace(/\D/g, "")
    cnpj = cnpj.replace(/^(\d{2})(\d)/, "$1.$2")
    cnpj = cnpj.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3")
    cnpj = cnpj.replace(/\.(\d{3})(\d)/, ".$1/$2")
    cnpj = cnpj.replace(/(\d{4})(\d)/, "$1-$2")
    return cnpj
}

function mCPF(cpf) {
    cpf = cpf.replace(/\D/g, "")
    cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
    cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
    cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2")
    return cpf
}

$("#succ").hide();
$(".load").hide();
$(document).ready(() => {
    $("#send").click(() => {
        if (checa_cadastro()) {
            $.ajax({
                success: function (result) {
                    $(".load").show();
                    $("#succ").hide();
                    $("#form").hide();
                    $.post("include/ajax_2.php", {
                        nome: $("#nome").val(),
                        telefone: $("#telefone").val(),
                        cpf: $("#cpf").val(),
                        email: $("#email").val(),
                        senha: $("#senha").val()
                    }, (data) => {
                        $('#form')[0].reset();
                        $(".load").hide();
                        $("#form").show();
                        $("#succ").show();
                    });
                }
            });
        } else {
            return false;
        }
    });
    $('#btnlogin').click(() => {
        let email = $('#idemail').val();
        let senha = $('#idsenha').val();
        if (email != "") {
            $('#idemail').css('border', '');
            $('#idemail').focus();
        } else {
            $('#idemail').css('border', 'solid red 2px');
            $('#idemail').focus();
            return false;
        }
        if (senha != "") {
            $('#idsenha').css('border', 'solid green 2px');
            $('#idsenha').focus();
        } else {
            $('#idsenha').css('border', 'solid red 2px');
            $('#idsenha').focus();
            return false;
        }
    });
});

function iniciapopup(popupID) {
    const popup = document.getElementById(popupID);
    if (popup) {
        popup.classList.add('mostrar');
        popup.addEventListener('click', (e) => {
            if (e.target.id == popupID || e.target.className == 'cbtn-close') {
                popup.classList.remove('mostrar');
            }
        });
    }
}