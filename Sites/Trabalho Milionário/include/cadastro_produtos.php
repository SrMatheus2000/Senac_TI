





<div class="container">
  <div class="row">

    <div class="col-md-4">

      <?php

     	//$log_user=SelecionaDiversosDados("SELECT * FROM log_user WHERE id_pai = ".$_SESSION["id"]."");

     $log_user=SelecionaDiversosDados("SELECT * FROM logs_produtos ORDER BY data_log desc");

     //fazer botão para mudar ORDER BY

     ?>


     <?php
     $tmp = 0;

     foreach($log_user as $logs){
       if ($tmp++ < 10) {

     /*?>
     <p>	O Usuário <?php print($logs["user"]) ?> entrou na página <?php print($logs["pagina"]) ?> em <?php print($logs["datahora"]) */  //</p><br>

     //  1 = Novo produto   2 = Remover produto   3 = Editar produto
     ?>
     <?php if($logs["tipo_log"] == 1){ ?>
       <p> <?php print($logs["data_log"]); ?> - Item <?php print($logs["id_produto"]) ?> <br>

         O usuário <?php print($logs["id_user"]); ?> adicionou o produto.
       </p>
     <?php }?>

     <?php if($logs["tipo_log"] == 2){ ?>
       <p> <?php print($logs["data_log"]); ?> - Item <?php print($logs["id_produto"]) ?> <br>

         O usuário <?php print($logs["id_user"]); ?> removeu o produto.
       </p>
     <?php }?>


     <?php if($logs["tipo_log"] == 3){ ?>
    <p> <?php print($logs["data_log"]); ?> - Item <?php print($logs["id_produto"]) ?> <br>

      Mudança do campo <?php print($logs["nome_campo"]); ?> de
      <?php print($logs["valor_anterior"]); ?> para <?php print($logs["novo_valor"]); ?>.
      <br>
    </p>
     	<?php
      }
     }

     }
     ?>



    </div>


<div class="col-md-4">
<form method="post" enctype="multipart/form-data">

  <input type="hidden" name="produtos" value="Produtos">
<div class="form-group">
<label for="nome_prod">Nome do Produto</label>
<input class="form-control " name="nome_prod" type="text"/>
</div>

<div class="form-group">
<label for="cod_prod">Código do Produto</label>
<input class="form-control" name="cod_prod" type="text"/>
</div>



<div class="form-group">
  <label for="dsc_prod">Descrição do Produto</label>
<textarea style="resize:none;" class="form-control" rows="5" maxlength="255" name="dsc_prod" id="dscprod" type="text" width="100"></textarea></div><br>




<div class="form-group">
<label for="cat1">Categoria 1</label>
<select name="cat1" class="form-control form-control-sm mx-sm-3 mb-2">
<?php $todas_categoria = selecionadiversosdados("SELECT * FROM categoria_produto"); ?>
  <option></option>
  <?php foreach($todas_categoria as $categoria) : ?>
    <option value="<?php echo $categoria['nome']?>"><?php echo $categoria['nome']?></option>
    <?php endforeach;?>

</select>
</div>

<div class="form-group">
<label for="cat2">Categoria 2</label>
<select name="cat2" class="form-control form-control-sm mx-sm-3 mb-2">
  <?php $todas_categoria = selecionadiversosdados("SELECT * FROM categoria_produto"); ?>
  <option></option>
  <?php foreach($todas_categoria as $categoria) : ?>
    <option value="<?php echo $categoria['nome']?>"><?php echo $categoria['nome']?></option>
    <?php endforeach;?>

</select>
</div>

<div class="form-group">
<label for="marca">Marca</label>
<select name="marca" class="form-control form-control-sm mx-sm-3 mb-2">
  <option value="marca1">marca1</option>
  <option value="marca2">marca2</option>
  <option value="marca3">marca3</option>
  <option value="marca4">marca4</option>
</select>
</div>

<div class="form-group">
<label for="preco_prod">Preço</label>
<input class="form-control" name="preco_prod" type="text"/>
</div>
<button name="prod_cadastro" type="submit" class="btn btn-primary mb-2">Enviar</button>
</div>

<div class="col-md-4">

<div class="carouselExampleControls">
  <div class="slideOFERTAS">
  <div class="form-group">
  <input name="img_prod" type='file' onchange="readURL(this);" />
  <img id="blah" src="/img/placeholder.jpg" alt="your image" width="200"/>
  </div>
  <script type="text/javascript">

  $("#blah").click(page1);

  function page1(){
    $("#number").html("1");
  }

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
<input name="img_prod2" type='file' onchange="readURL2(this);" />
<img id="blah2" src="/img/placeholder.jpg" alt="your image" width="200"/>
</div>
<script type="text/javascript">
$("#blah2").click(page2);

function page2(){
  $("#number").html("2");
}

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
<input name="img_prod3" type='file' onchange="readURL3(this);" />
<img id="blah3" src="/img/placeholder.jpg" alt="your image" width="200"/>
</div>
<script type="text/javascript">
        $("#blah3").click(page3);

        function page3(){
          $("#number").html("3");
        }

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

      <input type="button" id="prevbtn" onclick="plusDivs(-1)" class="btn btn-primary mb-2" value="&#10094; Anterior"></input>
      <p id="number"> 1 </p>
    	<input type="button" id="nextbtn" onclick="plusDivs(1)" class="btn btn-primary mb-2" value="Proximo &#10095;"></input>
    </div>


</div>


</form>




</div>
</div>

<?php
// var_dump(" INSERT INTO produto(nome, codigo, descricao, cat1, cat2, marca, preco, imagem) VALUES
// (
//  '".$_POST["nome_prod"]."',
//  '".$_POST["cod_prod"]."',
//  '".$_POST["dsc_prod"]."',
//  '".$_POST["cat1"]."',
//  '".$_POST["cat2"]."',
//  '".$_POST["marca"]."',
//  '".$_POST["preco"]."',
//  '".$nomecompleto."'
//
// );
//
//
// ");
//
// var_dump($nomecompleto);
// var_dump($_FILES);

function resizeImage($resourceType,$image_width,$image_height) {
    $resizeWidth = 350;
    $resizeHeight = 350;
    $imageLayer = imagecreatetruecolor($resizeWidth,$resizeHeight);
    imagecopyresampled($imageLayer,$resourceType,0,0,0,0,$resizeWidth,$resizeHeight, $image_width,$image_height);
    return $imageLayer;
}

if(isset($_POST["prod_cadastro"])){
$nomecompleto = "";
$nomecompleto3 = "";
$nomecompleto3 = "";

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
  if ($_FILES["img_prod"]["size"] == 0){
    ?>
    <script>
      alert("Imagem 1 em branco!");
    </script>
    <?php
  exit;
  }
  if ($_FILES["img_prod2"]["size"] == 0){
    ?>
    <script>
      alert("Imagem 2 em branco!");
    </script>
    <?php
  exit;
  }
  if ($_FILES["img_prod3"]["size"] == 0){
    ?>
    <script>
      alert("Imagem 3 em branco!");
    </script>
    <?php
  exit;
  }



$foto = $_FILES["img_prod"];
$pasta = "img/produtos/";
$tipoimagem = strtolower(pathinfo($foto["name"],PATHINFO_EXTENSION));
$fileName = $_FILES['img_prod']['tmp_name'];
$sourceProperties = getimagesize($fileName);
$resizeFileName = time();
$uploadImageType = $sourceProperties[2];
$sourceImageWidth = $sourceProperties[0];
$sourceImageHeight = $sourceProperties[1];

$foto2 = $_FILES["img_prod2"];
$pasta2 = "img/produtos/";
$tipoimagem2 = strtolower(pathinfo($foto2["name"],PATHINFO_EXTENSION));
$fileName2 = $_FILES['img_prod2']['tmp_name'];
$sourceProperties2 = getimagesize($fileName2);
$resizeFileName2 = time();
$uploadImageType2 = $sourceProperties2[2];
$sourceImageWidth2 = $sourceProperties2[0];
$sourceImageHeight2 = $sourceProperties2[1];

$foto3 = $_FILES["img_prod3"];
$pasta3 = "img/produtos/";
$tipoimagem3 = strtolower(pathinfo($foto3["name"],PATHINFO_EXTENSION));
$fileName3 = $_FILES['img_prod3']['tmp_name'];
$sourceProperties3 = getimagesize($fileName3);
$resizeFileName3 = time();
$uploadImageType3 = $sourceProperties3[2];
$sourceImageWidth3 = $sourceProperties3[0];
$sourceImageHeight3 = $sourceProperties3[1];

if($tipoimagem != "JPEG" || $tipoimagem != "GIF" || $tipoimagem != "PNG"){
  ?> <script type="text/javascript">
    alert("Erro: Arquivo 1 não é uma imagem!");
  </script> <?php
  exit;
}

if($tipoimagem2 != "JPEG" || $tipoimagem2 != "GIF" || $tipoimagem2 != "PNG"){
  ?> <script type="text/javascript">
    alert("Erro: Arquivo 2 não é uma imagem!");
  </script> <?php
  exit;
}

if($tipoimagem3 != "JPEG" || $tipoimagem3 != "GIF" || $tipoimagem3 != "PNG"){
  ?> <script type="text/javascript">
    alert("Erro: Arquivo 3 não é uma imagem!");
  </script> <?php
  exit;
}

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

}



executasql(" INSERT INTO produto(nome, codigo, descricao, cat1, cat2, marca, preco, imagem, imagem2, imagem3) VALUES (
 '".$_POST["nome_prod"]."',
 '".$_POST["cod_prod"]."',
 '".$_POST["dsc_prod"]."',
 '".$_POST["cat1"]."',
 '".$_POST["cat2"]."',
 '".$_POST["marca"]."',
 '".$_POST["preco_prod"]."',
 '".$nomecompleto."',
 '".$nomecompleto2."',
 '".$nomecompleto3."'

);
");

executasql("INSERT INTO logs_produtos(id_user,data_log,id_produto,tipo_log)
VALUES(
'".$_SESSION["id"]."',
now(),
'".$_POST["cod_prod"]."',
1
);
");

?>

<script>
  alert("Produto registrado com sucesso!");
</script>
<?php
}

?>
