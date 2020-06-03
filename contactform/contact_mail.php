<?php
$toEmail = "javier.aranda.javier@gmail.com";
$mailHeaders = "From: " . $_POST["email"]."\r\n";
if(mail($toEmail, $_POST["subject"], $_POST["message"], $mailHeaders)) {
    
} else {
    echo"<p class='Error'>Problem in Sending Mail.</p>";
}
?>