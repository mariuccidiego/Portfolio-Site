<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ottieni i valori inviati dal form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Indirizzo email a cui verrà inviata la email
    $to = "mariuccidiego@gmail.com";

    // Oggetto della email
    $subject = "Nuovo messaggio dal form di contatto";

    // Contenuto della email
    $body = "Nome: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Messaggio: \n" . $message;

    // Intestazioni della email
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    // Invia l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Grazie! Il tuo messaggio è stato inviato.";
    } else {
        echo "Si è verificato un errore durante l'invio del messaggio.";
    }
}
?>