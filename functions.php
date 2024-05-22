<?php
$ver_email = $_POST["email"];


if ($ver_email === null) {
    echo "";
} elseif (str_contains($ver_email, "@") && str_contains($ver_email, ".")) {
    // echo $ver_email; ?>
    <div class="alert alert-success">L'email soddisfa i requisiti minimi :)</div>
<?php } else { ?>
    <div class="alert alert-danger">L'email non soddisfa i requisiti minimi: Aggiungi '@' e '.'</div>
<?php } ?>