<?php
//固定長データを扱う際の
$input = '20200320Item-A  1200';
$input = substr_replace($input, 'Item-B  ', 8, 8);
echo $input . PHP_EOL; // 20200320Item-B  1200
$date = substr($input, 0, 8);
$date = substr($input, 0, 8);
$product = substr($input, 8, 8);
$amount = substr($input, 16, 4);
$amount = substr($input, 16);
echo $amount . PHP_EOL; // 1200
echo $date . PHP_EOL; // 20200320
echo $product . PHP_EOL; // Item-B  
echo number_format($amount) . PHP_EOL;// 1,200
