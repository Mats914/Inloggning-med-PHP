<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login_form.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <title>Skyddad sida</title>
</head>
<body>
  <h1>Välkommen, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h1>
  <p>Du är inloggad.</p>
  <a href="logout.php">Logga ut</a>
</body>
</html>
