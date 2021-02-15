<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hallintapaneeli</title>
</head>
<body>
    <h2>Hallintapaneeli</h2>
            <form action="comments.php" method="POST">
                <input placeholder="Salasana" type="password" name="password">

                <?php if(isset($password_error)) { ?> 
                    <p><?php echo $password_error ?></p>
                <?php } ?>

                <?php if(isset($password_error)) { ?> 
                    <p><?php echo $password_error ?></p>
                <?php } ?>

                <input type="submit" value="Kirjaudu"> 
            </form>
</body>
</html>