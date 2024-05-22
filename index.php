<?php
$user_email = $_GET["email"];
?>

<?php
    include "./template/head.php";
    include "./functions.php";
?>

<form action="index.php" method="GET">
    <input type="email" name="email" id="email" value="<?php echo $_GET["email"] ?>">
    <button type="submit">Invia</button>
</form>

<?php
    include "./template/body.php";
?>