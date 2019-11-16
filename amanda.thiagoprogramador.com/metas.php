<?php
 include 'header.php';
 ?>
<div class="container">
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="#">Pessoal</a></li>
  <li class="active">Metas</li>
</ol>
</div>
 <div class="container">
    
    <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12 pull-right">
            <?php
            $categoria = isset($_GET['categoria']);
            if($categoria == false){
                $query = mysqli_query($link, 'SELECT * FROM metas WHERE apagar = 0 order by data ASC');
                while($row = $query->fetch_assoc()){
           ?>
            <div class='row'>
                <div class="col-lg-5">
                    <img src="<?=$row['imagem']?>" class="img-responsive" />
                    <br>
                    <a href="<?=$url?>/metas.php/?remover=1&id=<?=$row['id']?>">Remover</a>
                </div>
                <div class="col-lg-7">
                    <p>
                        <strong><?php echo $row['meta']?></strong> <br>
                        <hr>
                        <?=$row['descricao']?>
                        <br>
                    </p>
                </div>
            </div>
            <hr>
            <?php 
                } 
            }else{
                $categoria_id = $_GET['categoria'];
                $query = mysqli_query($link, 'SELECT * FROM metas WHERE apagar = 0 AND categoria = '.$categoria_id.' order by data ASC');

                while($row = $query->fetch_assoc()){
                    ?>

                        <div class='row'>
                            <div class="col-lg-5">
                                <img src="<?=$row['imagem']?>" class="img-responsive" />
                                <br>
                                <a href="<?=$url?>/metas.php/?remover=1&id=<?=$row['id']?>">Remover</a>
                            </div>
                            <div class="col-lg-7">
                                <p>
                                    <strong><?php echo $row['meta']?></strong> <br>
                                    <hr>
                                    <?=$row['descricao']?>
                                    <br>
                                </p>
                            </div>
                        </div>
                        <hr>

                    <?php
                }
            }
            ?>

    </div>
    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 pull-left">
        <?php include 'metas-sidebar.php'; ?>
    </div>
<div>



</div>

 <?php 
 include 'footer.php';
 ?>