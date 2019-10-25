<?php
//cabeçalho
include_once "includes/header.php";
?>
   <section class="row">
	<section class="col s12 m6 push-m3">
		<h3 class="ligth">Listar Alunos</h3>
		<table class="stripped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Sobre Nome</th>
					<th>Sexo</th>
					<th>E-mail</th>
					<th>Telefone</th>
					<th>Editar</th>
					<th>Excluir</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Francisco Nash</td>
					<td>Lima Ferreira</td>
					<td>Masculino</td>
					<td>fnash@gmail.com</td>
					<td>(99)99999-9999</td>
					<td><a href="alterar.php" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
					<!--Botão excluir-->
					<td>
						<a  data-target="modal1" href="" class="btn-floating waves-effect waves-light modal-trigger red"><i class="material-icons">delete</i></a>
						  <!-- Modal Structure -->
						<div id="modal1" class="modal">
						  <div class="modal-content">
						     <h4>Deseja realmente excluir o aluno?</h4>
						     <p>Francisco Nash Lima Ferreira</p>
						   </div>
						   <div class="modal-footer">
						     <a href="#!"	 class="btn red modal-close waves-effect waves-green btn-flat">Sim</a>
						     <a href="#!"	 class="btn blue modal-close waves-effect waves-green btn-flat">Não</a>
						   </div>
						  </div>
					</td>
					<!--Fim botão excluir-->
				</tr>
			</tbody>
		</table>
		<br>
		 <a href="cadastrar.php"class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>
		 <a href="index.php" class="btn red">Sair</a>
	</section>
   </section>
	
	          

<?php
include_once "includes/footer.php"
?>