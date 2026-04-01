<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = $_POST['comment'];

    // Send email
    $to = "awelsurur69@gmail.com";
    $subject = "New Comment";
    $message = "User comment: " . $comment;

    mail($to, $subject, $message);

    echo "Message sent!";
}
?>