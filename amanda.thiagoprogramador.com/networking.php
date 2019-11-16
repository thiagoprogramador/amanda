<?php
 include 'header.php';
 include 'includes/insere_pessoa.php'; 
?>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">CADASTRAR NOVA PESSOA</h4>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" method="post">
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <div class="form-group">
            <label>
                Nome
            </label>
            <input type="text" name="nome" class="form-control" placeholder="">

            <br>
            <label>
                Imagem
            </label>
            <input type="file" name="userfile" class="form-control">
            <br>
        </div>
      </div>
      <div class="modal-footer">
        <input type="submit" name="enviar_inserepessoa" class="btn btn-primary" value="Enviar">
      </div>
  </form>
    </div>
  </div>
</div>




<div class="container">
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">Networking</li>
  <div class="pull-right">
        <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span> CADASTRAR
        </button>
  </div>
</ol>

</div>
 <div class="container">
            <?php
                  $maior = mysqli_query($link, 'SELECT * FROM networking order by ponto ASC LIMIT 1');
                  $mario_resultado = mysqli_fetch_assoc($maior);
                  
                  $menor = mysqli_query($link, 'SELECT * FROM networking order by ponto DESC LIMIT 1');
                  $menor_resultado = mysqli_fetch_assoc($menor);



                $query = mysqli_query($link, 'SELECT * FROM networking order by ponto ASC');
                while($row = $query->fetch_assoc()){
                    $pontuacao = $row['ponto'];
                    $soma = $pontuacao + 1;
                    $subtrai = $pontuacao - 1;
                    $div = $pontuacao % 5;




           ?>
            <div class='col-lg-3 col-md-3 col-xs-12 col-sm-12'>
                <div class="user_div">
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                        <img src="<?=$row['imagem']?>" class="img-responsive img-thumbnail img-bordered" />
                    </div>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                            <p><strong><?=$row['nome']?></strong> <br>
                                <?php var_dump($div); ?>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span> <br>
                                <?=$row['ponto']?> <br>
                                <a href="<?=$url?>/networking.php?ponto=<?php echo $soma; ?>&id=<?=$row['id']?>" class="btn btn-default btn-xs"> <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></a>
                                <a href="<?=$url?>/networking.php?ponto=<?php echo $subtrai; ?>&id=<?=$row['id']?>" class="btn btn-default btn-xs"> <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span></a>
                                <a href="<?=$url?>/networking.php?excluir=1&id=<?=$row['id']?>" class="btn btn-danger btn-xs"> <span class="
glyphicon glyphicon-trash
glyphicon" aria-hidden="true"></span></a>
                            </p>
                    </div>
                </div>
            </div>
            <?php 
                } 
           
            ?>
<div>



</div>

 <?php 
 include 'footer.php';
 ?>