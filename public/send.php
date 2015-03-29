<?php

// Get the form values
$name = $_POST['name'];
$email = $_POST['email'];
$os = $_POST['os'];

mail('samuel@zaprri.com', 'New Beta User', 'Name: ' . $name . ' \n Email: '. $email . ' \n OS: '. $os);

header("Location:  ./thanks.php");
die();
?>
