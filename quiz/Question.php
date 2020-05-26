<?php

namespace MyApp;
class Question
{
  static public function getQuestion()//ここにクイズで使う連想配列を追加すること。
  {
    $questions = [
      [
        'question' => 'What is A?',
        'answer' => ['A0', 'A1', 'A2', 'A3']
      ],

      [
        'question' => 'What is B?',
        'answer' => ['B0', 'B1', 'B2', 'B3']
      ],

      [
        'question' => 'What is C?',
        'answer' => ['C0', 'C1', 'C2', 'C3']
      ]
    ];
    return $questions;
  }
}

?>