<?php
//cabeçalho
include_once "includes/header.php";
?>
   <section class="row">
	<section class="col s12 m6 push-m3">
		<h3 class="ligth">Alterar dados do Aluno</h3>
		<form>
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="sobrenome" id="sobrenome">
				<label for="sobrenome">Sobre Nome</label>
			</div>
			<div class="input-field col s12">
				<select>
					<option value="" disabled selected></option>
					<option value="F">Feminino</option>
					<option value="M">Masculino</option>
					<option value="I">Indefinido</option>
				</select>
				<label>Selecione o Sexo</label>
			</div>
			<div class="input-field col s12">
				<i class="material-icons prefix">phone</i>
				<input type="tel" name="telefone" id="telefone">
				<label for="telefone">Telefone</label>
			</div>
			<div class="input-field col s12">
				<i class="material-icons prefix">email</i>
				<input type="email" name="email" id="email">
				<label for="email">E-mail</label>
			</div>
			<button type="submit" class="btn">Alterar</button>
			<a href="principal.php" class="btn green">Listar alunos</a>
			<a href="index.php" class="btn red">Sair</a>
		</form>
	</section>
   </section>
	

<?php
include_once "includes/footer.php"
?>