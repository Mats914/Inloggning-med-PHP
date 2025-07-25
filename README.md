# Inloggningssystem
## 📄 Beskrivning (Svenska):

Detta är ett enkelt inloggningssystem byggt med PHP och MySQL. Projektet innehåller registrering, inloggning och en skyddad sida som bara är tillgänglig för inloggade användare.

## Funktioner

- Användarregistrering med lösenordshashning
- Inloggning med sessionshantering
- Skyddad sida som bara kan nås efter inloggning
- Enkel HTML och formulärvalidering
🛡️ Säkerhetsåtgärder
- XSS-skydd genom htmlspecialchars()
- Lösenord hashas med password_hash()
- Inloggning verifieras med password_verify()
- SQL Injection skyddas med förberedda statements
📁 Filer
- register.php – Sida för registrering av nya användare
- login.php – Inloggningssida
- protected.php – Sida som bara kan nås efter inloggning
- logout.php – Loggar ut användaren
- db.php – Innehåller databasanslutningen
🧪 Testanvändare
Användarnamn: test
Lösenord: 1234


# Login System
## Description (English)
This is a simple login system built with PHP and MySQL. The project includes user registration, login, and a protected page accessible only after logging in.

##  Features
- User registration with password hashing
- Login using PHP sessions
- Protected page accessible only to logged-in users
- Basic HTML with form validation
🛡️ Security Measures
- XSS protection using htmlspecialchars()
- Passwords are hashed using password_hash()
- Login verified with password_verify()
- SQL Injection prevented using prepared statements
📁 Files
- register.php – Page to register new users
- login.php – Login page
- protected.php – Page accessible after login
- logout.php – Logs the user out
- db.php – Contains the database connection
🧪 Test User
Username: test
Password: 1234
