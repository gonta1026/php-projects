<?php

$input = "  keisei";
echo strlen($input). PHP_EOL;//文字数をカウント
echo strlen(trim($input)). PHP_EOL;//空白を除去してカウント

$input = "tanaka_marukusu_tyurio";

echo strpos($input, "_"). PHP_EOL;
//output 6

echo $input =str_replace("_", " ", $input) . PHP_EOL;
//output tanaka marukusu tyurio