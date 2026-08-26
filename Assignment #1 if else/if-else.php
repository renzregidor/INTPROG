<?php
//if statement
$alarmRing = true;

if ($alarmRing){
    echo "Wake up! You have classes.";
}

//if-else statement
$carFuel = 30;
if ($carFuel <= 30) {
    echo "You need to go to the gas station.";
} else {
    echo "The car has enough fuel to run.";
}

//if elseif statement
$batteryPercentage = 100;
if ($batteryPercentage == 100) {
    echo "Your phone is fully charged.";
} elseif ($batteryPercentage <= 50) {
    echo "You still need to charge your phone.";
} elseif ($batteryPercentage <= 15) {
    echo "Do not unplug your charger, your phone is still low battery.";
} else {
    echo "Your phone has shut down.";
}

//switch statement
$snack = "chocolate";

switch ($snack) {
     case "chips":
        echo "Crunch time! You chose chips.";
        break;

    case "chocolate":
        echo "Sweet choice! Chocolate never disappoints.";
        break;

    case "popcorn":
        echo "Movie mode activated!";
        break;

    case "ice cream":
        echo "Cold, sweet, and definitely worth it.";
        break;

    default:
        echo "Hmm... that snack is not on the menu!";
}
?>