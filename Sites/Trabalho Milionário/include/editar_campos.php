<?php
  $produto = SelecionaDiversosDados("SELECT * FROM produto WHERE id=".$_GET["editar"]."");
  foreach ($produto as $campo) {
 ?>

<div class="col-md-4">
<form method="post" enctype="multipart/form-data">

  <input type="hidden" name="editar" value="Editar">
<div class="form-group">
<label for="nome_prod">Nome do Produto</label>
<input class="form-control " name="nome_prod" type="text" value="<?php print($campo["nome"]); ?>"/>
</div>

<div class="form-group">
<label for="cod_prod">Código do Produto</label>
<input class="form-control" name="cod_prod" type="text" value="<?php print($campo["codigo"]); ?>"/>
</div>


<div class="form-group">
  <label for="dsc_prod">Descrição do Produto</label>
<textarea style="resize:none;"  class="form-control" rows="5" name="dsc_prod" type="text" width="100" ><?php print($campo["descricao"]); ?></textarea></div><br>

<div class="form-group">
<label for="cat1">Categoria 1</label>
<select name="cat1" class="form-control form-control-sm mx-sm-3 mb-2">
  <option value="<?php print($campo["cat1"]); ?>" selected="selected"> <?php print($campo["cat1"]); ?> (Atual) </option>
  <option value="cat1">cat1</option>
  <option value="cat2">cat2</option>
  <option value="cat3">cat3</option>
  <option value="cat4">cat4</option>
</select>
</div>

<div class="form-group">
<label for="cat2">Categoria 2</label>
<select name="cat2" class="form-control form-control-sm mx-sm-3 mb-2">
    <option value="<?php print($campo["cat2"]); ?>" selected="selected"> <?php print($campo["cat2"]); ?> (Atual) </option>
  <option value="cat1">cat1</option>
  <option value="cat2">cat2</option>
  <option value="cat3">cat3</option>
  <option value="cat4">cat4</option>
</select>
</div>





<div class="form-group">
<label for="marca">Marca</label>
<select name="marca" class="form-control form-control-sm mx-sm-3 mb-2">
    <option value="<?php print($campo["marca"]); ?>" selected="selected"> <?php print($campo["marca"]); ?> (Atual) </option>
  <option value="marca1">marca1</option>
  <option value="marca2">marca2</option>
  <option value="marca3">marca3</option>
  <option value="marca4">marca4</option>
</select>
</div>

<div class="form-group">
<label for="preco_prod">Preço</label>
<input class="form-control" name="preco_prod" type="text" value="<?php print($campo["preco"]); ?>"/>
</div>
<button name="prod_edit" type="submit" class="btn btn-primary mb-2">Enviar</button>
</div>

<div class="col-md-4">


<div class="carouselExampleControls">
  <div class="slideOFERTAS">
  <div class="form-group">
  <input name="img_prod" type='file' onchange="readURL(this);"/>
  <img id="blah" src="<?php print("img/produtos/".$campo["imagem"]); ?>" alt="your image" width="200"/>
  </div>
  <script type="text/javascript">

          function readURL(input) {
              if (input.files && input.files[0]) {
                  var reader = new FileReader();

                  reader.onload = function (e) {
                      $('#blah').attr('src', e.target.result);
                  }

                  reader.readAsDataURL(input.files[0]);
              }
          }
      </script>
</div>

<div class="slideOFERTAS">
<div class="form-group">
<input name="img_prod2" type='file' onchange="readURL2(this);"/>
<img id="blah2" src="<?php print("img/produtos/".$campo["imagem2"]); ?>" alt="your image" width="200"/>
</div>
<script type="text/javascript">
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah2').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</div>

<div class="slideOFERTAS">
<div class="form-group">
<input name="img_prod3" type='file' onchange="readURL3(this);"/>
<img id="blah3" src="<?php print("img/produtos/".$campo["imagem3"]); ?>" alt="your image" width="200"/>
</div>
<script type="text/javascript">
        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah3').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</div>

      <input type="button"  onclick="plusDivs(-1)" class="btn btn-primary mb-2" value="&#10094; Anterior"></input>
    	<input type="button" onclick="plusDivs(1)" class="btn btn-primary mb-2" value="Proximo &#10095;"></input>
    </div>


</div>


</form>
<?php }

function resizeImage($resourceType,$image_width,$image_height) {
    $resizeWidth = 350;
    $resizeHeight = 350;
    $imageLayer = imagecreatetruecolor($resizeWidth,$resizeHeight);
    imagecopyresampled($imageLayer,$resourceType,0,0,0,0,$resizeWidth,$resizeHeight, $image_width,$image_height);
    return $imageLayer;
}

if(isset($_POST["prod_edit"])){


  if ($_POST["nome_prod"] == ""){
      ?>
      <script>
        alert("Campo Nome do Produto em branco");
      </script>
      <?php
    exit;
    }
    if ($_POST["cod_prod"] == ""){
      ?>
      <script>
        alert("Campo Código de Produto em branco");
      </script>
      <?php
    exit;
    }
    if ($_POST["dsc_prod"] == ""){
      ?>
      <script>
        alert("Campo Descrição do Produto em branco");
      </script>
      <?php
    exit;
    }

      if ($_POST["preco_prod"] == ""){
      ?>
      <script>
        alert("Campo Preço do Produto em branco");
      </script>
      <?php
    exit;
    }

if($_FILES["img_prod"]["size"] != 0){
  $foto = $_FILES["img_prod"];
  $pasta = "img/produtos/";
  $tipoimagem = strtolower(pathinfo($foto["name"],PATHINFO_EXTENSION));
  $fileName = $_FILES['img_prod']['tmp_name'];
  $sourceProperties = getimagesize($fileName);
  $resizeFileName = time();
  $uploadImageType = $sourceProperties[2];
  $sourceImageWidth = $sourceProperties[0];
  $sourceImageHeight = $sourceProperties[1];

  if(is_array($_FILES)) {
  switch ($uploadImageType) {
              case IMAGETYPE_JPEG:
                  $resourceType = imagecreatefromjpeg($fileName);
                  $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight);
                  imagejpeg($imageLayer,$pasta."thump_".$resizeFileName.'.'. $tipoimagem);
                  break;

              case IMAGETYPE_GIF:
                  $resourceType = imagecreatefromgif($fileName);
                  $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight);
                  imagegif($imageLayer,$pasta."thump_".$resizeFileName.'.'. $tipoimagem);
                  break;

              case IMAGETYPE_PNG:
                  $resourceType = imagecreatefrompng($fileName);
                  $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight);
                  imagepng($imageLayer,$pasta."thump_".$resizeFileName.'.'. $tipoimagem);
                  break;

              default:
                  $imageProcess = 0;
                  break;
          }
        }

  if(move_uploaded_file($foto["tmp_name"], $pasta.$resizeFileName.".".$tipoimagem)){

  /*  $factory = new \ImageOptimizer\OptimizerFactory();
        $optimizer = $factory->get();

        $filepath = __DIR__ . '/img/produtos/$_POST["cod_prod"].".jpg"';  algum dia será implementado, mas precisamos de um servidor apache antes.

        $optimizer->optimize($filepath);*/
  }
  $nomecompleto = "thump_".$resizeFileName.".".$tipoimagem;
executasql("UPDATE produto SET imagem = '".$nomecompleto."' WHERE id=".$campo["id"].";");
}



if($_FILES["img_prod2"]["size"] != 0){
  $foto2 = $_FILES["img_prod2"];
  $pasta2 = "img/produtos/";
  $tipoimagem2 = strtolower(pathinfo($foto2["name"],PATHINFO_EXTENSION));
  $fileName2 = $_FILES['img_prod2']['tmp_name'];
  $sourceProperties2 = getimagesize($fileName2);
  $resizeFileName2 = time();
  $uploadImageType2 = $sourceProperties2[2];
  $sourceImageWidth2 = $sourceProperties2[0];
  $sourceImageHeight2 = $sourceProperties2[1];

  if(is_array($_FILES)) {
  switch ($uploadImageType2) {
              case IMAGETYPE_JPEG:
                  $resourceType2 = imagecreatefromjpeg($fileName2);
                  $imageLayer2 = resizeImage($resourceType2,$sourceImageWidth2,$sourceImageHeight2);
                  imagejpeg($imageLayer2,$pasta2."thump_2".$resizeFileName2.'.'. $tipoimagem2);
                  break;

              case IMAGETYPE_GIF:
                  $resourceType2 = imagecreatefromgif($fileName2);
                  $imageLayer2 = resizeImage($resourceType2,$sourceImageWidth2,$sourceImageHeight2);
                  imagegif($imageLayer2,$pasta2."thump_2".$resizeFileName2.'.'. $tipoimagem2);
                  break;

              case IMAGETYPE_PNG:
                  $resourceType2 = imagecreatefrompng($fileName2);
                  $imageLayer = resizeImage($resourceType2,$sourceImageWidth2,$sourceImageHeight2);
                  imagepng($imageLayer2,$pasta2."thump_2".$resizeFileName2.'.'. $tipoimagem2);
                  break;

              default:
                  $imageProcess = 0;
                  break;
          }
        }

  if(move_uploaded_file($foto2["tmp_name"], $pasta2.$resizeFileName2.".".$tipoimagem2)){

  /*  $factory = new \ImageOptimizer\OptimizerFactory();
        $optimizer = $factory->get();

        $filepath = __DIR__ . '/img/produtos/$_POST["cod_prod"].".jpg"';  algum dia será implementado, mas precisamos de um servidor apache antes.

        $optimizer->optimize($filepath);*/
  }
  $nomecompleto2 = "thump_2".$resizeFileName2.".".$tipoimagem2;
executasql("UPDATE produto SET imagem2 = '".$nomecompleto2."' WHERE id=".$campo["id"].";");
}


if($_FILES["img_prod3"]["size"] != 0){
  $foto3 = $_FILES["img_prod3"];
  $pasta3 = "img/produtos/";
  $tipoimagem3 = strtolower(pathinfo($foto3["name"],PATHINFO_EXTENSION));
  $fileName3 = $_FILES['img_prod3']['tmp_name'];
  $sourceProperties3 = getimagesize($fileName3);
  $resizeFileName3 = time();
  $uploadImageType3 = $sourceProperties3[2];
  $sourceImageWidth3 = $sourceProperties3[0];
  $sourceImageHeight3 = $sourceProperties3[1];

  if(is_array($_FILES)) {
  switch ($uploadImageType3) {
              case IMAGETYPE_JPEG:
                  $resourceType3 = imagecreatefromjpeg($fileName3);
                  $imageLayer3 = resizeImage($resourceType3,$sourceImageWidth3,$sourceImageHeight3);
                  imagejpeg($imageLayer3,$pasta3."thump_3".$resizeFileName3.'.'. $tipoimagem3);
                  break;

              case IMAGETYPE_GIF:
                  $resourceType3 = imagecreatefromgif($fileName3);
                  $imageLayer3 = resizeImage($resourceType3,$sourceImageWidth3,$sourceImageHeight3);
                  imagegif($imageLayer3,$pasta3."thump_3".$resizeFileName3.'.'. $tipoimagem3);
                  break;

              case IMAGETYPE_PNG:
                  $resourceType3 = imagecreatefrompng($fileName3);
                  $imageLayer3 = resizeImage($resourceType3,$sourceImageWidth3,$sourceImageHeight3);
                  imagepng($imageLayer3,$pasta3."thump_3".$resizeFileName3.'.'. $tipoimagem3);
                  break;

              default:
                  $imageProcess = 0;
                  break;
          }
        }

   if(move_uploaded_file($foto3["tmp_name"], $pasta3.$_POST["cod_prod"]."_3.jpg")){

  /*  $factory = new \ImageOptimizer\OptimizerFactory();
        $optimizer = $factory->get();

        $filepath = __DIR__ . '/img/produtos/$_POST["cod_prod"].".jpg"';  algum dia será implementado, mas precisamos de um servidor apache antes.

        $optimizer->optimize($filepath);*/

  $nomecompleto3 = $_POST["cod_prod"]."_3.jpg";
executasql("UPDATE produto SET imagem3 = '".$nomecompleto3."' WHERE id=".$campo["id"].";");

}}



if($_POST["nome_prod"]!=$campo["nome"]){
executasql("INSERT INTO logs_produtos(id_user,data_log,id_produto,tipo_log,nome_campo,valor_anterior,novo_valor)
VALUES(
'".$_SESSION["id"]."',
now(),
'".$_POST["cod_prod"]."',
3,
'Nome',
'".$campo["nome"]."',
'".$_POST["nome_prod"]."'
);
");

}
if($_POST["cod_prod"]!=$campo["codigo"]){
  executasql("INSERT INTO logs_produtos(id_user,data_log,id_produto,tipo_log,nome_campo,valor_anterior,novo_valor)
  VALUES(
  '".$_SESSION["id"]."',
  now(),
  '".$_POST["cod_prod"]."',
  3,
  'Código do Produto',
  '".$campo["codigo"]."',
  '".$_POST["cod_prod"]."'
  );
  ");
}

if($_POST["dsc_prod"]!=$campo["descricao"]){
  executasql("INSERT INTO logs_produtos(id_user,data_log,id_produto,tipo_log,nome_campo,valor_anterior,novo_valor)
  VALUES(
  '".$_SESSION["id"]."',
  now(),
  '".$_POST["cod_prod"]."',
  3,
  'Descrição do Produto',
  '".$campo["descricao"]."',
  '".$_POST["dsc_prod"]."'
  );
  ");
}

if($_POST["cat1"]!=$campo["cat1"]){
  executasql("INSERT INTO logs_produtos(id_user,data_log,id_produto,tipo_log,nome_campo,valor_anterior,novo_valor)
  VALUES(
  '".$_SESSION["id"]."',
  now(),
  '".$_POST["cod_prod"]."',
  3,
  'Categoria 1',
  '".$campo["cat1"]."',
  '".$_POST["cat1"]."'
  );
  ");
}

if($_POST["cat2"]!=$campo["cat2"]){
  executasql("INSERT INTO logs_produtos(id_user,data_log,id_produto,tipo_log,nome_campo,valor_anterior,novo_valor)
  VALUES(
  '".$_SESSION["id"]."',
  now(),
  '".$_POST["cod_prod"]."',
  3,
  'Categoria 2',
  '".$campo["cat2"]."',
  '".$_POST["cat2"]."'
  );
  ");
}

if($_POST["marca"]!=$campo["marca"]){
  executasql("INSERT INTO logs_produtos(id_user,data_log,id_produto,tipo_log,nome_campo,valor_anterior,novo_valor)
  VALUES(
  '".$_SESSION["id"]."',
  now(),
  '".$_POST["cod_prod"]."',
  3,
  'Marca',
  '".$campo["marca"]."',
  '".$_POST["marca"]."'
  );
  ");
}

if($_POST["preco_prod"]!=$campo["preco"]){
  executasql("INSERT INTO logs_produtos(id_user,data_log,id_produto,tipo_log,nome_campo,valor_anterior,novo_valor)
  VALUES(
  '".$_SESSION["id"]."',
  now(),
  '".$_POST["cod_prod"]."',
  3,
  'Preço',
  '".$campo["preco"]."',
  '".$_POST["preco_prod"]."'
  );
  ");
}


executasql(" UPDATE produto SET
 nome='".$_POST["nome_prod"]."',
 codigo='".$_POST["cod_prod"]."',
 descricao='".$_POST["dsc_prod"]."',
 cat1='".$_POST["cat1"]."',
 cat2='".$_POST["cat2"]."',
 marca='".$_POST["marca"]."',
 preco='".$_POST["preco_prod"]."'

 WHERE id=".$campo["id"].";
");
?>



<script>
  alert("Produto editado com sucesso!");
</script>
<?php


}


?>
