<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php
        if ($_SESSION["usuariopai"] != 0) {
          $id = $_SESSION["usuariopai"];
        }else{
          $id = $_SESSION["id"];
        }
        $pegadespesas = selecionadiversosdados (
          "SELECT *,
          DATE_FORMAT(
            DATE_SUB(
              pagoem,
              INTERVAL 3 hour
            ),
            '%d/%c/%Y as %T'
          )
          AS pagodata
          FROM `despesa`
          WHERE idusuario = " . $id
        );
      ?>
      <div class="table-responsive">
        <table
          class="
            table
            table-dark
            table-striped
            table-hover
            table-bordered"
          style="text-align: center;">
          <thead>
            <tr>
              <th>Despesas</th>
              <th>Valores</th>
              <?php
                if ($_SESSION["usuariopai"] == 0) {
                  ?>
                  <th>Editar Despesa</th>
                  <th>Excluir Despesa</th>
                  <th>Pagar Despesa</th>
                  <th>Comprovante</th>
                  <?php
                }
              ?>
            </tr>
          </thead>
          <tbody>
            <?php
              $total = 0;
              foreach ($pegadespesas as $despesa) {
                if ($despesa["pago"] != 0) {
                  $total += $despesa["valor"];
                }
                if (
                  isset($_POST["Editar"])
                  && $_POST["Editar"] ==  $despesa["id"]) {
                  ?>
                  <tr>
                    <td>
                      <form method="post" enctype="multipart/form-data">
                        <input
                          type="hidden"
                          name="<?php echo ($despesa["nome"]);?>"
                          value="Ednome">
                        <input
                          style="margin: 8 0 -8 0;"
                          type="text"
                          name="Ednome"
                          value="<?php echo ($despesa["nome"]);?>">
                      </td>
                      <td>
                        <input
                          type="hidden"
                          name="<?php echo ($despesa["valor"]);?>"
                          value="Edvalor">
                        <input
                          style="margin: 8 0 -8 0;"
                          type="text"
                          name="Edvalor"
                          value="<?php echo ($despesa["valor"]);?>">
                      </td>
                      <td>
                        <input
                          class="btn"
                          style="margin: 8 0 -8 0;"
                          type="hidden"
                          name="Salvar"
                          value="<?php echo($despesa["id"]); ?>">
                        <input
                          class="btn"
                          style="margin: 8 0 -8 0;"
                          type="submit"
                          name="<?php echo($despesa["id"]); ?>"
                          value="Salvar">
                        <input
                          class="btn"
                          style="margin: 8 0 -8 0;"
                          type="submit"
                          value="Cancelar">
                      </form>
                    </td>
                    <?php
                  } else {
                    ?>
                    <tr>
                      <td>
                        <?php echo ($despesa["nome"]); ?>
                      </td>
                      <td>
                        <?php
                          echo (
                            "R$ "
                            .number_format(
                              (float)$despesa["valor"],
                              2,
                              ",",
                              "."
                            )
                          );
                        ?>
                      </td>
                      <td>
                        <form
                           method="post"
                           style="
                             margin: -8 0 0 0;
                             height: 25;">
                          <input
                            type="hidden"
                            name="Editar"
                            value="<?php echo($despesa["id"]); ?>">
                          <input
                            class="btn"
                            style="
                              margin: 8 0 -8 0;
                              padding: 5 10;"
                            type="submit"
                            name="<?php echo($despesa["id"]); ?>"
                            value="Editar">
                        </form>
                      </td>
                      <?php
                    }
                  ?>
                  <td>
                    <form
                      method="post"
                      style="height: 25;">
                      <input
                        type="hidden"
                        name="Excluir"
                        value="<?php echo($despesa["id"]); ?>">
                      <input
                        class="btn"
                        style="
                          margin: 0;
                          padding: 5 10;"
                        type="submit"
                        name="<?php echo($despesa["id"]); ?>"
                        value="Excluir">
                    </form>
                  </td>
                  <td>
                    <form
                      method="post"
                      style="height: 25;">
                      <?php
                        if ($despesa["pago"] == 1){
                          ?>
                          <input
                            class="btn"
                            style="
                              margin: 0;
                              padding: 5 10;"
                            type="submit"
                            name="pago"
                            value="Pago em
                            <?php
                              echo($despesa["pagodata"]);
                            ?>"/>
                          <?php
                        } else {
                          ?>
                          <input
                            type="hidden"
                            name="Pagar"
                            value="<?php echo($despesa["id"]); ?>">
                          <input
                            class="btn"
                            style="
                              margin: 0;
                              padding: 5 10;"
                            type="submit"
                            name="<?php echo($despesa["id"]); ?>"
                            value="Pagar">
                          <?php
                        }
                      ?>
                    </form>
                  </td>
                  <td>
                    <form
                      method="post"
                      style="height: 25;"
                      enctype="multipart/form-data">
                      <?php
                        if ($despesa["pago"] == 1){
                          if ($despesa["comprovante"] != 0){
                            ?>
                            <a
                              class="btn"
                              href="comprovante/
                              <?php
                                echo ($despesa["comprovante"]);
                              ?>"
                              target="_blank"
                              style="
                                -webkit-appearance: button;
                                background-color: rgb(221,221,221);
                                color: black;
                                margin: 0 0 -8 0;
                                padding: 5 10;
                                text-align: center;">
                              Imprimir Comprovante
                            </a>
                            <?php
                          } else {
                            ?>
                            <input
                              type="hidden"
                              name="id"
                              value="<?php echo($despesa["id"]); ?>">
                            <label
                              style="
                                -webkit-appearance: button;
                                background-color: rgb(221,221,221);
                                color: black;
                                margin: 0 0 -8 0;
                                padding: 5 10;
                                text-align: center;"
                              class="btn">
                              Selecionar Comprovante
                              <input
                                type="file"
                                name="arquivo"
                                class="btn"
                                style="
                                  cursor: inherit;
                                  display: block;
                                  filter: alpha(opacity=0);
                                  opacity: 0;
                                  position: absolute;
                                  right: 0;
                                  text-align: right;
                                  top: 0;
                                  margin: 0 0 -8 0;
                                  padding: 5 10;"/>
                            </label>
                            <input
                              type="submit"
                              class="btn"
                              name="envcomp"
                              value="Enviar"
                              style="
                                margin: 0 0 -8 0;
                                padding: 5 10;
                                text-align: center;"/>
                            <?php
                          }
                        } else {
                          ?>
                          <button
                            class="btn"
                            style="
                              margin: 0 0 -8 0;
                              padding: 5 10;">
                            Pague para enviar comprovante
                          </button>
                          <?php
                        }
                      ?>
                      </form>
                    </td>
                  </tr>
                  <?php
                }
              ?>
              </tbody>
            <tr>
            <th>TOTAL:</th>
            <th>
              <?php
                echo (
                  "R$ "
                  .number_format(
                    (float)$total,
                    2,
                    ",",
                    "."
                  )
                );
              ?>
            </th>
          </tr>
        </table>
      </div>
      <?php
        $salarioatual = selecionaumdado(
          "SELECT *
          FROM `salario`
          WHERE idusuario =" . $id . " ORDER BY id DESC"
        );
        $sobrasalario = $salarioatual["valor"] - $total;
        $sobrasalario = number_format((float)$sobrasalario, 2, ",", ".");
        if (
          $sobrasalario == number_format (
            (float)$salarioatual["valor"],
            2,
            ",",
            "."
          )
        ) {
          $cor = "blue";
        } elseif ($sobrasalario>0) {
          $cor = "green";
          // echo (
          //   "<h4 style='color: red;'>
          //     Do seu salário sobrou: \"R$ " . $sobrasalario . "\".
          //   </h4>"
          // );
        } else {
          $cor = "red";
        }
      ?>
      <div>
        <div
          style="
            float: left;
            margin-right: 5px;">
          Do seu salário sobrou:
        </div>
        <div style="color: <?php echo ($cor); ?>;">
          R$ "<?php echo ($sobrasalario);?>"
        </div>
      </div>
    </div>
  </div>
</div>
