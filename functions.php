<?php
$ver_email = $_GET["email"];

session_start();

if ($ver_email === null) {
    echo "";
} elseif (str_contains($ver_email, "@") && str_contains($ver_email, ".")) {
    $_SESSION["auth"] = true;
    header('Location: ./thankyou.php');
} else { ?>
    <div class="alert alert-danger">L'email non soddisfa i requisiti minimi: Aggiungi '@' e '.'</div>
<?php } 

// session_destroy();
// header("Location: index.php");

?>