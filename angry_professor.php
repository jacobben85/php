<?php
/**
 * Created by IntelliJ IDEA.
 * User: jbjohn
 * Date: 2/20/16
 * Time: 3:30 PM
 */

function calculate($a, $k, $n) {
    if ($k <= 0) {
        print "NO";
        print "\n";
        return;
    }
    if ($n <= 0) {
        print "YES";
        print "\n";
        return;
    }

    $onTime = 0;
    for ($i=0; $i<$n; $i++) {
        if ($a[$i] >= 0) {
            $onTime++;
        }
    }

    if ($onTime < $k) {
        print "YES";
    } else {
        print "NO";
    }
    print "\n";
}

$a = array(-1, -3, 4, 2);
$k = 0;
$n = 4;
calculate($a, $k, $n);

print 5 % 5;