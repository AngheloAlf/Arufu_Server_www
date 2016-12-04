<?php
/**
 * User: Anghelo
 * Date: 16-11-2016
 * Time: 19:30
 */

require("sv/common.php");
require("models/Accounts.php");
require("models/Personajes.php");
require("models/item_template.php");
include("angular/angularRouteCtrl.php");

//TODO: Integrar angular

$ruta = getRutaActual();
$angularParsed = false;
if($ruta[0] == "angular" && $ruta[1]){
    $angularParsed = parseAngularRoute($ruta);
}
else if(!$angularParsed){
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
                    <div id="left"> <!--Left nav-->
                        <?php include("includes/nav.phtml"); ?>
                    </div>

                    <div id="right"><!-- Columna central -->

                        <div class="haut_ng"><!-- GRAND CADRE-->

                        </div>

                        <div class="fond_ng">
                            <?php
                            if($ruta[0]){
                                if(file_exists("url/".$ruta[0].".phtml")){
                                    include("url/".$ruta[0].".phtml");
                                }
                                else{
                                    echo "not found";
                                    //TODO: 404
                                }
                            }
                            else{
                                include("url/home.phtml");
                            }
                            ?>
                        </div>

                        <div class="bas_ng">

                        </div>


                        <div class="separateur">

                        </div>
                    </div>
                </div>

                <div id="pied"><!--Footer-->
                    <?php include("includes/footer.phtml"); ?>
                </div>
            </div>
        </body>

    </html>
    <?php
}
?>