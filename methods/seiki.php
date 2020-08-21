<?php



(function () { // メールアドレスのバリデーションは完璧に対応するのは難しい。
  $input = 'katanoo.riginal@gmail.com';
  $pattern = '/^[A-Z][a-zA-Z0-9_.+-]+[@][a-zA-Z0-9.-]+$/';
  if (preg_match($pattern, $input, $mail)) {
    echo $mail[0] . PHP_EOL;
  } else {
    $error = 'not number';
    echo $error . PHP_EOL;;
  }
})();


(function () { //電話番号にヒット
  $input = 'Call us at 03-3001-1256 or 03-3015-3222';
  $pattern = '/\d{2}-\d{4}-\d{4}/';
  preg_match($pattern, $input, $matches);
  echo $matches[0] . PHP_EOL; //03-3001-1256
  preg_match_all($pattern, $input, $matches);
  echo $matches . PHP_EOL; //Array
  echo $matches[0][0] . PHP_EOL; // 03-3001-1256
  echo $matches[0][1] . PHP_EOL; // 03-3015-3222

  $input = preg_replace($pattern, '**-****-****', $input);
  // echo $input . PHP_EOL;
})();

(function () { //
  $inputTel = "00-22-322";
  $pattern = '/^\d{2,4}-\d{2,4}-\d{3,4}$/';
  if (preg_match($pattern, $inputTel, $tel)) {
    echo $tel[0] . PHP_EOL;
  }
})();


(function () {
  function () {
    $text = "160-0001";
    if (preg_match('/^\d{3}\-\d{4}$/', $text)) {
      echo "正しい郵便番号です";
    } else {
      echo "正しくない郵便番号です";
    }
  };
})();


(function () {
  function () {
    $text = "ke";
    if (preg_match('/^\d{3}\-\d{4}$/', $text)) {
      echo "正しい郵便番号です";
    } else {
      echo "正しくない郵便番号です";
    }
  };
})();

(function () {
  $urls = [
    'a' => 'http://localhost:81/test.php?test_param=johi',
    'b' => 'http://localhost:00',
    'b' => 'http://localhost:20',
    'c' => 'http://localhost',
    'd' => 'http://localhost:8080',
    'e' => 'httpss://www.xn--e--testjoidiu.jp/', //NG
    'f' => 'http://egegbfwork.blagebog10f2.fc2.com/',
    'g' => 'http://blogs.yahoo.co.jp/medidgecalg919e',
    'h' => 'http://227ebdw.net/kango/1/index.html',
    'i' => 'http://gebfa.test-search.net',
  ];

  foreach ($urls as $url) {
    $result = preg_match('/(https?:\/\/(www\.)?[0-9a-z\-\.]+:?[0-9]{0,5})/', $url, $matches);
    if ($result) {
      echo $matches[0] . PHP_EOL;
    } else {
      echo $url . "はありません" . PHP_EOL;
    }
    PHP_EOL;
  }
})();
