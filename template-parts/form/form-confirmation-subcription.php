<?php

require 'form-newsletter.php';

$message = "Se ha subscrito Correctamente"; 
$from = "gersonrs99@gmail.com";
$subject = "Subcription";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html; charset=UTF-8". "\r\n";
$headers ="From:<$from> \r\n";
?>

<section class="confirmation">
    <h2>
<?php if(isset($_POST['subscribe'])){
    if(wp_mail($sub, $subject, $message, $headers)){
         echo " Gracias ". htmlspecialchars($name) . "por su registro!";
    } else {
        echo "failed to send email";
    }
} ?>
	   </h2>
	<ol>
		<li>Revise su correo (<?php echo htmlspecialchars($sub)?>) </li>
	</ol>
</section>
