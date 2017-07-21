<?php

function swap(&$a, &$b)
{
    $tmp = $a;
    $a = $b;
    $b = $tmp ;
}

function    sort_by_insertion($array)
{
    $i = 0;
    while ($i< sizeof($array)) {
        $element = $array[$i];
        $j = $i;
        while($j > 0 && ($array[$j-1] > $element)) {
            $array[$j] = $array[$j-1];
            $j--;
        }
        $array[$j]=$element;
        $i++;
    }
    return $array;
}

function    sort_by_selection($array)
{
    for ($i = 0 ;$i < sizeof($array); $i++) {
        $min = $i;
        for ($j = $i + 1 ; $j < sizeof($array); $j++) {
            if ($array[$j] < $array[$min]) {
                $min = $j;
            }
        }
        $tmp = $array[$min];
        $array[$min] = $array[$i];
        $array[$i] = $tmp;
    }
    return $array;
}

function    bubble_sort($array) {
    $lenght = count($array) - 1;
    for ($i = 0 ;$i < sizeof($array); $i++) {
        $min = $i;
        for ($j = $lenght ; $j > $i; $j--) {
            if ($array[$j] < $array[$min]) {
                $min = $j;
            }
        }
        $tmp = $array[$min];
        $array[$min] = $array[$i];
        $array[$i] = $tmp;
    }
    return $array;
}

function    shell_sort($array) {
    $gaps = array(6, 4, 1);
    $length = count($array);
    $lgap = count($gaps);
    for ($z = 0; $z < $lgap; $z++) {
        $gap = $gaps[$z];
        for ($i = $gap; $i < $length; $i++) {
            $element = $array[$i];
            $j = $i;
            while ($j >= $gap && $array[$j - $gap] > $element) {
                $array[$j] = $array[$j - $gap];
                $j = $j - $gap;
            }
            $array[$j] = $element;
        }
    }
    return $array;
}

function merge_sort(array $array) {
    if (1 === count($array)) {
        return $array;
    }
    $left = array();
    $right = array();
    $middle = round(count($array)/2);
    for ($i = 0; $i < $middle; ++$i) {
        $left[] = $array[$i];
    }
    for ($i = $middle; $i < count($array); ++$i) {
        $right[] = $array[$i];
    }
    $left = merge_sort($left);
    $right = merge_sort($right);
    return merge($left, $right);
}

function merge(array $left, array $right) {
    $result = array();
    while (count($left) > 0 || count($right) > 0) {
        if (count($left) > 0 && count($right) > 0) {
            $firstLeft = current($left);
            $firstRight = current($right);
            if ($firstLeft <= $firstRight) {
                $result[] = array_shift($left);
            } else {
                $result[] = array_shift($right);
            }
        } else if (count($left) > 0) {
            $result[] = array_shift($left);
        } else if (count($right) > 0) {
            $result[] = array_shift($right);
        }
    }
    return $result;
}