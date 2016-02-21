<?php
/**
 * Created by IntelliJ IDEA.
 * User: jbjohn
 * Date: 2/20/16
 * Time: 2:58 PM
 */

$time1 = "12:05:45PM";
$time2 = "11:05:45PM";
$time3 = "07:05:45PM";

function calculate($time) {
    $_time = "";
    $am_pm = substr($time, -2);

    if ($am_pm == "PM") {
        $hour = intval(substr($time, 0, 2));
        if ($hour < 12) {
            $hour += 12;
        }
        $_time = $hour . "" . substr($time, 2, -2);
    } else {
        $_time = $time;
    }

    return $_time;
}

print calculate($time1);
print "\n";
print calculate($time2);
print "\n";
print calculate($time3);
print "\n";
print date("H:i:s", strtotime($time3));