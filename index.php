<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vieraskirja</title>
</head>

<body>
    <h1>Vieraskirja</h1>

    <form action="addcomment.php" method="POST" onsubmit="return validateMessage(this);">
        <label for="name">Nimi</label>
        <br><br>
        <input type="text" name="name" id="name">
        <br><br>
        <label for="email">Sähköposti</label>
        <br><br>
        <input type="email" name="email" id="email">
        <br><br>
        <label for="message">Viesti</label>
        <br><br>
        <textarea name="message" cols="40" rows="7"></textarea>
        <br>
        <input type="submit" value="Tallenna">
    </form>
        <br><br>
    <div>
        <h2>Hallintapaneeli</h2>
            <form action="comments.php" method="POST" onsubmit="return validatePassword(this);">
                <input placeholder="Salasana" type="password" id="password" name="password">
                <input type="submit" value="Kirjaudu"> 
            </form>
        </div>
    <script src="app.js"></script>
</body>

</html>