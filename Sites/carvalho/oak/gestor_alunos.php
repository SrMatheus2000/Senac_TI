<div class="container">
  <div class="row">

    <div class="col-md-12">

      <?php


      $dados = SelecionaDiversosDados("SELECT * FROM alunos;");
        foreach ($dados as $dado) {
           ?>
        <div style="border-style: groove;">

          <div class="row">
            <div class="col-1 col-sm-7">
           <h1><?php print($dado["nome"]); ?></h1>
           <h3>   <?php print($dado["cpf"]); ?></h3>
         </div>
         <div class="col-8 col-sm-2">
           <img src="profile_pics/<?php
           if($dado["foto"]==""){
           print("teste.jpg");
         }else{
           print($dado["foto"]);
         }
           ?>" id="blah<?php print($dado["id"]); ?>" width="100px"/>

          <script type="text/javascript">
          function readURL(input) {
              if (input.files && input.files[0]) {
                  var reader = new FileReader();
                  reader.onload = function (e) {
                      $('#blah<?php print($dado["id"]); ?>').attr('src', e.target.result);
                  }
                  reader.readAsDataURL(input.files[0]);
              }
          }
          </script>
        </div>

         <div  class="col-3 col-sm-3">
           <br><br>

          <button class="btn"  id="edit<?php print($dado["id"]); ?>">Editar </button>
          <button class="btn"  id="delete<?php print($dado["id"]); ?>"> Excluir </button>

         </div>
       </div>

        <div id="show<?php print($dado["id"]); ?>">
          <table class="table table-striped">
           <tr>
         <th> E-Mail </th>
       </tr>
           <tr>
             <td> <?php print($dado["email"]); ?> </td>
           </tr>
           </table>
         </div>

          <!-- EDITAR -->
         <div id="editar<?php print($dado["id"]); ?>">
          <form method="post" action="upload.php?id=<?php print($dado["id"]); ?>" id="upload<?php print($dado["id"]); ?>" enctype='multipart/form-data'>
            <input type="hidden" id="edit<?php print($dado["id"]); ?>" value="Editar"/>
            <input type="file"name="file" id="file<?php print($dado["id"]); ?>" onchange="readURL(this);"/>
          <table class="table table-striped">
          <tr>
            <th> Email </th>
          </tr>
          <tr>
          <td> <input type="text" id="email<?php print($dado["id"]); ?>" value="<?php print($dado["email"]); ?>"/> </td><br>
          </tr>
        </table>
          <input type="hidden" id="id_user<?php print($dado["id"]); ?>" value="<?php print($dado["id"]); ?>"/>
          <input type="button" class="btn" id="edit_save<?php print($dado["id"]);?>" value="Salvar" name="save"/>
          <input type="button" class="btn" id="edit_cancel<?php print($dado["id"]);?>" value="Cancelar"/>
          </form>
          <div id="preview"></div>
        </div>
        <!-- EDITAR -->
    </div>
    <script>

      $("#edit_save<?php print($dado["id"]); ?>").click(enviar);
      $("#edit<?php print($dado["id"]); ?>").click(edit);
      $("#edit_cancel<?php print($dado["id"]);?>").click(cancel);
      $("#delete<?php print($dado["id"]); ?>").click(deleto);

      $("#show<?php print($dado["id"]); ?>").show();
      $("#editar<?php print($dado["id"]); ?>").hide();

      function edit(){
        $.ajax({success: function(result){
          $("#show<?php print($dado["id"]); ?>").hide();
          $("#editar<?php print($dado["id"]); ?>").show();
        }});
      }

      function cancel(){
        $.ajax({success: function(result){
          $("#show<?php print($dado["id"]); ?>").show();
          $("#editar<?php print($dado["id"]); ?>").hide();
        }});
      }

      function deleto(){
        var confirm = prompt("Digite APAGAR e aperte OK para confirmar");
        if (confirm == null || confirm == "" || confirm != "APAGAR") {
          alert("Cancelado!");
        } else if(confirm == "APAGAR"){

        $.ajax({success: function(result){

        $.post("ajax_delete.php", {
          id: $("#id_user<?php print($dado["id"]); ?>").val()

        }, (data) => {
          alert ("Usuário excluído com sucesso!");
          location.reload();
        });
        }});
        }
      }

    function enviar(){
    $.ajax({success: function(result){

    $.post("ajax_edit.php", {

      email: $("#email<?php print($dado["id"]); ?>").val(),
      id: $("#id_user<?php print($dado["id"]); ?>").val()

    }, (data) => {
      $("#show<?php print($dado["id"]); ?>").show();
      $("#editar<?php print($dado["id"]); ?>").hide();

      var $formUpload = document.getElementById('upload<?php print($dado["id"]); ?>'),
          i = 0;

        event.preventDefault();

        var xhr = new XMLHttpRequest();

        xhr.open("POST", $formUpload.getAttribute('action'));

        var formData = new FormData($formUpload);

        formData.append("i", i++);
        xhr.send(formData);

      alert ("Usuário editado com sucesso!");
      location.reload();
    });
    }});
    }
    </script>
          <?php
        }
      ?>
    </div>
  </div>
<div id="footer"> </div>
</div>
