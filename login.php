<?php 
session_start(); // Startar en session för att kunna spara inloggningsstatus

require 'db.php'; // Inkluderar databaskopplingen från extern fil

// Kontrollerar om formuläret har skickats med POST-metoden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];         // Hämtar användarnamn från formuläret
    $password = $_POST['password']; // Hämtar lösenord från formuläret

    // Skyddar mot XSS (Cross Site Scripting) genom att rensa användarnamnet
    $name = htmlspecialchars($name);

    // Förbereder och kör en säker SQL-fråga (prepared statement) för att hämta användaren
    $stmt = $pdo->prepare("SELECT * FROM users WHERE name = ?");
    $stmt->execute([$name]);
    $user = $stmt->fetch(); // Hämtar användaren från databasen (om den finns)

    // Kontrollerar om användaren finns och om lösenordet är korrekt (hashad jämförelse)
    if ($user && password_verify($password, $user['password'])) {
        // Inloggningen lyckades - sparar information i sessionen
        $_SESSION['loggedin'] = true;
        $_SESSION['name'] = $name;

        // Skickar användaren till den skyddade sidan
        header("Location: protected.php");
        exit; // Avslutar skriptet
    } else {
        // Inloggningen misslyckades - felmeddelande visas
        echo "Fel användarnamn eller lösenord.";
    }
}
?>
