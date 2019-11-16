<?php 
    include 'header.php'; 
    include 'includes/insere_senha.php';    
?>


    <div class='container'>
    <div class="page-header">
        <h2>PAINEL DE SENHAS  <a href="" class="btn btn-default"  data-toggle="modal" data-target="#adicionarconta"> ADICIONAR <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></h2>
    </div>



    <!-- modal de adicionar nova conta -->
            <!-- Button trigger modal -->
            <div class="modal fade" id="adicionarconta" tabindex="-1" role="dialog" aria-labelledby="adicionarcontaLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="adicionarcontaLabel">Adicionar nova conta</h4>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label>Nome do cliente</label><br>
                            <input type="text" class="form-control" name="nome_cliente" required/>
                        </div>
                        <div class="form-group">
                            <label>Nome do projeto</label><br>
                            <input type="text" class="form-control" name="nome_projeto" required/>
                        </div>
                        <div class="form-group">
                            <label>Serviço</label><br>
                            <input type="text" class="form-control" name="servico" required/>
                        </div>
                        <div class="form-group">
                            <label>Link de acesso</label><br>
                            <input type="text" class="form-control" name="link_acesso" required/>
                        </div>
                        <div class="form-group">
                            <label>Login</label><br>
                            <input type="text" class="form-control" name="login" required/>
                        </div>
                        <div class="form-group">
                            <label>Senha</label><br>
                            <input type="text" class="form-control" name="senha" required/>
                        </div>
                        <p>Hora de registro: 10:00</p>
                    
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="enviar" name="enviar">
                </div>
                </form>
                </div>
            </div>
            </div>
    <!-- modal de adicionar nova conta -->

    <!--Table-->
<table id="tablePreview" class="table">
<!--Table head-->
  <thead>
    <tr>
      <th>#</th>
      <th>Nome do cliente</th>
      <th>Nome do projeto</th>
      <th>Serviço</th>
      <th>Link de acesso</th>
      <th>Login</th>
      <th>Senha</th>
      <th>Alterar</th>
      <th>Apagar</th>
    </tr>
  </thead>
  <!--Table head-->
  <!--Table body-->
  <tbody>
   <?php
        $query = mysqli_query($link, 'SELECT * FROM senhas order by nome_cliente ASC');
        while($row = $query->fetch_assoc()){
   ?> 
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['nome_cliente']; ?></td>
      <td><?php echo $row['nome_projeto']; ?></td>
      <td><?php echo $row['servico']; ?></td>
      <td align="center"><a href="<?php echo $row['link_acesso']; ?>" target="_blaknk">LINK</a></td>
      <td align="center"> 
          <input value="<?php echo $row['login']; ?>" id="login<?php echo $row['id']; ?>" style="text-align:center"/>
          <br><a href="javascript:void(0);" class="copiar" data-clipboard-target="#login<?php echo $row['id']; ?>">COPIAR</a></td>
        <td align="center"> 
          <input value="<?php echo $row['senha']; ?>" id="senha<?php echo $row['id']; ?>" style="text-align:center"/>
          <br><a href="javascript:void(0);" class="copiar" data-clipboard-target="#senha<?php echo $row['id']; ?>">COPIAR</a></td>
        </td>
      <td><a href="" class="btn btn-warning btn-xs">ALTERAR</a></td>
      <td><a href="" class="btn btn-xs btn-danger">REMOVER</a></td>
    </tr>
        <?php } ?>

  </tbody>
  <!--Table body-->
</table>
<!--Table-->
    </div>

<?php include 'footer.php'; ?>