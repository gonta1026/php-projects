<?php

// ----------------------------sprintf-------------------------------
// sprintfは文字列のフォーマットにに使う

$num = 5;
$location = 'tree';


// $format = 'The %s contains %d monkeys';
$format = 'The %2$s contains %1$d monkeys.
           That\'s a nice %2$s full of %1$d monkeys. %3$s';
echo sprintf($format, $num, $location);

// %のあとの数字がindexになる。$04のところでけたの数字で指定している。
$format = 'The %2$s contains %1$04d monkeys';
echo sprintf($format, $num, $location);
//output The tree contains 0005 monkeys


$what = "肉";
$how = 5;
$when = "今日";
$do = "たべた！";
$format = "%sを%dつ%s%s";
echo sprintf($format, $what, $how, $when, $do);

