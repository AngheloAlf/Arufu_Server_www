<?php
/**
 * User: Anghelo
 * Date: 16-11-2016
 * Time: 19:30
 */

require("sv/common.php");
require("models/Accounts.php");
require("models/Personajes.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include("includes/head.phtml"); ?>
    </head>
    <body>
        <div id="conteneur">
            <?php include("includes/header.phtml"); ?>
            <div id="contenu">
                <div id="left">
                    <?php include("includes/nav.phtml"); ?>
                </div>
                <div id="right"><!-- COLONNE DE DROITE -->
                    <?php include("url/home.phtml"); ?>
                </div> <!-- FIN CONTENU -->

            </div>
            <div id="pied">
                <?php include("includes/footer.phtml"); ?>
            </div>
        </div>
    </body>

</html>
