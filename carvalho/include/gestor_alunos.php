<div class="container">
  <div class="row">

    <div class="col-md-12">

      <?php
      if (isset($_GET["v_materia"])) include("include/vincular_materia.php");

      $dados = SelecionaDiversosDados("SELECT * FROM alunos  where professor='".$_SESSION["ID_professor"]."';");
        foreach ($dados as $dado) {
           ?>
           <style>

           #custom-button<?php print($dado["id"]); ?> {
             padding: 10px;
             color: white;
             background-color: #17a2b8;
             border: 1px solid #000;
             border-radius: 5px;
             cursor: pointer;
           }

           #custom-button<?php print($dado["id"]); ?>:hover {
             background-color: #1795b8;
           }

           #custom-text<?php print($dado["id"]); ?> {
             margin-left: 10px;
             font-family: sans-serif;
             color: #aaa;
           }

           </style>

        <div style="border-style: groove;">

          <div class="row">
            <div class="col-1 col-sm-7">
           <h2><?php print($dado["nome"]); ?></h2>
           <h3>   <?php print($dado["cpf"]); ?></h3>
         </div>
         <div class="col-8 col-sm-2">
           <img src="../img/profile_pics/<?php
           if($dado["foto"]==""){
           print("teste.jpg");
         }else{
           print($dado["foto"]);
         }
           ?>" id="blah<?php print($dado["id"]); ?>" width="100px"/>

          <script type="text/javascript">

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
           <form method="get">
             <td> <input class="btn" type="submit" name="v_materia" value="Vincular"> </td>
             <input type="hidden" name="pagina_professor">
             <input type="hidden" name="vincularmateria">
             <input type="hidden" name="id" value="<?php echo $dado["id"] ?>">
           </form>
          <form method="post" action="include/upload.php?id=<?php print($dado["id"]); ?>" id="upload<?php print($dado["id"]); ?>" enctype='multipart/form-data'>
            <input type="hidden" id="edit<?php print($dado["id"]); ?>" value="Editar"/>
            <!-- <input type="file"name="file" id="file" onchange="readURL(this);"/> -->

            <input type="file" name="file" id="file<?php print($dado["id"]); ?>" hidden="hidden" onchange="readURL<?php print($dado["id"]); ?>(this);"/>
            <button type="button" id="custom-button<?php print($dado["id"]); ?>" onchange="readURL<?php print($dado["id"]); ?>(this);">Escolha um arquivo</button>
            <span id="custom-text<?php print($dado["id"]); ?>">Nenhum arquivo escolhido.</span>

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

    function readURL<?php print($dado["id"]); ?>(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah<?php print($dado["id"]); ?>').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

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

        $.post("include/ajax_delete.php", {
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

    $.post("include/ajax_edit.php", {

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

const realFileBtn<?php print($dado["id"]); ?> = document.getElementById("file<?php print($dado["id"]); ?>");
const customBtn<?php print($dado["id"]); ?> = document.getElementById("custom-button<?php print($dado["id"]); ?>");
const customTxt<?php print($dado["id"]); ?> = document.getElementById("custom-text<?php print($dado["id"]); ?>");

customBtn<?php print($dado["id"]); ?>.addEventListener("click", function() {
  realFileBtn<?php print($dado["id"]); ?>.click();
});

realFileBtn<?php print($dado["id"]); ?>.addEventListener("change", function() {
  if (realFileBtn<?php print($dado["id"]); ?>.value) {
    customTxt<?php print($dado["id"]); ?>.innerHTML = realFileBtn<?php print($dado["id"]); ?>.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    customTxt<?php print($dado["id"]); ?>.innerHTML = "No file chosen, yet.";
  }
});

    </script>
          <?php
        }
      ?>
    </div>
  </div>
<div id="footer"> </div>
</div>
