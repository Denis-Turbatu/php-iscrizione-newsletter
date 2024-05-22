<?php
$ver_email = $_GET["email"];

if ($ver_email === null) {
    echo "";
} elseif (str_contains($ver_email, "@") && str_contains($ver_email, ".")) {
    header('Location: ./thankyou.php');
} else { ?>
    <div class="alert alert-danger">L'email non soddisfa i requisiti minimi: Aggiungi '@' e '.'</div>
<?php } ?>