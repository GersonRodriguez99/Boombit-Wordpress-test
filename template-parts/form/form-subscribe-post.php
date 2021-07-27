<?php 
// sanitize email
$sub = filter_input(INPUT_POST, 'email-sub', FILTER_SANITIZE_EMAIL);

?>