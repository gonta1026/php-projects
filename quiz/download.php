<?php

$datas = [
  [
    'id' => 1,
    'name' => '山田太郎',
    'furigana' => 'やまだたろう',
    'email' => 'taroyamada@sample.com'
  ],
  [
    'id' => 3,
    'name' => '加藤明美',
    'furigana' => 'かとうあけみ',
    'email' => 'akemikato@sample.com'
  ],
  [
    'id' => 4,
    'name' => '佐藤健夫',
    'furigana' => 'さとうたけお',
    'email' => 'takeosato@sample.com'
  ]
];

header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=メッセージデータ.csv");
header("Content-Transfer-Encoding: binary");

if (!empty($datas)) {
  // 1行目のラベル作成
  $csv_data .= '"ID","名前","ふりがな","メールアドレス"' . "\n";
  foreach ($datas as $index => $value) {
    // データを1行ずつCSVファイルに書き込む
    $csv_data .= '"' . ($index + 1) . '","' . $value["name"] . '","' . $value["furigana"] . '","' . $value["furigana"] . "\"\n";
  }
  echo $csv_data;
}
return;
