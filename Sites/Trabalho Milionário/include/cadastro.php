<script type="text/javascript">
	// document.getElementById("nome").onkeydown = function() {tNome()};
	// function tNome(){
	// 	 nometeste = document.getElementById("nome").value;
	// 	 len = nometeste.lenght;
	//
	// 	 if(nome != ""){
	// 		 $('nome').css({'border':'1px solid green'});
	// 		 $('nome').focus();
	//
	// 	 }
	// 	 else{
	// 		 $('nome').css({'border':'1px solid red'});
	// 		 $('nome').focus();
	// 		 return false;
	// 	 }
	// 	 // alert(nometeste);
	// 	//if (len > 15 || len < 3){
	// 		// alert("funciona");
	//
	// }
</script>

<div class="container" style="width: 80%;">
	<div class="row">
		<div class="col-md-2">
			<?php
                include("include/categorias.php");
            ?>
		</div>
		<div class="col-md-8">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12" style="
							height: auto;
							padding: 5px;">
						<form method="post" id="form" name="form" style="text-align: center;">
							<h1>Cadastro</h1>
							<br>
							<h4>Dados Pessoais</h4>
							<input
								type="text"
								name="nome"
								id="nome"
								placeholder="Nome*"
								maxlength="30"
								onkeyup="enviar1();" />
							<p id="idNome"> </p>
							<input
								type="text"
								name="sobrenome"
								id="sobrenome"
								placeholder="Sobrenome*"
								maxlength="30"
								onkeyup="enviar2();" />
							<p id="idSobre"> </p>
							<input
								type="text"
								name="cpf"
								id="cpf"
								placeholder="CPF*"
								maxlength="14"
								onkeydown="javascript: fMasc( this, mCPF );"
								onkeyup="enviar3();" />
							<p id="idCPF"> </p>
							<input
								type="text"
								name="rg"
								id="rg"
								placeholder="RG"
								maxlength="10"
								onkeyup="enviar4();" />
							<p id="idRG"> </p>
							<input
								type="text"
								name="nacionalidade"
								id="nacionalidade"
								placeholder="Nacionalidade"
								maxlength="30"
								onkeyup="enviar5();" />
							<p id="idNac"> </p>
							Data de Nascimento*
							<input
								type="date"
								name="nascimento"
								id="nascimento"
								placeholder="Data de Nascimento*"/>
							<p id="idNas"> </p>
							<select name="civil" id="civil">
								<option>Estado Civíl*</option>
								<option value="1">Solteiro (a)</option>
								<option value="2">Casado (a)</option>
								<option value="3">Viúvo (a)</option>
								<option value="4">Separado (a) judicialmente</option>
								<option value="5">Divorciado (a)</option>
							</select>
							<br><br>
							Sexo: *
							<input
								type="radio"
								name="input_sexo"
								id="input_sexo_1"
								value="1"/>Masculino
							<input
								type="radio"
								name="input_sexo"
								id="input_sexo_2"
								value="2"/>Feminino
							<input
								type="radio"
								name="input_sexo"
								id="input_sexo_3"
								value="3"/>Outro
							<br><br>
							<h4>Endereço*</h4>
							<input
								type="text"
								name="estado"
								id="estado"
								placeholder="Estado"
								maxlength="30"
								onkeyup="enviar6();" />
							<p id="idEst"> </p>
							<input
								type="text"
								name="rua"
								id="rua"
								placeholder="Rua"
								maxlength="50"
								onkeyup="enviar7();" />
							<p id="idRua"> </p>
							<input
								type="text"
								name="numero"
								id="numero"
								placeholder="Número"
								maxlength="5"
								onkeyup="enviar8();" />
							<p id="idNum"> </p>
							<input
								type="text"
								name="bairro"
								id="bairro"
								placeholder="Bairro"
								maxlength="50"
								onkeyup="enviar9();" />
							<p id="idBar"> </p>
							<input
								type="text"
								name="municipio"
								id="municipio"
								placeholder="Municipio"
								maxlength="50"
								onkeyup="enviar10();" />
							<p id="idMun"> </p>
							<input
								type="text"
								name="cep"
								id="cep"
								placeholder="Cep"
								maxlength="9"
								onkeydown="javascript: fMasc( this, mCEP );"
								onkeyup="enviar11();" />
							<p id="idCEP"> </p>
							<br>
							<h4>Contato</h4>
							<input
								type="text"
								name="telefone1"
								id="telefone1"
								placeholder="Telefone1*"
								maxlength="14"
								onkeydown="javascript: fMasc( this, mTel );"
								onkeyup="enviar12();" />
							<p id="idTel1"> </p>
							<input
								type="text"
								name="telefone2"
								id="telefone2"
								placeholder="Telefone2"
								maxlength="14"
								onkeydown="javascript: fMasc( this, mTel );"
								onkeyup="enviar13();" />
							<p id="idTel2"> </p>
							<input
								type="text"
								name="email"
								id="email"
								placeholder="E-mail*"
								maxlength="50"
								onkeyup="enviar14();" />
							<p id="idMai"> </p>
							<br>
							<input
								type="password"
								name="senha"
								id="senha"
								placeholder="Senha*"
								maxlength="25"
								onkeyup="enviar15();" />
							<p id="idSen"> </p>
							<input
								type="password"
								name="senha2"
								id="senha2"
								placeholder="Repita sua Senha*"
								maxlength="25"
								onkeyup="enviar16();" />
							<p id="idRepete"> </p>
							<br>
							<input
								type="submit"
								value="Cadastrar"
								name="cadastrar"
								id="cadastrar"
								class="btn"
								onclick="
									enviar1()
									enviar2()
									enviar3()
									enviar4()
									enviar5()
									enviar6()
									enviar7()
									enviar8()
									enviar9()
									enviar10()
									enviar11()
									enviar12()
									enviar13()
									enviar14()
									enviar15()
									enviar16()"/>
							<br>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<?php
                include("include/anuncios.php");
            ?>
		</div>
	</div>
</div>

<script type="text/javascript">
	let sucesso = 0;

	function fMasc(objeto, mascara) {
		obj = objeto
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

	function mCEP(cep) {
		cep = cep.replace(/\D/g, "")
		cep = cep.replace(/^(\d{5})(\d)/, "$1-$2")
		//cep=cep.replace(/\.(\d{3})(\d)/,".$1-$2")
		return cep
	}

	function mNum(num) {
		num = num.replace(/\D/g, "")
		return num
	}

	//AJAX

	function enviar1() {
		var nome = $("#nome").val();
		if (nome == "") {
			$("#nome").css("border", "solid fuchsia").focus();
			$("#idNome").html("Nome em branco!");
			return false;
		} else {
			$("#nome").css("border", "");
			$("#idNome").html("");
			return true;
		}
	}

	function enviar2() {
		var nome = $("#sobrenome").val();
		if (nome == "") {
			$("#sobrenome").css("border", "solid fuchsia").focus();
			$("#teste1").html("Sobrenome em branco!");
			return false;
		} else {
			$("#sobrenome").css("border", "");
			$("#idSobre").html("");
			return true;
		}
	}

	function enviar3() {
		var nome = $("#cpf").val();
		if (nome == "") {
			$("#cpf").css("border", "solid fuchsia").focus();
			$("#idCPF").html("CPF em branco!");
			return false;
		} else {
			$("#cpf").css("border", "");
			$("#idCPF").html("");
			return true;
		}
	}

	function enviar4() {
		var nome = $("#rg").val();
		if (nome == "") {
			$("#rg").css("border", "solid fuchsia").focus();
			$("#idRG").html("RG em branco!");
			return false;
		} else {
			$("#rg").css("border", "");
			$("#idRG").html("");
			return true;
		}
	}

	function enviar5() {
		var nome = $("#nacionalidade").val();
		if (nome == "") {
			$("#nacionalidade").css("border", "solid fuchsia").focus();
			$("#idNas").html("Nacionalidade em branco!");
			return false;
		} else {
			$("#nacionalidade").css("border", "");
			$("#idNas").html("");
			return true;
		}
	}

	function enviar6() {
		var nome = $("#estado").val();
		if (nome == "") {
			$("#estado").css("border", "solid fuchsia").focus();
			$("#idEst").html("Estado em branco!");
			return false;
		} else {
			$("#estado").css("border", "");
			$("#idEst").html("");
			return true;
		}
	}

	function enviar7() {
		var nome = $("#rua").val();
		if (nome == "") {
			$("#rua").css("border", "solid fuchsia").focus();
			$("#idRua").html("Rua em branco!");
			return false;
		} else {
			$("#rua").css("border", "");
			$("#idRua").html("");
			return true;
		}
	}

	function enviar8() {
		var nome = $("#numero").val();
		if (nome == "") {
			$("#numero").css("border", "solid fuchsia").focus();
			$("#idNum").html("Número em branco!");
			return false;
		} else {
			$("#numero").css("border", "");
			$("#idNum").html("");
			return true;
		}
	}

	function enviar9() {
		var nome = $("#bairro").val();
		if (nome == "") {
			$("#bairro").css("border", "solid fuchsia").focus();
			$("#idBar").html("Bairro em branco!");
			return false;
		} else {
			$("#bairro").css("border", "");
			$("#idBar").html("");
			return true;
		}
	}

	function enviar10() {
		var nome = $("#municipio").val();
		if (nome == "") {
			$("#municipio").css("border", "solid fuchsia").focus();
			$("#idMun").html("Município em branco!");
			return false;
		} else {
			$("#municipio").css("border", "");
			$("#idMun").html("");
			return true;
		}
	}

	function enviar11() {
		var nome = $("#cep").val();
		if (nome == "") {
			$("#cep").css("border", "solid fuchsia").focus();
			$("#idCEP").html("CEP em branco!");
			return false;
		} else {
			$("#cep").css("border", "");
			$("#idCEP").html("");
			return true;
		}
	}

	function enviar12() {
		var nome = $("#telefone1").val();
		if (nome == "") {
			$("#telefone1").css("border", "solid fuchsia").focus();
			$("#idTel1").html("Telefone 1 em branco!");
			return false;
		} else {
			$("#telefone1").css("border", "");
			$("#idTel1").html("");
			return true;
		}
	}

	function enviar13() {
		var nome = $("#telefone2").val();
		if (nome == "") {
			$("#telefone2").css("border", "solid fuchsia").focus();
			$("#idTel2").html("Telefone 2 em branco!");
			return false;
		} else {
			$("#telefone2").css("border", "");
			$("#idTel2").html("");
			return true;
		}
	}

	function enviar14() {
		var nome = $("#email").val();
		if (nome == "") {
			$("#email").css("border", "solid fuchsia").focus();
			$("#idMai").html("E-Mail em branco!");
			return false;
		} else {
			$("#email").css("border", "");
			$("#idMai").html("");
			return true;
		}
	}

	function enviar15() {
		var nome = $("#senha").val();
		if (nome == "") {
			$("#senha").css("border", "solid fuchsia").focus();
			$("#idSen").html("Senha em branco!");
			return false;
		} else {
			$("#senha").css("border", "");
			$("#idSen").html("");
			return true;
		}
	}

	function enviar16() {
		var nome = $("#senha").val();
		var senha = $("#senha2").val();
		if (senha == "") {
			$("#senha2").css("border", "solid fuchsia").focus();
			$("#idRepete").html("Confirmação de Senha em branco!");
			return false;
		} else {
			if (nome == senha) {
				$("#senha2").css("border", "");
				$("#idRepete").html("");
				return true;
			} else {
				$("#senha2").css("border", "solid fuchsia").focus();
				$("#idRepete").html("Senhas diferentes!");
				return false;
			}
		}
	}
</script>
