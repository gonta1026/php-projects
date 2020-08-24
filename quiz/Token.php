<?php

namespace MyApp;

use MyApp\ConstData;
use MyApp\Quiz;

class Token
{
  static public function create() // NOTE   TOKEN作成
  {
    if (!isset($_SESSION[Quiz::TOKEN])) {
      $_SESSION[Quiz::TOKEN] = bin2hex(openssl_random_pseudo_bytes(16));
    }
  }

  static public function validate()
  {
    if (
      !isset($_SESSION[Quiz::TOKEN]) ||
      !isset($_POST[Quiz::TOKEN]) ||
      $_SESSION[Quiz::TOKEN] !== $_POST[Quiz::TOKEN]
    ) {
      throw new \Exception('invalid token!');
    }
  }
}
