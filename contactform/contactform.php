<?php
require_once("config.php");
if((isset($_POST['name'])&& $_POST['name'] !='') && (isset($_POST['email'])&& $_POST['email'] !='')){

    require_once("contact_mail.php");
    $yourName = $conn->real_escape_string($_POST['name']);
    $yourEmail = $conn->real_escape_string($_POST['email']);
    $yourPhone = $conn->real_escape_string($_POST['subject']);
    $comments = $conn->real_escape_string($_POST['message']);
    $sql="INSERT INTO contact (name, email, subject, message) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$comments."')";
    if(!$result = $conn->query($sql)){
        die('There was an error running the query [' . $conn->error . ']');
    } else {
        echo "Thank you! We will contact you soon";
    }
} else {
    echo "Please fill Name and Email";
}


?>