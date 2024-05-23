<?php
    include "./template/head.php";
    include "./functions.php";

    if (isset($_SESSION["auth"]) || $_SESSION["auth"] === true) { ?>
        <div class="alert alert-success">L'email soddisfa i requisiti minimi :)</div>
    <?php }else{?>
        <h2>C'è un problema</h2>
    <?php } ?>
<?php
    include "./template/body.php";
?>