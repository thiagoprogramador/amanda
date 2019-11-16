<?php 
    include 'header.php'; 
    
?>

    <div class="container-fluid theme-showcase" role="main" style="margin-top: 20px;">
      
      <div class="page-header">
        Principal 
      </div>

      <p>Marcação de ponto de trabalho: <a href="#" class="btn btn-default" data-toggle="modal" data-target="#pontodetrabalho">MARCAR PONTO</a> </p>

      <!-- espaco de modal -->
        <!-- Modal -->
            <div class="modal fade" id="pontodetrabalho" tabindex="-1" role="dialog" aria-labelledby="pontodetrabalho">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Ponto de trabalho</h4>
                  </div>
                  <div class="modal-body">
                    <p>
                      <br>
                      Hora atual: <?php echo date('G:i');?> <br>
                      <hr>
                      Horários definidos de trabalho:<br>
                      <b>Inicio de expediente: <span class="verde">09:00</span></b> <br>
                      <b>Saída para almoço: <span class="verde">12:00</span></b> <br>
                      <b>Volta de almoço: <span class="verde">13:00</span></b> <br>
                      <b>Fim de expediente: <span class="verde">19:00</span></b> <br>
                    </p>
                  </div>
                  <div class="modal-footer">
                    <form method="post" action="includes/ponto.php">
                      <input type="hidden" value="<?php echo $horaatual; ?>" name="horaatual">
                        <button type="submit" class="btn btn-primary" name="enviar_data_hora">Marcar ponto</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
      <!-- espaco de modal -->



      <br>



    </div> <!-- /container -->

<?php include 'footer.php'; ?>