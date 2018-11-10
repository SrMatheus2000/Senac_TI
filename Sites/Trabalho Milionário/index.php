<html>
	<head>
			<?php
                include("include/libsql.php");
                includee("styles");
            ?>
		<title>Trabalho Milionário</title>
	</head>
	<body>
		<?php
		if (!isset($_POST["entrar"])) {
			session_start();
		}

            if (isset($_POST["deslogar"]) || !isset($_SESSION["id"])) {
                includee("cabecalho");
                includee("menu");
            } else {
                includee("cabecalho_logado");
                includee("menu_logado");
            }

            if (isset($_GET["login"])) {
                if (isset($_SESSION["id"])) {
                    includee("centro");
                } else {
                    includee("login");
                }
            } elseif (isset($_POST["deslogar"])) {
                includee("centro");
            } elseif (isset($_GET["cadastro"])) {
                includee("cadastro");
            } elseif (isset($_GET["editar"])) {
                includee("editar");
            } elseif (isset($_GET["produtos"])) {
                includee("cadastro_produtos");
            } elseif (isset($_GET["editar"])) {
                includee("editar_produtos");
            } elseif (isset($_GET["carrinho"])) {
                includee("carrinho");
            } elseif (isset($_GET["produto"])) {
                includee("telaproduto");
            } elseif (isset($_GET["pagina_usuario"])) {
                includee("pagina_usuario");
            } else {
                includee("centro");
            }

            includee("rodape");
        ?>
	</body>
	<?php
        includee("scripts");
    ?>
</html>
