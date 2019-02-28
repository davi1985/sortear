<?php include 'header.php'; ?>
<?php session_start(); ?>
<?php require 'register.php'; ?>


<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<h2>Cadastre o seu e-mail</h2>
		<form class="form" method="POST">
			<div class="form-group">
				<input type="email" name="email" class="form-control">
			</div>
			<input type="submit" value="Cadastrar" class="btn btn-primary form-control">			
		</form>
	</div>
</div>

<a href="draw.php" class="btn btn-success">REALIZAR SORTEIO</a><hr>

<div>
	<?php 
		
	 ?>
</div>

<table class="table">
	<tr>
		<th>Emails já cadastrados</th>
	</tr>
	<!-- listing registered emails -->
	<?php foreach ($emails as $email_item) : ?>
		<tr>
			<td><?php echo $email_item; ?></td>
		</tr>
	<?php endforeach; ?>
</table>

<?php include 'footer.php'; ?>
