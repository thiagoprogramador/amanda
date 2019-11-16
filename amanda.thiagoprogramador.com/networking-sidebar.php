<?php
	include 'includes/insere_pessoa.php'; 
?>
<!-- Button trigger modal -->
<div class='text-center'>

</div>
<br>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">CADASTRAR NOVA PESSOA</h4>
      </div>
      <div class="modal-body">
        <form method="post">
      	<div class="form-group">
      		<label>
      			Nome do objetivo?
      		</label>
      		<input type="text" name="nome_objetivo" class="form-control" placeholder="O que você deseja, já é seu!">

      		<br>
      		<label>
      			Imagem do objetivo
      		</label>
      		<input type="text" name="imagem_objetivo" class="form-control" >
      		<br>

      		<label>
      			Imagem do objetivo
      		</label>
      		<select class="form-control" name="categoria">
      			<option value="">Selecione a categoria</option>
      			<option value="1">Financeira</option>
      			<option value="2">Objetivo pessoal</option>
      			<option value="3">Metas familiar</option>
      			<option value="4">Lugares</option>
      			<option value="5">Diversão</option>
      			<option value="6">Livro</option>
      		</select>
      		<br>

      		<label>
      			Afirmação sobre o objetivo
      		</label>
      		<textarea class="form-control" name="descricao_objetivo"></textarea>
      		<br>
      	</div>

      </div>
      <div class="modal-footer">
        <input type="submit" name="enviar_objetivoparaouniverso" class="btn btn-primary" value="Enviar para o universo">
      </div>
  </form>
    </div>
  </div>
</div>


<ul class="nav nav-stacked text-center">
        <li role="presentation"><a href="?categoria=1">Financeiras</a></li>
        <li role="presentation"><a href="?categoria=2">Objetivos pessoais</a></li>
        <li role="presentation"><a href="?categoria=3">Metas familiar</a></li>
        <li role="presentation"><a href="?categoria=4">Lugares</a></li>
        <li role="presentation"><a href="?categoria=5">Diversão</a></li>
        <li role="presentation"><a href="?categoria=6">Livro</a></li>
        <li role="presentation"><a href="">Concluídas</a></li>
</ul>