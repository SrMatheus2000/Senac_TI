<?php
    function conectarbanco()
    {
        /*Alterar dados de conexão com banco.*/
        $host = "localhost";
        $banco = "u821233505_urex";
        $usuario = "u821233505_urex";
        $senha = "trabalhomilionario";
        $porta = "3306";

        /* Não mexer. */
        $conn = new PDO('mysql:host=' . $host . ';port=' . $porta . ';dbname=' . $banco . '', $usuario, $senha);

        return $conn;
    }

    function executasql($sql)
    {
        $conn = conectarbanco();
        $conn->query($sql);
    }

    function selecionadiversosdados($sql)
    {
        $conn = conectarbanco();
        $retorno = $conn->prepare($sql);
        $retorno->execute();
        return $retorno;
    }

    function selecionaumdado($sql)
    {
        $conn = conectarbanco();
        $retorno = $conn->query($sql);
        return $retorno->fetch();
    }

  function includee($a)
  {
      if ($a == "styles") {
          include 'include/styles.php';
      } elseif ($a == "cabecalho") {
          include 'include/cabecalho.php';
      } elseif ($a == "cabecalho_logado") {
          include 'include/cabecalho_logado.php';
      } elseif ($a == "menu") {
          include 'include/menu.php';
      } elseif ($a == "menu_logado") {
          include 'include/menu_logado.php';
      } elseif ($a == "login") {
          include 'include/login.php';
      } elseif ($a == "cadastro") {
          include 'include/cadastro.php';
      } elseif ($a == "centro") {
          include 'include/centro.php';
      } elseif ($a == "rodape") {
          include 'include/rodape.php';
      } elseif ($a == "scripts") {
          include 'include/scripts.php';
      } elseif ($a == "carrinho") {
          include 'include/carrinho.php';
      } elseif ($a == "cadastro_produtos") {
          include 'include/cadastro_produtos.php';
      } elseif ($a == "telaproduto") {
              include 'include/telaproduto.php';
      }elseif (isset($_SESSION["id"]) && $_SESSION["id"] != "0") {
          if ($a == "editar") {
              include 'include/editar_produtos.php';
          }  elseif ($a == "pagina_usuario") {
              include 'include/pagina_usuario.php';
          }
      } else {
          echo "Página não permitida!";
      }

      // elseif ($_SESSION) {
    //   if ($a == ) {
    //     include 'include/exercicio5.gestor.php';
    //   } elseif ($a == ) {
    //     include 'include/exercicio5.menu.php';
    //   } elseif ($_SESSION["usuariopai"] == 0) {
    //     if ($a == ) {
    //       include 'include/exercicio5.salario.php';
    //     } elseif ($a == ) {
    //       include 'include/exercicio5.despesa.php';
    //     }
    //   } else {
    //     echo "Página não permitida!";
    //   }
    // }
  }

  if (isset($_POST["entrar"])) {
      if ($_POST["iptlogin"] != "" && $_POST["iptsenha"] != "") {
          $usuario = selecionaumdado(
            "SELECT *
            FROM `cadastro_pessoa`
            WHERE (email = '".$_POST["iptlogin"]."'
    		OR 	  CPF    = '".$_POST["iptlogin"]."')
            AND   senha  = '".$_POST["iptsenha"]."'"
          );
          if ($usuario) {
              session_start();
              $_SESSION["id"]    = $usuario["id"];
              $_SESSION["email"] = $usuario["email"];
              $_SESSION["nome"]  = $usuario["nome"];
              $_SESSION["senha"] = $usuario["senha"];
          }
      }
  } else {
      if (isset($_POST["deslogar"])) {
          session_start();
          session_destroy();
      }
  }

 /*         carrinho                    */

    /* função conecta_carrinho para fazer conexão com o banco de dados tem que fazer um só conectarbanco*/
    function conecta_carrinho(){
      //Dados do banco de dados
      define("DB_HOST", "localhost");
      define("DB_NAME", "u821233505_urex");
      define("DB_USER", "u821233505_urex");
      define("DB_PASS", "trabalhomilionario");

      //Conexao com Banco de Dados
      return new PDO(sprintf("mysql:host=%s;dbname=%s", DB_HOST, DB_NAME), DB_USER, DB_PASS);
    }

    function getProducts($pdo){
    	$sql = "SELECT * FROM produto";
    	$stmt = $pdo->prepare($sql);
    	$stmt->execute();
    	return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getProductsByIds($pdo, $ids) {
    	$sql = "SELECT * FROM produto WHERE id IN (".$ids.")";
    	$stmt = $pdo->prepare($sql);
    	$stmt->execute();
    	return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }




    if(!isset($_SESSION['carrinho'])) {
    	$_SESSION['carrinho'] = array();
    }

    function addCart($id, $quantity) {
    	if(!isset($_SESSION['carrinho'][$id])){
    		$_SESSION['carrinho'][$id] = $quantity;
    	}
    }

    function deleteCart($id) {
    	if(isset($_SESSION['carrinho'][$id])){
    		unset($_SESSION['carrinho'][$id]);
    	}
    }

    function updateCart($id, $quantity) {
    	if(isset($_SESSION['carrinho'][$id])){
    		if($quantity > 0) {
    			$_SESSION['carrinho'][$id] = $quantity;
    		} else {
    		 	deleteCart($id);
    		}
    	}
    }

    function getContentCart($pdo) {

    	$results = array();

    	if($_SESSION['carrinho']) {

    		$cart = $_SESSION['carrinho'];
    		$products =  getProductsByIds($pdo, implode(',', array_keys($cart)));

    		foreach($products as $product) {

    			$results[] = array(
    							  'id' => $product['id'],
    							  'name' => $product['nome'],
    							  'price' => $product['preco'],
                    'imagem' => $product['imagem'],
    							  'quantity' => $cart[$product['id']],
    							  'subtotal' => $cart[$product['id']] * $product['preco'],
    						);
    		}
    	}

    	return $results;
    }

    function getTotalCart($pdo) {

    	$total = 0;

    	foreach(getContentCart($pdo) as $product) {
    		$total += $product['subtotal'];
    	}
    	return $total;
    }

   /*        Fim carrinho                         */
