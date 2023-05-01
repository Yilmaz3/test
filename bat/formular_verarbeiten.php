<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // E-Mail-Inhalte erstellen
  $to = "webduo.yunds@gmail.com";
  $subject = "Neue Formularnachricht";
  $message_body = "Name: $name\n";
  $message_body .= "E-Mail: $email\n";
  $message_body .= "Nachricht:\n$message";
  
  // E-Mail senden
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  
  mail($to, $subject, $message_body, $headers);
  
  // Weiterleitung oder Bestätigungsnachricht anzeigen
  // z.B. header("Location: danke.html");
  // oder echo "Vielen Dank für Ihre Nachricht!";
}
?>


