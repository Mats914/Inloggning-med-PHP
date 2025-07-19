<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <title>Logga in</title>
</head>
<body>
  <h2>Logga in</h2>
  <form action="login.php" method="post">
    <label for="name">Användarnamn:</label>
    <input type="text" name="name" required><br><br>

    <label for="password">Lösenord:</label>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Logga in">
  </form>
</body>
</html>
