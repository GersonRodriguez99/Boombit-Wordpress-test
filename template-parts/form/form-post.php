<?php
// validate name
$name = filter_input(INPUT_POST, 'user-name', FILTER_SANITIZE_STRING);
$inputs['user-name'] = $name;

if (!$name || strlen($name) === 0) {
	$errors['user-name'] = 'Ingrese su nombre';
    
}

// sanitize email
$email = filter_input(INPUT_POST, 'email-address', FILTER_SANITIZE_EMAIL);
$inputs['email-address'] = $email;

if ($email) {
	// validate email
	$email = filter_var($email, FILTER_VALIDATE_EMAIL);
	if (!$email) {
		$errors['email-address'] = 'Please enter a valid email';
	}
} else {
	$errors['email-address'] = 'Ingrese su correo';

}
//Clear Date
$date = preg_replace("([^0-9/])", "", $_POST['invoice-date']);
$inputs['invoice-date'] = $date;

// Sanitize Document
$document = filter_input(INPUT_POST, 'user-document', FILTER_SANITIZE_STRING);
$inputs['user-document'] = $document;

if (!$document || strlen($document) < 16) {
	$errors['user-document'] = 'Ingrese un numero de cedula valido';
    
}

// Sanitize Phone
$phone = filter_input(INPUT_POST, 'user-phone', FILTER_SANITIZE_STRING);
$inputs['user-phone'] =$phone;

$invoice = filter_input(INPUT_POST, 'invoice-number', FILTER_SANITIZE_STRING);
$inputs['invoice-number'] =$invoice;

if (!$invoice || strlen($invoice) === 0) {
	$errors['invoice-number'] = 'Por favor Ingrese el Numero de Factura';
    
}

//Sanitize amount 
$amount = filter_input(INPUT_POST, 'amount',  FILTER_SANITIZE_NUMBER_FLOAT);
$inputs['amount'] = $amount;



?>

