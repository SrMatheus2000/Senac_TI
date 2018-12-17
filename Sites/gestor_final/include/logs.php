<div class="container">
  <div class="row">
    <div class="col-md-12">
      <table
        class="
          table
          table-striped
          table-hover
          table-bordered"
        style="text-align: center;">
        <thead>
          <tr>
            <th>Usuário</th>
            <th>Página Acessada</th>
            <th>Data de Acesso</th>
            <!-- <th>Deletar Logs</th> -->
          </tr>
        </thead>
        <tbody>
          <?php
            $pegalogs = selecionadiversosdados(
              "SELECT *,
              DATE_FORMAT(
                DATE_SUB(
                  data,
                  INTERVAL 2 hour
                ),
                '%d/%c/%Y as %T'
              )
              AS datalog,
              `log`.id
              AS idlog
              FROM `log`
              INNER JOIN `usuario`
              ON `log`.idusuario = usuario.id
              ORDER BY data DESC"
            );
            foreach ($pegalogs as $logs) {
          ?>
          <tr>
            <td><?php echo ($logs["nome"]); ?></td>
            <td><?php echo ($logs["pagina"]); ?></td>
            <td><?php echo ($logs["datalog"]); ?></td>
            <!-- <td>
              <form
                method="post"
                style="
                  margin: -8 0 0 0;
                  height: 25;">
                <input
                  type="hidden"
                  name="Deletar"
                  value="
                    <?php
                      echo($logs["idlog"]);
                    ?>">
                <input
                  class="btn"
                  style="
                    margin: 0;
                    padding: 5 10;"
                  type="submit"
                  name="
                    <?php
                      echo($logs["idlog"]);
                    ?>"
                  value="Deletar">
              </form>
            </td> -->
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<style>
<body>
  background-color:#98FB98;
</body>
.form-control {
  background-color: #7CFC00;
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

/* .btn:hover {opacity: 1} */
</style>
<style>
.table {
  background-color:#32CD32}
</style>