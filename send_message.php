<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

 
    $to = "nsummc7@gmail.com";

   
    $subject = "New Message from " . $name;
    $body = "You have received a new message:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";


    if (mail($to, $subject, $body, $headers)) {
        echo "<div class='success'>Message sent successfully!</div>";
    } else {
        echo "<div class='error'>There was an error sending your message. Please try again later.</div>";
    }
} else {
    echo "<div class='error'>Invalid request.</div>";
}
?>
