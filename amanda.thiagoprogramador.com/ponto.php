<?php include 'header.php'; ?>
   <div class="container-fluid theme-showcase" role="main" style="margin-top: 20px;">
      
      <div class="page-header">
        Pontos marcados. 
      </div>

      <?php

      	$query = mysqli_query($link, 'SELECT * FROM ponto');
      	while($row = $query->fetch_assoc()){
      		//var_dump($row);
      		$data_marcada = $row['data_hora'];
      		
      		echo date("d-m-Y", $data_marcada);
      		
      		echo '<hr>';
      		?>



      		<?php
      	}

      ?>
      


      <br>



    </div> <!-- /container -->

<?php include 'footer.php'; ?>