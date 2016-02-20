<?php
/**
 * Created by IntelliJ IDEA.
 * User: jbjohn
 * Date: 2/19/16
 * Time: 10:11 PM
 */

function isitpossible( $a,  $b,  $c,  $d) {
    if ((($a == $c) || checker($a, $b, $c) || checker($b, $a, $c)) &&
        (($b == $d) || checker($a, $b, $d) || checker($b, $a, $d))) {
        return "Yes";
    }

    return "No";
}

function checker($a, $b, $c) {
    if ($a + $b < $c) {
        if (checker($a, $a + $b, $c)) {
            return true;
        }
        if(checker($a + $b, $b, $c)) {
            return true;
        }
        if (checker($b, $a + $b, $c)) {
            return true;
        }
        if(checker($a + $b, $a, $c)) {
            return true;
        }
    }
    print $a . "+" . $b . "==" . $c . "\n";
    if ($a + $b == $c) {
        return true;
    }
    return false;
}

print isitpossible(1, 2, 1, 8);