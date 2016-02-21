<?php
/**
 * Created by IntelliJ IDEA.
 * User: jbjohn
 * Date: 2/20/16
 * Time: 5:55 PM
 */


$arr = array(1, 3, 5, 11, 22, 122, 100);
for($i = 0; $i < count($arr); $i++){

    $n = $arr[$i];
    decide($n);
}

function decide($n) {
    if ($n > 1) {
        print calculate($n);
    } else {
        print -1;
    }
    print "\n";
}

function calculate($n) {
    $number = "-1";
    if ($n == 5) {
        return str_repeat("3", 5);
    } elseif ($n == 3) {
        return str_repeat("5", 3);
    } else {
        if ($n > 3) {
            $result = calculate($n - 3);
            if (strlen(ltrim($result, "-")) == strlen($result)) {
                return str_repeat("5", 3) . "" . $result;
            }
        }
        if ($n > 5) {
            $result = calculate($n - 5);
            if (strlen(ltrim($result, "-")) == strlen($result)) {
                return str_repeat("3", 5) . "" . $result;
            }
        }
    }
    return $number;
}
