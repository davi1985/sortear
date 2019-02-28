<?php 
session_start();
include 'header.php';
require 'register.php';

$totalEmailsRegister = count($emails);
$drawEmail = rand(0, ($totalEmailsRegister - 1));
?>

<h1>O e-mail sorteado foi: </h1>
<h2><?php echo $emails[$drawEmail]; ?></h2>

<p>Realizar novo sorteio?</p>
<a href="index.php">Voltar</a>

<div class="alert alert-info">
    Foram cadastrados: <?php echo $totalEmailsRegister; ?> emails.
</div>

<?php include 'footer.php' ?>
