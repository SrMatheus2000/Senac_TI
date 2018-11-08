<h1>Cadastro de Alunos</h1>
<div class="container">
  <div class="row">
    <div class="load">
    <img src="loading.gif" />
  </div>
    <div class="col-md-4">
      <form method="post" id="form">
        <input type="text" maxlength="30" id="nome" placeholder="Nome"/>
        <input type="text" maxlength="14" id="cpf" onkeydown="javascript: fMasc( this, mCPF );" placeholder="CPF"/>
        <input type="text" maxlength="60" id="email" placeholder="E-mail"/>
        <input type="password" maxlength="15" id="senha" placeholder="Senha"/><br>
        <input type="button" value="Enviar" id="send"/>
        <br><p id="succ">Enviado com sucesso!</p>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">


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


$("#succ").hide();
$(".load").hide();
$("#div_new").stick_in_parent();
$(document).ready(function(){

  $("#send").click(teste);
  function teste(){
    $.ajax({success: function(result){

        $(".load").show();
        $("#succ").hide();
        $("#form").hide();
  $.post("ajax.php", {
      nome: $("#nome").val(),
      cpf: $("#cpf").val(),
      email: $("#email").val(),
      senha: $("#senha").val()
  }, (data) => {
    $(".load").hide();
    $("#form").show();
    $("#succ").show();
  });
}});
  }
});

</script>
