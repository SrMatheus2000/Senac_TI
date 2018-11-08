<center>

  <!-- <div class="col-sm-2"></div> -->

  <form namee="teste" method="post" id="form">
    <input type="hidden" name="cadastro_professor" value="Cadastro" />

    <table cellpadding="30" class="col-sm-8 box" bgcolor="#E8E8E8" style="border: transparent;">
      <tr>
        <td>

          <a href="index.php" class="btn btn-info">Voltar</a><br>

          <center>
            <b>
              <h2>Cadastro de Professor</h2>
            </b>
          </center><br>

          <table border="0" width="100%">

            <div class="form-group row">
              <label class="col-sm-3 col-form-label"></label>
              <div class="col-sm-6">
                <!-- <input type="text" name="nome" class="form-control" placeholder="Nome" id="idnome" size="30" maxlength="30" /> -->
                <input class="form-control" type="text" maxlength="30" id="nome" placeholder="Nome" />
                <p id="idNome"> </p>
              </div>
            </div>


            <div class="form-group row">
              <label class="col-sm-3 col-form-label"></label>
              <div class="col-sm-6">
                <!-- <input type="text" name="email" id="idemail" class="form-control" size="30" maxlength="30" placeholder="E-mail" /> -->
                <input class="form-control" type="text" maxlength="14" id="cpf" onkeydown="javascript: fMasc( this, mCPF );" placeholder="CPF" />
                <p id="idCPF"> </p>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label"></label>
              <div class="col-sm-6">
                <!-- <input type="password" name="senha" id="idsenha" class="form-control" placeholder="Senha" /> -->
                <input class="form-control" type="text" maxlength="14" id="telefone" onkeydown="javascript: fMasc( this, mTel );" placeholder="Telefone" />
                <p id="idTelefone"> </p>
                <!-- <p id="idSen"> </p> -->
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label"></label>
              <div class="col-sm-6">
                <input class="form-control" type="text" maxlength="60" id="email" placeholder="E-mail" />
                <p id="idEmail"> </p>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label"></label>
              <div class="col-sm-6">
                <input class="form-control" type="password" maxlength="15" id="senha" placeholder="Senha" />
                <p id="idSenha"> </p>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label"></label>
              <div class="col-sm-6">
                <input class="form-control" type="password" maxlength="15" id="senha2" placeholder="Repita sua Senha" />
                <p id="idSenha2"> </p>
              </div>
            </div>

        </td>
      </tr>

    </table>

    <center>
      <!-- <input type="submit" name="cadastrar_professor" class="btn btn-info" value="Cadastrar" id="btnlogin" /> -->
      <input class="btn btn-info" name="cadastrar_professor" type="button" value="Cadastrar" id="send"  onclick="checa_cadastro()"/>
      <br>
      <p id="succ">Professor Cadastrado com Sucesso!</p>
    </center>

    </table>

  </form><br>
  <div class="row">

    <div class="load">
      <img style="width: 100%; height: 100%;" src="img/loading.gif" />
    </div>

</center>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 rodape">
            <center>
                <a href="include/creditos.php">Creditos do Site</a>
            </center>
        </div>
    </div>
</div>


<!-- <div class="col-sm-2"></div> -->
