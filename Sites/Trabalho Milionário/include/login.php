<script>

    $(document).ready(function() {
        $("#btn").click(teste);
    });


    function teste() {
        var login = $("#iptlogin").val();

        if (login == "") {
            $("#iptlogin").css({
                'border': '1px solid red'
            });

        }
    }
</script>

<div class="container" style="width: 80%;">
    <div class="row">
        <div class="col-md-2">
            <?php
                include("include/categorias.php");
            ?>
        </div>
        <div class="col-md-8">
            <div class="container-fluid">
                <div class="row">
                    <div
                        class="col-md-12"
                        style="
							height: auto;
							padding: 5px;">
                        <form method="post" id="form" style="text-align: center;">
                            <h1>Login</h1>
                            <br>
                            <input
                                type="text"
                                name="iptlogin"
                                id="iptlogin"
                                placeholder="Email ou CPF" />
                            <p id="idLog"> </p>
                            <!-- <br> -->
                            <input
                                type="password"
                                name="iptsenha"
                                id="iptsenha"
                                placeholder="Senha" />
                            <p id="idSen"> </p>
                            <!-- <br> -->
                            <input
                                type="submit"
                                value="Entrar"
                                name="entrar"
                                id="entrar"
                                class="btn"
                                onclick="
									login()
									senha()"/>
                            <br>
                        </form>



                        <?php
                            // if (isset($_POST["entrar"])) {
                            //     if ($_POST["login"] != "" && $_POST["senha"] != "") {
                            //         if (isset($_SESSION["id"])) {
                            //             echo "<center>Usuário \"Logado\"!</center>";
                            //         } else {
                            //             echo "<center>Usuário ou senha incorretos!</center>";
                            //         }
                            //     } else {
                            //         echo "<center>Digite todos os seus dados!</center>";
                            //     }
                            // }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <?php
                include("include/anuncios.php");
            ?>
        </div>
    </div>
</div>


<script type="text/javascript">

    function login() {
        var login = $("#iptlogin").val();
        if (login == "") {
            $("#iptlogin").css("border", "solid fuchsia").focus();
            $("#idLog").html("Login em branco!");
            return false;
        } else {
            $("#iptlogin").css("border", "");
            $("#idLog").html("");
            return true;
        }
    }

    function senha() {
        var senha = $("#iptsenha").val();
        if (senha == "") {
            $("#iptsenha").css("border", "solid fuchsia").focus();
            $("#idSen").html("Senha em branco!");
            return false;
        } else {
            $("#iptsenha").css("border", "");
            $("#idSen").html("");
            return true;
        }
    }

</script>
