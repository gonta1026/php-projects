<?php

namespace MyApp;

use MyApp\ConstData;

class Quiz
{
  private $_quizSet = [];
  private $perfect_corrent_num;

  const TOKEN = 'token'; //定数を定義する

  // echo self::TOKEN;
  public function __construct()
  {
    if (!isset($_SESSION['perfect_corrent_num'])) {
      $this->_initTotalCurrentNum();
    }
    $this->_setup(); // NOTE >>>>> 質問を全てセットする。
    Token::create();
    if (!isset($_SESSION['current_num'])) {
      $this->_initSession(); //NOTE sessionを初期化
    }
  }

  private function _setup(): void
  {
    $this->_quizSet = ConstData::QUESTION;
  }

  private function _initSession(): void
  {
    $_SESSION['current_num'] = $_SESSION['correct_count'] = 0;
  }

  private function _initTotalCurrentNum(): void
  {
    $_SESSION['perfect_corrent_num'] = 0;
  }

  public function checkAnswer(): string
  {
    Token::validate();
    $correctAnswer = $this->_quizSet[$_SESSION['current_num']]['answer'][0];
    if (!isset($_POST['answer'])) {
      throw new \Exception('answer not set!');
    }
    if ($correctAnswer === $_POST['answer']) {
      $_SESSION['correct_count']++;
      if ($_SESSION['correct_count'] === count($this->_quizSet)) {
        $_SESSION['perfect_corrent_num']++;
      }
    }
    $_SESSION['current_num']++;
    return $correctAnswer;
  }

  public function isFinished(): int
  {
    return count($this->_quizSet) === $_SESSION['current_num'];
  }

  public function getScore(): int
  {
    return round($_SESSION['correct_count'] / count($this->_quizSet) * 100);
  }

  public function isLast(): int
  {
    return count($this->_quizSet) === $_SESSION['current_num'] + 1;
  }

  public function reset(): void
  {
    $this->_initSession();
  }

  public function getCurrentQuiz(): array
  {
    $current_quiz = $this->_quizSet[$_SESSION['current_num']];
    shuffle($current_quiz["answer"]);
    return $current_quiz;
  }
}
