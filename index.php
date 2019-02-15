<?php 
session_start(); 
require 'register.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de E-mails</title>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
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
		<br>
		<div class="col-sm-6 col-sm-offset-3">
			<a href="draw.php" class="btn btn-success">Realizar Sorteio!</a>
		</div>
		<hr>
		<div class="col-sm-8 col-sm-offset-2">
			<table class="table">
				<tr>
					<th>Emails já cadastrados</th>
				</tr>
				
				<?php foreach ($emails as $email_item) : ?>
					<tr>
						<td><?php echo $email_item; ?></td>
					</tr>
				<?php endforeach; ?>

			</table>		
		</div>	
	</div>	
</body>
</html>