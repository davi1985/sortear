<?php 
require 'register.php';

$_SESSION['emails'] = $emails;

$totalEmailsRegister = count($emails);
$drawEmail = rand(0, $totalEmailsRegister);

echo $emails[$drawEmail];