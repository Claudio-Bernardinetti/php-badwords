<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Form PHP</h1>
    <p>Inserisci un paragrafo e una parola da censurare.</p>
    <form action="script.php" method="post">
        <label for="paragrafo">Paragrafo:</label>
        <textarea id="paragrafo" name="paragrafo" rows="5" cols="40"></textarea><br>
        <label for="parola">Parola da censurare:</label>
        <input type="text" id="parola" name="parola"><br>
        <input type="submit" value="Invia">
    </form>
    
</body>
</html>