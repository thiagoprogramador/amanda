<?php
 include 'header.php';
 ?>
<div class="container">
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="#">Pessoal</a></li>
  <li class="active">Treino</li>
</ol>
</div>
 <div class="container">
    <div class="page-header">
        <h2>Treino</h2>
    </div>
    
    
    <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12 pull-right">
        <?php 
            function getInstagramFeeds($limit = 1){
        $api_url = "https://api.instagram.com/v1/users/self/media/recent/?access_token=5400382125.1677ed0.1b573b3254d249c4be2a4ad18d7c712d&count=".$limit;
        $connection_c = curl_init(); // initializing
        curl_setopt( $connection_c, CURLOPT_URL, $api_url ); // API URL to connect
        curl_setopt( $connection_c, CURLOPT_RETURNTRANSFER, 1 ); // Return the result, do not print
        curl_setopt( $connection_c, CURLOPT_TIMEOUT, 20 );
        $json_return = curl_exec( $connection_c ); // Connect and get json data
        curl_close( $connection_c ); // Close connection
        $insta = json_decode( $json_return ); // Decode and return
        foreach($insta->data as $feed){
                /* Photo Type
                * thumbnail
                * low_resolution
                * standard_resolution
                */
            $items[] = array($feed->link, $feed->images->standard_resolution->url);
        }
        return $items;
    }

       $instaItems = getInstagramFeeds(4);
    if(!empty($instaItems)):
    ?>
    <ul>
        <?php
        foreach($instaItems as $instaImage):
            $instaLink = $instaImage[0]; // Instagram photo link
            $instaImg = $instaImage[1]; //Instagram Image
        ?>
        <li> <a href="<?=$instaLink?>" target="_blank"><img src="<?php echo $instaImg; ?>"></a></li>
       <?php  endforeach; ?>
    </ul>
    <?php endif;
        ?>




                
    </div>
    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 pull-left">
    <ul class="nav nav-stacked text-center">
        <li role="presentation"><a href="#">SEGUNDA-FEIRA</a></li>
        <li role="presentation"><a href="#">TERÇA-FEIRA</a></li>
        <li role="presentation"><a href="#">QUARTA-FEIRA</a></li>
        <li role="presentation"><a href="#">QUINTA-FEIRA</a></li>
        <li role="presentation"><a href="#">SEXTA-FEIRA</a></li>
        <li role="presentation"><a href="#">SABADO</a></li>
        <li role="presentation"><a href="#">DOMINGO</a></li>
        <li role="presentation"><a href="lista_treino.php">LISTA DE TREINOS</a></li>
        <li role="presentation"><a href="treinos_feedmotivacao.php">Feed motivação</a></li>
    </ul>
    </div>
<div>



</div>

 <?php 
 include 'footer.php';
 ?>