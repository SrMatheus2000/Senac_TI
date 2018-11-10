<?php
include("libsql.php");
function resizeImage($resourceType,$image_width,$image_height) {
    $resizeWidth = 350;
    $resizeHeight = 350;
    $imageLayer = imagecreatetruecolor($resizeWidth,$resizeHeight);
    imagecopyresampled($imageLayer,$resourceType,0,0,0,0,$resizeWidth,$resizeHeight, $image_width,$image_height);
    return $imageLayer;
}
if($_FILES["file"]["size"] != 0){
  $foto = $_FILES["file"];
  $pasta = '../img/profile_pics/';
  $tipoimagem = strtolower(pathinfo($foto["name"],PATHINFO_EXTENSION));
  $fileName = $_FILES['file']['tmp_name'];
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
ExecutaSQL("UPDATE alunos SET foto = '".$nomecompleto."' WHERE id=".$_GET["id"].";");
}
// if (isset($_FILES['file']) && !empty($_FILES['file']['name'])) {
//   move_uploaded_file($_FILES['file']['tmp_name'], "profile_pics/" . $_FILES['file']['name']);
//
// }
?>
<script>
 window.location.href="index.php?pagina_professor=&gestor_alunos=Alunos";
</script>