<?php
$emails= !isset($_SESSION['emails']) ? [] : $_SESSION['emails'];

if(isset($_POST['email']) and !empty($_POST['email'])) {
	array_push($emails, $_POST['email']);
}