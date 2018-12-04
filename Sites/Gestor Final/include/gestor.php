<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <?php
        if ($_SESSION["usuariopai"] != 0) {
          $id = $_SESSION["usuariopai"];
        }else{
          $id = $_SESSION["id"];
        }

        $transacoes = selecionadiversosdados (
          "SELECT *, 
          DATE_FORMAT( 
            DATE_SUB( 
              `despesa`.`pagoem`, 
              INTERVAL 0 hour 
            ), 
            '%d/%c/%Y as %T' 
          ) AS `pagoem_despesa`, 
          DATE_FORMAT( 
            DATE_SUB( 
              `lucro`.`pagoem`, 
              INTERVAL 0 hour 
            ), 
            '%d/%c/%Y as %T' 
          ) AS `pagoem`, 
          `despesa`.`id` AS `id_despesa`, 
          `despesa`.`nome` AS `nome_despesa`, 
          `despesa`.`valor` AS `valor_despesa`, 
          `despesa`.`idusuario` AS `idusuario_despesa`, 
          `despesa`.`pago` AS `pago_despesa`,
          `despesa`.`comprovante` AS `comprovante_despesa`, 
          `despesa`.`fornecedor` AS `fornecedor_despesa` 
          FROM `despesa` 
          INNER JOIN `lucro`"
        );

        $pegadespesas = selecionadiversosdados (
          "SELECT *,
          DATE_FORMAT(
            DATE_SUB(
              pagoem,
              INTERVAL 0 hour
            ),
            '%d/%c/%Y as %T'
          )
          AS pagodata
          FROM `despesa`"
        );

        $pegalucros = selecionadiversosdados (
          "SELECT *,
          DATE_FORMAT(
            DATE_SUB(
              pagoem,
              INTERVAL 0 hour
            ),
            '%d/%c/%Y as %T'
          )
          AS pagodata
          FROM `lucro`"
        );
        // var_dump(
        //   "SELECT *,
        //   DATE_FORMAT(
        //     DATE_SUB(
        //       pagoem,
        //       INTERVAL 0 hour
        //     ),
        //     '%d/%c/%Y as %T'
        //   )
        //   AS pagodata
        //   FROM `despesa`"
        // );
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
              <th>Fornecedor</th>
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
                        <?php echo ($despesa["fornecedor"]); ?> 
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
                              href="comprovante/<?php
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
              <th>Lucros</th>
              <th>Valores</th>
              <th>Cliente</th>
              <?php
                if ($_SESSION["usuariopai"] == 0) {
                  ?>
                  <th>Editar Lucro</th>
                  <th>Excluir Lucro</th>
                  <th>Pagar Lucro</th>
                  <th>Comprovante</th>
                  <?php
                }
              ?>
            </tr>
          </thead>
          <tbody>
            <?php
              $totall = 0;
              foreach ($pegalucros as $despesa) {
                if ($despesa["pago"] != 0) {
                  $totall += $despesa["valor"];
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
                        <?php echo ($despesa["cliente"]); ?> 
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
                        name="Excluir1"
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
                            name="Pagar1"
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
                              href="comprovante/<?php 
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
                              name="envcomp1"
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
                    (float)$totall,
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
              <th>Lucros Totais</th>
              <th>Despesas Totais</th>
              <th>Montante Final</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo ("R$ ".number_format((float)$totall,2,",","."));?></td>
              <td><?php echo ("R$ ".number_format((float)$total,2,",","."));?></td>
              <?php
                $montante = 0;
                $montante = $totall - $total;
                $montante = number_format((float)$montante, 2, ",", ".");
                if ($montante == 0) {
                  $cor = "blue";
                } elseif ($montante>0) {
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
              <td style="color: <?php echo ($cor); ?>;">
                R$ <?php echo ($montante);?>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
