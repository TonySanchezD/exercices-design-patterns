<?php
use App\Factory\Ship\ShipFactory;

require 'vendor/autoload.php';



$heroShipPoints = 200;
if(isset($_POST['remainingPointsHeroShip'])) {
    if($_POST['remainingPointsHeroShip'] != ''){
        $heroShipPoints = $_POST['remainingPointsHeroShip'];
    }
}

if(isset($_POST['ship'])){
    $factory = new ShipFactory();

    $ship = $factory->build("E");

    $damage = $ship->giveDamage();
    $shipName = $ship->getName();

    $heroShipPoints -= $degatEnemyShip;
}


?>
<html>
    <head>
        <title>ShipWar</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" placeholder="Choose your ship, E/R/U/B" name="ship" />
            <input type="hidden" name="remainingPointsHeroShip" value="<?php $heroShipPoints ?>"/>
            <button type="submit">Envoyer</button>
        </form>
        <p><?php if(isset($_POST['ship'])): ?>
            <?php
                echo 'You\'ve been hit by a ' . $shipName;
            ?>
        <?php endif; ?>
        </p>
        <p>
            You still have <?php echo $heroShipPoints ?>
        </p>
    </body>
</html>
