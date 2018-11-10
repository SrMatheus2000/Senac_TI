    <div class="container">
      <div class="row">
        </div>
        <div class="box">
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h2 class="display-4">Bem Vindo</h2>
              <p class="lead">Essas são suas Aulas!</p>
            <!-- <a href="index.php" class="btn btn-info">Sair</a> -->
            <form  method="post">
                <input class="btn btn-info" type="submit" name="deslogar" value="Sair">
            </form>
            </div>
          </div>
          <?php
            $todas_materia = selecionadiversosdados(
              "SELECT *,
               `cad_materia`.id AS id_materia,
               `aluno_materias`.id AS id_aluno_materias
              FROM `cad_materia`
              INNER JOIN `aluno_materias`
              WHERE `aluno_materias`.idaluno = " . $_SESSION["ID"] . "
              AND `aluno_materias`.idmateria = `cad_materia`.id"
            );
            // var_dump($todas_materia);
            $cont_materia = 1;
              foreach($todas_materia as $materia) :?>
            <a class="btn btn-info btn-lg btn-block glyphicon glyphicon-menu-right" style="text-align:left;"data-toggle="collapse" href="#Materia<?php print($cont_materia); ?>" role="button" aria-expanded="false" aria-controls="Materia<?php print($cont_materia); ?>">
              <?php print($materia["nome_materia"]); ?>
            </a>
          <div class="collapse" id="Materia<?php print($cont_materia); ?>">
            <div class="card card-body">
              <?php
                    $cont_aula = 1;
                    $todas_aulas = selecionadiversosdados("SELECT *, DATE_FORMAT(DATE_SUB(data,INTERVAL 0 hour),'%d/%m/%Y às %H:%i')AS data_aula FROM cad_aula WHERE materia_pai = ". $materia["id_materia"] . " AND DATE_FORMAT(DATE_SUB(data,INTERVAL 0 hour),'%d/%m/%Y') >= DATE_FORMAT(now(),'%d/%m/%Y');");
                    foreach($todas_aulas as $aula) :
                      // echo $aula["data_aula"];
                      ?>
                      <a class="btn btn-secondary" data-toggle="collapse" href="#Aula<?php print($aula["id"]); ?>" role="button" aria-expanded="false" aria-controls="Aula<?php print($aula["id"]); ?>">
                        <?php
                                print($aula["nome_aula"]);
                         ?>
                      </a>
                      <div class="collapse" id="Aula<?php  print($aula["id"]); ?>">
                        <div class="card card-body">
                              <div>


                                <h5>Sua aula é no dia <?php echo $aula["data_aula"]; ?> </h5>
                                <h4>Descrição da Aula:</h4>
                                <h5> <?php print($aula["descricao"]);?></h5>
                                <?php
                                if($aula["link_video"] != ""){?>
                                  <div class="embed-responsive embed-responsive-16by9" style="top:15%;">
                                      <iframe class="embed-responsive-item" src="<?php print($aula["link_video"]) ?>" allowfullscreen></iframe>
                                  </div>
                                  <?php
                                }
                          ?>
                        </div>
                        <div>

                          <?php
                          if ($aula["arquivo"] != 0){
                            ?>
                            <a
                            class="btn"
                            href="arquivos_aula/<?php echo ($aula["arquivo"]);?>"
                            target="_blank"
                            style="
                            float: right;
                            width: 150px;
                            -webkit-appearance: button;
                            background-color: rgb(221,221,221);
                            color: black;
                            margin: 0 0 -8 0;
                            padding: 5 10;
                            text-align: center;">
                            Visualizar Arquivo
                          </a>
                          <?php
                        }
                        ?>
                      </div>
                        </div>
                      </div><br>
                    <?php $cont_aula++; endforeach; ?>
                    </div>
                  </div><br>
                  <?php $cont_materia++; endforeach;  ?>
                  </div>
                  <div class="col-2" style="background-color: #17a2b8;">

                  </div>
                </div>
              </div>
            </div>
</div>
