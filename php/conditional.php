<?php
$Age = 50;
if ($Age < 18) {
    print "You're young - enjoy it!\n";
} else {
    print "You're not under 18\n";
}

if ($Age >= 18 && $Age < 50) {
    print "You're in the prime of your life\n";
} else {
    print "You're not in the prime of your life\n";
}

if ($Age >= 50) {
    print "You can retire soon if you have enough money - hurrah!\n";
} else {
    print "You cannot retire soon :( ";
}
?>