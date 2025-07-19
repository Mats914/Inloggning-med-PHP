<?php
// Ansluter till databasen med PDO (PHP Data Objects)
$host = 'localhost';          // Databasservern (lokalt på datorn)
$dbname = 'users_db';         // Namnet på databasen
$user = 'root';               // Användarnamn för databasen (i XAMPP)
$pass = '';                   // Lösenord för databasen (i XAMPP)

// Försöker skapa en PDO-anslutning till databasen
try {
    // Skapar ett nytt PDO-objekt med anslutningssträng och inloggningsuppgifter
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    
    // Ställer in så att fel visas som undantag (felhantering)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Om anslutningen misslyckas visas ett felmeddelande och scriptet avslutas
    die("Kunde inte ansluta till databasen: " . $e->getMessage());
}
?>
