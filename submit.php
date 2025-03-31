<?php
$to = "osikajulian@gmail.com";
$subject = "Nowe zgłoszenie";

$headers = "From: no-reply@osjulian.pl\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8";


$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$additionalInfo = $_POST['additionalInfo'];

$message = "Imię: $firstName\n";
$message .= "Nazwisko: $lastName\n";
$message .= "Nr telefonu: $phoneNumber\n";
$message .= "Email: $emial\n";
$message .= "Informacje o zakładzie: \n$additionalInfo";

$mailSent = mail($to, $subject, $message, $headers);

if ($mailSent) {
    echo "Wiadomość została wysłana.";
} else {
    echo "Błąd przy wysyłaniu wiadomości.";
}

header("Location: thank-you.html");
exit();
?>