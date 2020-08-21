
<?php
ini_set('max_execution_time', 0);
header('Content-disposition: attachment; filename=sample.csv');
header('Content-type: application/octet-stream; name=sample.csv');
// $file_path = fopen('php://output', 'w');
$file_path = fopen('./data.csv', 'w');
$csvTarget = array(
	array(
		'id' => 1,
		'name' => '山田太郎',
		'furigana' => 'やまだたろう',
		'email' => 'taroyamada@sample.com'
	),
	array(
		'id' => 3,
		'name' => '加藤明美',
		'furigana' => 'かとうあけみ',
		'email' => 'akemikato@sample.com'
	),
	array(
		'id' => 5,
		'name' => '佐藤健夫',
		'furigana' => 'さとうたけお',
		'email' => 'takeosato@sample.com'
	)
);



// 出力データ生成


function csv($csvTargetArray)
{
	$output_csv = '"ID","氏名","ふりがな","メールアドレス"' . "\n";
	foreach ($csvTargetArray as $value) {
		$output_csv .= '"' . $value['id'] . '","' . $value['name'] . '", "' . $value['furigana'] . '","' . $value['email'] . '"' . "\n";
	}
	return $output_csv;
}

fwrite($file_path, array_map("csv", $csvTarget));
flush();

fclose($file_path);
exit;



// // 配列の要素を二乗するコールバック関数
// function square($value)
// {
// 	return $value * $value;
// }

// $number = array(1, 2, 3, 4, 5);
// $result = array_map('square', $number);
// print_r($result);
