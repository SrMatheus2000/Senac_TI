<div class="container">
  <div class="row">
    <div class="col-md-4">
      <?php
       	//$log_user=SelecionaDiversosDados("SELECT * FROM log_user WHERE id_pai = ".$_SESSION["id"]."");
        $log_user=SelecionaDiversosDados("SELECT * FROM logs_produtos ORDER BY data_log desc");
        //fazer botão para mudar ORDER BY
        $tmp = 0;
        foreach($log_user as $logs){
          if ($tmp++ < 10) {

            /*
              <p>
                O Usuário <?php print($logs["user"]) ?>
                entrou na página <?php print($logs["pagina"]) ?>
                em <?php print($logs["datahora"])
              </p>
              <br>
            */

             // 1 = Novo produto   2 = Remover produto   3 = Editar produto

            if($logs["tipo_log"] == 1){
              ?>
              <p> <?php print($logs["data_log"]); ?> - Item <?php print($logs["id_produto"]) ?> <br>
                O usuário <?php print($logs["id_user"]); ?> adicionou o produto.
              </p>
             <?php
            }
            if($logs["tipo_log"] == 2){
              ?>
                <p> <?php print($logs["data_log"]); ?> - Item <?php print($logs["id_produto"]) ?> <br>
                  O usuário <?php print($logs["id_user"]); ?> removeu o produto.
                </p>
              <?php
            }
            if($logs["tipo_log"] == 3){
              ?>
              <p>
                <?php print($logs["data_log"]); ?> - Item <?php print($logs["id_produto"]) ?>
                <br>
                Mudança do campo <?php print($logs["nome_campo"]); ?> de
                <?php print($logs["valor_anterior"]); ?> para <?php print($logs["novo_valor"]); ?> pelo usuário <?php print($logs["id_user"]); ?>.
                <br>
              </p>
             	<?php
            }
          }
        }
      ?>
    </div>
    <?php
      if(isset($_GET["edit"])){ include("editar_campos.php");}
      else {
        ?>
          <div class="col-md-4">
            <table  class="table table-striped table-bordered">
              <th> Nome </th>
              <th> ID </th>
              <th> Editar? </th>
              <?php
              if(isset($_GET["edit_find"])){
                $teste = SelecionaDiversosDados(
                  "SELECT *
                  FROM produto
                  WHERE CONCAT (
                    nome,
                    codigo
                  ) LIKE '%".$_GET["pesquisar_editor"]."%'"
                );
                foreach ($teste as $resultado ) {
                  ?>
                  <tr>
                    <td> <?php print($resultado["nome"]); ?> </td>
                    <td> <?php print($resultado["codigo"]); ?> </td>
                    <td> <form>
                      <input type="submit"
                      name="edit"
                      class="btn"
                      value="Editar"/>

                      <input type="hidden"
                      name="editar"
                      placeholder="Editar"
                      value="<?php print($resultado["id"]); ?>"/>
                    </form> </td>
                  </tr>
                  <?php
                }
              }
            ?>
            </table>
          </div>
        <?php
      }
    ?>
    <div class="col-md-4">
      <form method="get" enctype="multipart/form-data">
        <input type="hidden" name="editar" value="Editar">
        <h3> Pesquisar produto <h3>
        <input type="text" name="pesquisar_editor"/>
        <input type="submit" class="btn" name="edit_find" value="Pesquisar"/>
      </form>
    </div>
  </div>
</div>


<!--

<div class="container">
  <div class="row">

    <div class="col-md-4">

      <?php
     //
     // 	//$log_user=SelecionaDiversosDados("SELECT * FROM log_user WHERE id_pai = ".$_SESSION["id"]."");
     //
     // $log_user=SelecionaDiversosDados("SELECT * FROM logs_produtos ORDER BY data_log desc");
     //
     // //fazer botão para mudar ORDER BY

     ?>


     <?php
     // $tmp = 0;
     //
     // foreach($log_user as $logs){
     //   if ($tmp++ < 10) {
     //
     // /*?>
     // <p>	O Usuário <?php //print($logs["user"]) ?> entrou na página <?php //print($logs["pagina"]) ?> em <?php// print($logs["datahora"]) */  //</p><br>
     //
     // //  1 = Novo produto   2 = Remover produto   3 = Editar produto
     // ?>
     <?php //if($logs["tipo_log"] == 1){ ?>
       <p> <?php// print($logs["data_log"]); ?> - Item <?php //print($logs["id_produto"]) ?> <br>

         O usuário <?php// print($logs["id_user"]); ?> adicionou o produto.
       </p>
     <?php //}?>

     <?php //if($logs["tipo_log"] == 2){ ?>
       <p> <?php// print($logs["data_log"]); ?> - Item <?php //print($logs["id_produto"]) ?> <br>

         O usuário <?php //print($logs["id_user"]); ?> removeu o produto.
       </p>
     <?php// }?>


     <?php// if($logs["tipo_log"] == 3){ ?>
    <p> <?php //print($logs["data_log"]); ?> - Item <?php// print($logs["id_produto"]) ?> <br>

      Mudança do campo <?php //print($logs["nome_campo"]); ?> de
      <?php //print($logs["valor_anterior"]); ?> para <?php //print($logs["novo_valor"]); ?>.
      <br>
    </p>
     	<?php
     //  }
     // }
     //
     // }
     ?>



    </div>
    <?php //if(isset($_GET["editar"])){
      //include("editar_campos.php");
   //} ?>


  <?php //else{ ?>
    <div class="col-md-4">
    <table  class="table table-striped table-bordered">
      <th> Nome </th>
      <th> ID </th>
      <th> Editar? </th>
    <?php
      //if(isset($_GET["edit_find"])){
      //  $teste=SelecionaDiversosDados("SELECT * FROM produto WHERE CONCAT (nome, codigo) LIKE '%".$_GET["pesquisar_editor"]."%'");



    //  foreach ($teste as $resultado ) {
        ?>
        <tr>
          <td> <?php// print($resultado["nome"]); ?> </td>
          <td> <?php //print($resultado["codigo"]); ?> </td>
          <td> <button name="edit" class="btn"> Editar </button> </td>
        </tr>
        <?php
      // }
      //
      // }


    ?>
</table>
</div>
<?php//} ?>
<div class="col-md-4">
<form method="get" enctype="multipart/form-data">
  <input type="hidden" name="editar" value="Editar">
  <h3> Pesquisar produto <h3>
  <input type="text" name="pesquisar_editor"/>
  <input type="submit" name="edit_find"/>

</form>


</div>
</div>
</div> -->
