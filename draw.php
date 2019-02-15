<?php 
session_start();
require 'register.php';

$_SESSION['emails'] = $emails;

$totalEmailsRegister = count($emails);
$drawEmail = rand(0, $totalEmailsRegister);

echo "<h1>O e-mail sorteado foi:</h1>";
echo "<h2>{$emails[$drawEmail]}</h2>";