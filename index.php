<?php 
    $user_email = $_POST["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsLetter</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="email" name="email" id="email">
        <button type="submit">Invia</button>
    </form>

    <h2>Email: <?php echo $user_email; ?></h2>
</body>
</html>