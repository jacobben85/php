<?php
/**
 * Created by IntelliJ IDEA.
 * User: jbjohn
 * Date: 2/19/16
 * Time: 10:53 PM
 */

function kdifference($arr, $k) {
    $count = 0;
    for ($i=0; $i < count($arr); $i++) {
        for ($j=$i+1; $j < count($arr); $j++) {
            if (($arr[$i] - $arr[$j] == $k) || ($arr[$j] - $arr[$i] == $k)) {
                print "(" . $arr[$i] . "," . $arr[$j] . ") <=> " . $k . "\n";
                $count++;
            }
        }
    }
    return $count;
}

$arr = array(1, 2, 3, 4, 5, 34, 65, 45, 34, 23, 54, 34, 4, 23432, 23430, 5, 23);
$k = 2;

print kdifference($arr, $k);
