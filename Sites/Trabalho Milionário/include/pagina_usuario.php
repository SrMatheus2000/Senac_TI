<?php
    if (isset($_POST["salvanome"])) {
        executasql(
          "UPDATE `cadastro_pessoa`
          SET nome = '".$_POST["editanome"]."'
          WHERE id = '".$_SESSION["id"]."'"
        );
    } elseif (isset($_POST["salvasobrenome"])) {
        executasql(
          "UPDATE `cadastro_pessoa`
          SET sobrenome = '".$_POST["editasobrenome"]."'
          WHERE id = '".$_SESSION["id"]."'"
        );
    } elseif (isset($_POST["salvaestado_civil"])) {
        executasql(
          "UPDATE `cadastro_pessoa`
          SET estado_civil = '".$_POST["editaestado_civil"]."'
          WHERE id = '".$_SESSION["id"]."'"
        );
    } elseif (isset($_POST["salvasexo"])) {
        executasql(
          "UPDATE `cadastro_pessoa`
          SET sexo = '".$_POST["editasexo"]."'
          WHERE id = '".$_SESSION["id"]."'"
        );
    } elseif (isset($_POST["salvaestado"])) {
        executasql(
          "UPDATE `cadastro_pessoa`
          SET estado = '".$_POST["editaestado"]."'
          WHERE id = '".$_SESSION["id"]."'"
        );
    } elseif (isset($_POST["salvarua"])) {
        executasql(
          "UPDATE `cadastro_pessoa`
          SET rua = '".$_POST["editarua"]."'
          WHERE id = '".$_SESSION["id"]."'"
        );
    } elseif (isset($_POST["salvanumero"])) {
        executasql(
          "UPDATE `cadastro_pessoa`
          SET numero = '".$_POST["editanumero"]."'
          WHERE id = '".$_SESSION["id"]."'"
        );
    } elseif (isset($_POST["salvabairro"])) {
        executasql(
          "UPDATE `cadastro_pessoa`
          SET bairro = '".$_POST["editabairro"]."'
          WHERE id = '".$_SESSION["id"]."'"
        );
    } elseif (isset($_POST["salvamunicipio"])) {
        executasql(
          "UPDATE `cadastro_pessoa`
          SET municipio = '".$_POST["editamunicipio"]."'
          WHERE id = '".$_SESSION["id"]."'"
        );
    } elseif (isset($_POST["salvaCEP"])) {
        executasql(
          "UPDATE `cadastro_pessoa`
          SET CEP = '".$_POST["editaCEP"]."'
          WHERE id = '".$_SESSION["id"]."'"
        );
    } elseif (isset($_POST["salvatelefone1"])) {
        executasql(
          "UPDATE `cadastro_pessoa`
          SET telefone1 = '".$_POST["editatelefone1"]."'
          WHERE id = '".$_SESSION["id"]."'"
        );
    } elseif (isset($_POST["salvatelefone2"])) {
        executasql(
          "UPDATE `cadastro_pessoa`
          SET telefone2 = '".$_POST["editatelefone2"]."'
          WHERE id = '".$_SESSION["id"]."'"
        );
    } elseif (isset($_POST["salvaemail"])) {
        if(preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $_POST["editaemail"])) {
            executasql(
              "UPDATE `cadastro_pessoa`
              SET email = '".$_POST["editaemail"]."'
              WHERE id = '".$_SESSION["id"]."'"
            );
        }else{
            ?>
            <script>
                alert("Erro: E-Mail Inválido!");
            </script>
            <?php
        }
    } elseif (isset($_POST["salvasenha"])) {
        if ($_POST["editasenha"] == "" || $_POST["editasenha2"] == "") {
            ?>
            <script>
                alert("Erro: As Senhas não podem estar vazias!");
            </script>
            <?php
        }
        elseif ($_POST["editasenha"] == $_POST["editasenha2"]) {
            executasql(
              "UPDATE `cadastro_pessoa`
              SET senha = '".$_POST["editasenha"]."'
              WHERE id = '".$_SESSION["id"]."'"
            );
        } else {
            ?>
            <script>
                alert("Erro: As Senhas devem ser iguais!");
            </script>
            <?php
        }
    }
?>

<?php
  $dados = selecionaumdado (
    "SELECT *
    FROM `cadastro_pessoa`
    WHERE id =" . $_SESSION["id"]
  );

?>

<center>
<div style="width: 80%;">
<!-- table-dark -->
  <table
    class="
      table
      table-striped
      table-hover
      table-bordered"
    style="text-align: center;">
    <thead>
      <tr>
        <th></th>
        <th>Dados</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody>
      <form method="post">

        <?php if (isset($_POST["nome"])) { ?>
          <tr>
            <td>Nome</td>
            <td>
              <input
                type="text"
                name="editanome"
                value="<?php echo($dados["nome"]);?>"
                maxlength="30"/>
            </td>
            <td>
              <input
                class="btn"
                type="submit"
                name="salvanome"
                value="Salvar">
              <input
                class="btn"
                type="submit"
                value="Cancelar">
            </td>
          </tr>
        <?php } else { ?>
          <tr>
            <td>Nome</td>
            <td><?php echo($dados["nome"]);?></td>
            <td>
              <input
                class="btn"
                type="submit"
                name="nome"
                value="Editar">
            </td>
          </tr>
        <?php } ?>

        <?php if (isset($_POST["sobrenome"])) { ?>
          <tr>
            <td>Sobrenome</td>
            <td>
              <input
                type="text"
                name="editasobrenome"
                value="<?php echo($dados["sobrenome"]);?>"
                maxlength="30"/>
            </td>
            <td>
              <input
                class="btn"
                type="submit"
                name="salvasobrenome"
                value="Salvar">
              <input
                class="btn"
                type="submit"
                value="Cancelar">
            </td>
          </tr>
        <?php } else { ?>
          <tr>
            <td>Sobrenome</td>
            <td><?php echo($dados["sobrenome"]);?></td>
            <td>
              <input
                class="btn"
                type="submit"
                name="sobrenome"
                value="Editar">
            </td>
          </tr>
        <?php } ?>

        <tr>
          <td>CPF</td>
          <td><?php echo($dados["CPF"]);?></td>
          <td></td>
        </tr>
        <tr>
          <td>RG</td>
          <td><?php echo($dados["RG"]);?></td>
          <td></td>
        </tr>
        <tr>
          <td>Nacionalidade</td>
          <td><?php echo($dados["nacionalidade"]);?></td>
          <td></td>
        </tr>
        <tr>
          <td>Data de Nascimento</td>
          <td><?php echo($dados["nascimento"]);?></td>
          <td></td>
        </tr>

        <?php if (isset($_POST["estado_civil"])) { ?>
          <tr>
            <td>Estado Civil</td>
            <td>
              <select
								name="editaestado_civil"
								id="editaestado_civil">
								<option>Estado Civíl*</option>
								<option value="1">Solteiro (a)</option>
								<option value="2">Casado (a)</option>
								<option value="3">Viúvo (a)</option>
								<option value="4">Separado (a) judicialmente</option>
								<option value="5">Divorciado (a)</option>
							</select>
            </td>
            <td>
              <input
                class="btn"
                type="submit"
                name="salvaestado_civil"
                value="Salvar">
              <input
                class="btn"
                type="submit"
                value="Cancelar">
            </td>
          </tr>
        <?php } else { ?>
          <tr>
            <td>Estado Civil</td>
            <td><?php
            if($dados["estado_civil"] == 1){
              print("Solteiro (a)");
            }
            elseif($dados["estado_civil"] == 2){
              print("Casado (a)");
            }
            elseif($dados["estado_civil"] == 3){
              print("Viúvo (a)");
            }
            elseif($dados["estado_civil"] == 4){
              print("Separado (a) judicialmente");
            }
            elseif($dados["estado_civil"] == 5){
              print("Divorciado (a)");
            }
            else{
              print("erro");
            }?></td>
            <td>
              <input
                class="btn"
                type="submit"
                name="estado_civil"
                value="Editar">
            </td>
          </tr>
        <?php } ?>

        <?php if (isset($_POST["sexo"])) { ?>
          <tr>
            <td>Sexo</td>
            <td>
                <input
    				type="radio"
    				name="editasexo"
    				id="editasexo"
    				value="1"/>Masculino
    			<input
    				type="radio"
    				name="editasexo"
    				id="editasexo"
    				value="2"/>Feminino
     			<input
    				type="radio"
    				name="editasexo"
    				id="editasexo"
    				value="3"/>Outro
            </td>
            <td>
              <input
                class="btn"
                type="submit"
                name="salvasexo"
                value="Salvar">
              <input
                class="btn"
                type="submit"
                value="Cancelar">
            </td>
          </tr>
        <?php } else { ?>
          <tr>
            <td>Sexo</td>
            <td><?php if($dados["sexo"] == 1){
              print("Masculino");
            }
            elseif($dados["sexo"] == 2){
              print("Feminino");
            }
            elseif($dados["sexo"] == 3){
              print("Outro");
            }?></td>
            <td>
              <input
                class="btn"
                type="submit"
                name="sexo"
                value="Editar">
            </td>
          </tr>
        <?php } ?>

        <?php if (isset($_POST["estado"])) { ?>
          <tr>
            <td>Estado</td>
            <td>
              <input
                type="text"
                name="editaestado"
                value="<?php echo($dados["estado"]);?>"
                maxlength="30"/>
            </td>
            <td>
              <input
                class="btn"
                type="submit"
                name="salvaestado"
                value="Salvar">
              <input
                class="btn"
                type="submit"
                value="Cancelar">
            </td>
          </tr>
        <?php } else { ?>
          <tr>
            <td>Estado</td>
            <td><?php echo($dados["estado"]);?></td>
            <td>
              <input
                class="btn"
                type="submit"
                name="estado"
                value="Editar">
            </td>
          </tr>
        <?php } ?>

        <?php if (isset($_POST["rua"])) { ?>
          <tr>
            <td>Rua</td>
            <td>
              <input
                type="text"
                name="editarua"
                value="<?php echo($dados["rua"]);?>"
                maxlength="50"/>
            </td>
            <td>
              <input
                class="btn"
                type="submit"
                name="salvarua"
                value="Salvar">
              <input
                class="btn"
                type="submit"
                value="Cancelar">
            </td>
          </tr>
        <?php } else { ?>
          <tr>
            <td>Rua</td>
            <td><?php echo($dados["rua"]);?></td>
            <td>
              <input
                class="btn"
                type="submit"
                name="rua"
                value="Editar">
            </td>
          </tr>
        <?php } ?>

        <?php if (isset($_POST["numero"])) { ?>
          <tr>
            <td>Número</td>
            <td>
              <input
                type="text"
                name="editanumero"
                value="<?php echo($dados["numero"]);?>"
                maxlength="5"/>
            </td>
            <td>
              <input
                class="btn"
                type="submit"
                name="salvanumero"
                value="Salvar">
              <input
                class="btn"
                type="submit"
                value="Cancelar">
            </td>
          </tr>
        <?php } else { ?>
          <tr>
            <td>Número</td>
            <td><?php echo($dados["numero"]);?></td>
            <td>
              <input
                class="btn"
                type="submit"
                name="numero"
                value="Editar">
            </td>
          </tr>
        <?php } ?>

        <?php if (isset($_POST["bairro"])) { ?>
          <tr>
            <td>Bairro</td>
            <td>
              <input
                type="text"
                name="editabairro"
                value="<?php echo($dados["bairro"]);?>"
                maxlength="50"/>
            </td>
            <td>
              <input
                class="btn"
                type="submit"
                name="salvabairro"
                value="Salvar">
              <input
                class="btn"
                type="submit"
                value="Cancelar">
            </td>
          </tr>
        <?php } else { ?>
          <tr>
            <td>Bairro</td>
            <td><?php echo($dados["bairro"]);?></td>
            <td>
              <input
                class="btn"
                type="submit"
                name="bairro"
                value="Editar">
            </td>
          </tr>
        <?php } ?>

        <?php if (isset($_POST["municipio"])) { ?>
          <tr>
            <td>Municipio</td>
            <td>
              <input
                type="text"
                name="editamunicipio"
                value="<?php echo($dados["municipio"]);?>"
                maxlength="50"/>
            </td>
            <td>
              <input
                class="btn"
                type="submit"
                name="salvamunicipio"
                value="Salvar">
              <input
                class="btn"
                type="submit"
                value="Cancelar">
            </td>
          </tr>
        <?php } else { ?>
          <tr>
            <td>Municipio</td>
            <td><?php echo($dados["municipio"]);?></td>
            <td>
              <input
                class="btn"
                type="submit"
                name="municipio"
                value="Editar">
            </td>
          </tr>
        <?php } ?>

        <?php if (isset($_POST["CEP"])) { ?>
          <tr>
            <td>CEP</td>
            <td>
              <input
                type="text"
                name="editaCEP"
                value="<?php echo($dados["CEP"]);?>"
                onkeydown="javascript: fMasc( this, mCEP );"
                maxlength="9"/>
            </td>
            <td>
              <input
                class="btn"
                type="submit"
                name="salvaCEP"
                value="Salvar">
              <input
                class="btn"
                type="submit"
                value="Cancelar">
            </td>
          </tr>
        <?php } else { ?>
          <tr>
            <td>CEP</td>
            <td><?php echo($dados["CEP"]);?></td>
            <td>
              <input
                class="btn"
                type="submit"
                name="CEP"
                value="Editar">
            </td>
          </tr>
        <?php } ?>

        <?php if (isset($_POST["telefone1"])) { ?>
          <tr>
            <td>Telefone Principal</td>
            <td>
              <input
                type="text"
                name="editatelefone1"
                value="<?php echo($dados["telefone1"]);?>"
                maxlength="14"
                onkeydown="javascript: fMasc( this, mTel );"/>
            </td>
            <td>
              <input
                class="btn"
                type="submit"
                name="salvatelefone1"
                value="Salvar">
              <input
                class="btn"
                type="submit"
                value="Cancelar">
            </td>
          </tr>
        <?php } else { ?>
          <tr>
            <td>Telefone Principal</td>
            <td><?php echo($dados["telefone1"]);?></td>
            <td>
              <input
                class="btn"
                type="submit"
                name="telefone1"
                value="Editar">
            </td>
          </tr>
        <?php } ?>

        <?php if (isset($_POST["telefone2"])) { ?>
          <tr>
            <td>Telefone Secundário</td>
            <td>
              <input
                type="text"
                name="editatelefone2"
                value="<?php echo($dados["telefone2"]);?>"
                maxlength="14"
                onkeydown="javascript: fMasc( this, mTel );"/>
            </td>
            <td>
              <input
                class="btn"
                type="submit"
                name="salvatelefone2"
                value="Salvar">
              <input
                class="btn"
                type="submit"
                value="Cancelar">
            </td>
          </tr>
        <?php } else { ?>
          <tr>
            <td>Telefone Secundário</td>
            <td><?php echo($dados["telefone2"]);?></td>
            <td>
              <input
                class="btn"
                type="submit"
                name="telefone2"
                value="Editar">
            </td>
          </tr>
        <?php } ?>

        <?php if (isset($_POST["email"])) { ?>
          <tr>
            <td>Email</td>
            <td>
              <input
                type="text"
                name="editaemail"
                value="<?php echo($dados["email"]);?>"
                maxlength="50"/>
            </td>
            <td>
              <input
                class="btn"
                type="submit"
                name="salvaemail"
                value="Salvar">
              <input
                class="btn"
                type="submit"
                value="Cancelar">
            </td>
          </tr>
        <?php } else { ?>
          <tr>
            <td>Email</td>
            <td><?php echo($dados["email"]);?></td>
            <td>
              <input
                class="btn"
                type="submit"
                name="email"
                value="Editar">
            </td>
          </tr>
        <?php } ?>

        <?php if (isset($_POST["senha"])) { ?>
            <tr>
                <td>
                    <input
                      type="password"
                      name="editasenha"
                      placeholder="Digite sua Senha"
                      maxlength="25"/>
                </td>
                <td>
                    <input
                      type="password"
                      name="editasenha2"
                      placeholder="Repita sua Senha"
                      maxlength="25"/>
                </td>
                <td>
                    <input
                      class="btn"
                      type="submit"
                      name="salvasenha"
                      value="Salvar">
                    <input
                      class="btn"
                      type="submit"
                      value="Cancelar">
                </td>
          </tr>
        <?php } else { ?>
          <tr>
            <td>Senha</td>
            <td>
                <?php
                    $tam_senha = strlen($dados["senha"]);
                    for ($i=0; $i < $tam_senha; $i++) {
                        echo("*");
                    }
                ?>
            </td>
            <td>
              <input
                class="btn"
                type="submit"
                name="senha"
                value="Editar">
            </td>
          </tr>
        <?php } ?>

      </form>
    </tbody>
  </table>
</div>
</center>

<script type="text/javascript">
			function fMasc(objeto,mascara) {
				obj=objeto
				masc=mascara
				setTimeout("fMascEx()",1)
			}
			function fMascEx() {
				obj.value=masc(obj.value)
			}
			function mTel(tel) {
				tel=tel.replace(/\D/g,"")
				tel=tel.replace(/^(\d)/,"($1")
				tel=tel.replace(/(.{3})(\d)/,"$1)$2")
				if(tel.length == 9) {
					tel=tel.replace(/(.{1})$/,"-$1")
				} else if (tel.length == 10) {
					tel=tel.replace(/(.{2})$/,"-$1")
				} else if (tel.length == 11) {
					tel=tel.replace(/(.{3})$/,"-$1")
				} else if (tel.length == 12) {
					tel=tel.replace(/(.{4})$/,"-$1")
				} else if (tel.length > 12) {
					tel=tel.replace(/(.{4})$/,"-$1")
				}
				return tel;
			}
			function mCNPJ(cnpj){
				cnpj=cnpj.replace(/\D/g,"")
				cnpj=cnpj.replace(/^(\d{2})(\d)/,"$1.$2")
				cnpj=cnpj.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
				cnpj=cnpj.replace(/\.(\d{3})(\d)/,".$1/$2")
				cnpj=cnpj.replace(/(\d{4})(\d)/,"$1-$2")
				return cnpj
			}
			function mCPF(cpf){
				cpf=cpf.replace(/\D/g,"")
				cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
				cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
				cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
				return cpf
			}
			function mCEP(cep){
				cep=cep.replace(/\D/g,"")
				cep=cep.replace(/^(\d{5})(\d)/,"$1-$2")
				//cep=cep.replace(/\.(\d{3})(\d)/,".$1-$2")
				return cep
			}
			function mNum(num){
				num=num.replace(/\D/g,"")
				return num
			}
		</script>
