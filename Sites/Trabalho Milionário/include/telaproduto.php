<?php
  if(isset($_GET["produto"])){
    /* PEGANDO AS INFORMAÇÕES DO PRODUTO DO BANCO DE DADOS*/
    $Info = selecionaumdado("SELECT * FROM produto WHERE id = '".$_GET["produto"]."'");
  }

  /* ENVIANDO A AVALIAÇÃO PARA O BANCO */
    if(isset($_POST["avaliacao"])){
        if(isset($_SESSION["id"])){
            if($_POST["avaliacao"] != ""){
                 executasql("INSERT INTO avaliacoes (idproduto,idusuario,nomeusuario,avaliacao,estrela,data) VALUES ('".$Info["id"]."','".$_SESSION["id"]."', '".$_SESSION["nome"]."', '".$_POST["avaliacao"]."', '".$_POST["estrela"]."', now())");
            }
        }
    }
    /* PEGANDO AS AVALIAÇÕES */
    $Avaliacoes = selecionadiversosdados("SELECT avaliacao,nomeusuario,estrela FROM avaliacoes WHERE idproduto = '".$_GET["produto"]."'");
?>
    <head>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    <style>
    .estrelas input[type=radio]{
      display: none;
    }
    .estrelas label i.fa:before{
      content: '\f005';
      color: #FC0;
    }
    .estrelas input[type=radio]:checked ~ label i.fa:before{
      color: #CCC;
    }
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      color: #04B431;
    }
    .carousel-control-next-icon:after{
      font-size: 55px;
    }
    .carousel-control-prev-icon:after{
      font-size: 55px;
      color: #04B431;
    }
    </style>

    <div class="container" style="background: white;">
      <div class="row">
        <div style="padding-top: 20px;" class="col-md-4">
          <!-- IMAGENS DO PRODUTO -->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active" style="width:350px; height:350px;">
                <img class="d-block w-100" style="width:350px; height:350px;" src="/img/produtos/<?php print($Info["imagem"])?>" alt="First slide">
              </div>
              <div class="carousel-item" style="width:350px; height:350px;">
                <img class="d-block w-100" style="width:350px; height:350px;" src="/img/produtos/<?php print($Info["imagem2"])?>" alt="Second slide">
              </div>
              <div class="carousel-item" style="width:350px; height:350px;">
                <img class="d-block w-100" style="width:350px; height:350px;" src="/img/produtos/<?php print($Info["imagem3"])?>" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-md-8">
          <!-- NOME DO PRODUTO PEGANDO DO BANCO DE DADOS -->
          <h2 style="color: #333; margin:0; padding: 15px;"><?php print($Info["nome"])?></h2>
          <!-- PRECO DO PRODUTO PEGANDO DO BANCO DE DADOS -->
          <strong style="font-size: 25px; color: #333;">R$ <?php print($Info["preco"])?></strong>
          <br><br>
          <strong style="font-size: 25px; color: #333;">quantidade</strong>
          <select>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
          </select>
          <br><br>
          <div style=";">
            <a id="compra" class="btn btn-info" style="font-size: 25px; color: #333; text-decoration: none;" href="?carrinho=carrinho&acao=add&id=<?php echo $Info['id']?>">Comprar</a>
          </div>
          <br>
          <div>
            <!-- ADICIONAR À LISTA DE DESEJOS -->
            <a href="#" style="text-decoration: none; color: #17a2b8;">Adicionar à lista de desejos</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div style="padding-top: 10px;">
            <!-- DESCRIÇÃO DO PRODUTO PEGANDO DO BANCO DE DADOS -->
            <strong style="font-size: 25px; color: #333;">descrição do produto</strong>
            <div style="padding: 15px;">
              <p style="font-size: 20px;"><?php print($Info["descricao"])?></p>
            </div>
            <?php
            if ($Avaliacoes !== ""){
              ?>
              <strong style="font-size: 25px; color: #333;">avaliações do produto</strong> <br><br>
              <?php
              foreach($Avaliacoes as $avalia) {?>
                <div style="border: 1px; border-style: solid; border-color: #ced4da; border-width: 1px 0px 0px 0px;">
                  <div class="estrelas" style="margin-top: 15px;">
                    <?php
                    if($avalia["estrela"] == 1){
                      ?><label style="margin-bottom: 0;"><i class="fa"/></i></label>
                      <?php
                    }
                    elseif($avalia["estrela"] == 2){
                      ?><label style="margin-bottom: 0;"><i class="fa"/></i></label>
                        <label style="margin-bottom: 0;"><i class="fa"/></i></label><?php
                    }
                    elseif($avalia["estrela"] == 3){
                      ?><label style="margin-bottom: 0;"><i class="fa"/></i></label>
                        <label style="margin-bottom: 0;"><i class="fa"/></i></label>
                        <label style="margin-bottom: 0;"><i class="fa"/></i></label><?php
                    }
                    elseif($avalia["estrela"] == 4){
                      ?><label style="margin-bottom: 0;"><i class="fa"/></i></label>
                        <label style="margin-bottom: 0;"><i class="fa"/></i></label>
                        <label style="margin-bottom: 0;"><i class="fa"/></i></label>
                        <label style="margin-bottom: 0;"><i class="fa"/></i></label><?php
                    }
                    elseif($avalia["estrela"] == 5){
                      ?><label style="margin-bottom: 0;"><i class="fa"/></i></label>
                        <label style="margin-bottom: 0;"><i class="fa"/></i></label>
                        <label style="margin-bottom: 0;"><i class="fa"/></i></label>
                        <label style="margin-bottom: 0;"><i class="fa"/></i></label>
                        <label style="margin-bottom: 0;"><i class="fa"/></i></label><?php
                    }
                    ?>
                  </div>
                  <p style="font-size: 18px; margin: 0;"><?php print($avalia["avaliacao"]);?></p>
                  <p style="font-size: 14px; margin-bottom: 20px;"><?php echo $avalia["nomeusuario"];?></p>
                </div>
                <?php
                }
              }

            ?>
            <strong style="font-size: 25px; color: #333;">avaliar o produto</strong>
            <p>você precisa estar logado para avaliar o produto</p>

            <form method="POST" enctype="multipart/form-data">
              <div class="estrelas">
                <input type="radio" id="vazio" name="estrela" value="" checked>

                <label for="estrela_um"><i class="fa"></i></label>
                <input type="radio" id="estrela_um" name="estrela" value="1" checked>

                <label for="estrela_dois"><i class="fa"></i></label>
                <input type="radio" id="estrela_dois" name="estrela" value="2" checked>

                <label for="estrela_tres"><i class="fa"></i></label>
                <input type="radio" id="estrela_tres" name="estrela" value="3" checked>

                <label for="estrela_quatro"><i class="fa"></i></label>
                <input type="radio" id="estrela_quatro" name="estrela" value="4" checked>

                <label for="estrela_cinco"><i class="fa"></i></label>
                <input type="radio" id="estrela_cinco" name="estrela" value="5" checked>

              </div>

              <textarea type="text" name="avaliacao" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea><br>
              <input type="submit" class="btn" value="Enviar"/>
            </form>
          </div>
        </div>
      </div>
    </div>
