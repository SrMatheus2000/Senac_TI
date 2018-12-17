<div class="container" style="width: 100%;">
  <div class="row">
    <div class="col-md-12">
      <form method="post" enctype="multipart/form-data">
        
        <input
          type="hidden"
          name="id"
          value="<?php echo($_SESSION["id"]); ?>"/>
          <label class="bin" style=" margin: 10px 0;" type="file"> Escolher arquivo
        <input
        class="bin"
          type="file"
          name="imgperfil"
          value="imgperfil"
          /></label>
        <input
          class="btn"
          type="submit"
          name="enviarimg"
          value="Enviar"/>
      </form>
    </div>
  </div>
</div>
	
<style>
<body>
  background-color:#98FB98;
</body>
.form-control {
  background-color: #ADFF2F;
  /* border: none; */
  color: #2F4F4F;
  /* padding: 16px 32px;
  text-align: center;
  font-size: 14px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;*/
  cursor: pointer;
}
.btn{
  background-color: #00FF00;
  /* border: none; */
  color: #2F4F4F;
  /* padding: 16px 32px;
  text-align: center;
  font-size: 14px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;*/
  cursor: pointer;
}
.bin{
  background-color: #808000		;
  /* border: none; */
  color: #2F4F4F;
  /* padding: 16px 32px;
  text-align: center;
  font-size: 14px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;*/
  cursor: pointer;
}
label[type="file"]{
    padding: 10px;
    background: F5F5DC; 
    display: table;
    color: #fff;
    cursor: pointer;
     }



input[type="file"] {
    display: none;
    cursor: pointer;
}

/* .btn:hover {opacity: 1} */
</style>
<style>
.table {
  background-color:#32CD32}
</style>