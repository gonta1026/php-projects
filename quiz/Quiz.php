<?php

namespace MyApp;

class Quiz extends Question
{
  private $_quizSet = [];
  private $shuffle_num = [];
  public function __construct()
  {

    $this->_setup();
    Token::create();

    if (!isset($_SESSION['current_num'])) {
      $this->_initSession();
    }
  }
  private function initialNum(){
    $this->shuffle_num = [0,1,2];
  }
  private function _initSession()
  {
    $_SESSION['current_num'] = 0;
    $_SESSION['correct_count'] = 0;
  }

  public function checkAnswer()
  {
    Token::validate('token');
    $correctAnswer = $this->_quizSet[$_SESSION['current_num']]['answer'][0];
    if (!isset($_POST['answer'])) {
      throw new \Exception('answer not set!');
    }
    if ($correctAnswer === $_POST['answer']) {
      $_SESSION['correct_count']++;
    }
    $_SESSION['current_num']++;
    return $correctAnswer;
  }

  public function isFinished()
  {
    return count($this->_quizSet) === $_SESSION['current_num'];
  }

  public function getScore()
  {
    return round($_SESSION['correct_count'] / count($this->_quizSet) * 100);
  }

  public function isLast()
  {
    return count($this->_quizSet) === $_SESSION['current_num'] + 1;
  }

  public function reset()
  {
    $this->_initSession();
  }

  public function getCurrentQuiz()
  {
    return $this->_quizSet[$_SESSION['current_num']];
  }

  private function _setup()
  {
    // $questions = parent::getQuestion();
    // shuffle($questions);
    $this->_quizSet = parent::getQuestion();
    // session_destroy();
  }
}
