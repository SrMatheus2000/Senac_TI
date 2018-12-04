<div class="container" style="width: 100%;">
  <div class="row">
    <div class="col-md-12">
      <form method="post" enctype="multipart/form-data">
        <input
          type="hidden"
          name="id"
          value="<?php echo($_SESSION["id"]); ?>"/>
        <input
          type="file"
          name="imgperfil"
          value="imgperfil"/>
        <input
          class="btn"
          type="submit"
          name="enviarimg"
          value="Enviar"/>
      </form>
    </div>
  </div>
</div>
