

<?php
    global $wpdb;     
    $table_name = $wpdb->prefix . 'user_invoice_register';    
    $key = 1; 
    $dater =  date("Y-m-d"); 
   
$message = $name . " " . $amount . " " . $invoice ; 
$from = "gersonrs99@gmail.com";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html; charset=UTF-8". "\r\n";
$headers ="From:<$from> \r\n";


?>

<section class="confirmation">
    <h2>
        <?php if(isset($_POST['submit']))
{
    $wpdb->insert('wp_user_invoice_register', array('public_key' => $document, 'mail' => $email, 'document_id' => $document, 'user' => $name , 'phone' => $phone , 'invoice'=>$invoice , 'amounts' => $amount, 'invoice_date'=>$date)); 

    if(wp_mail($email, $invoice, $message, $headers)){
         echo " Gracias ". htmlspecialchars($name) . "por su registro!";

    } else {
        echo "failed to send email";
    }
} ?>
	   
	</h2>
	<ol>
		<li>Revise su correo (<?php echo htmlspecialchars($email) ?>) </li>
	</ol>
</section>