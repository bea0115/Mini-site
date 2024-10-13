<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!empty($name) && !empty($email) && !empty($message)) {

        echo "<h1>Mulțumim pentru mesaj!</h1>";
        echo "<p>Nume: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Mesaj: $message</p>";
    } else {
        echo "<h1>Toate câmpurile sunt obligatorii!</h1>";
    }
} else {
    echo "<h1>Acces interzis!</h1>";
}
?>
