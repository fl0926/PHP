<?php


$day = $_GET['day'];

$ordinal = "";
if($day <= 12 && $day >=4){
    $ordinal = "th";
}
if($day == 3){
    $ordinal = "rd";
}
if($day == 2){
    $ordinal = "nd";
}
if($day == 1){
    $ordinal = "st";
}

echo "On the $day$ordinal day of Christmas my true love gave to me:<br/>";

switch ($day) {
    case 12:
        echo "12 Drummers Drumming <br/>";
    case 11:
        echo "11 Pipers Piping <br/>";
    case 10:
        echo "10 Lords a Leaping <br/>";
    case 9:
        echo "9 Ladies Dancing <br/>";
    case 8:
        echo "8 Maids a Milking <br/>";
    case 7:
        echo "7 Swans a Swimming <br/>";
    case 6:
        echo "6 Geese a Laying <br/>";
    case 5:
        echo "5 Golden Rings <br/>";
    case 4:
        echo "4 Calling Birds <br/>";
    case 3:
        echo "3 French Hens <br/>";
    case 2:
        echo "2 Turtle Doves <br/>";
    case 1:
        echo "and a Partridge in a Pear Tree <br/>";
        break;
    default:
        echo "Nothing :(";
}