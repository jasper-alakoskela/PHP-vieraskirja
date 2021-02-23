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
    <form action="addcomment.php" method="POST">
        <label for="name">Nimi</label>
        <br><br>
        <input type="text" name="name">
        <?php if(isset($error)) { ?> 
            <p><?php echo $error ?></p>
        <?php } ?>
        <br><br>
        <label for="email">Sähköposti</label>
        <br><br>
        <input type="email" name="email">
        <?php if(isset($error)) { ?> 
            <p><?php echo $error ?></p>
        <?php } ?>
        <br><br>
        <label for="message">Viesti</label>
        <br><br>
        <textarea name="message" cols="30" rows="5"></textarea>
        <br>
        <input type="submit" value="Tallenna">
    </form>
</body>
</html>