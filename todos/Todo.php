<?php

namespace MyApp;
class Todo
{
  private $_db;
  public function __construct()
  {
    $this->_createToken();
    try {
      $this->_db = new \PDO(DSN, DB_USERNAME, DB_PASSWORD);
      $this->_db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    } catch (\PDOException $e) {
      echo $e->getMessage();
      exit;
    }
  }

  private function _createToken()//トークンを作っているがワンタイムではない。。
  {
    if (!isset($_SESSION['token'])) {
      $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(16));
    }
  }

  public function getAll()
  {
    $stmt = $this->_db->query("select * from todos order by id desc");
    return $stmt->fetchAll(\PDO::FETCH_OBJ);
  }

  public function post()
  {
    $this->_validateToken();

    if (!isset($_POST['mode'])) {
      throw new \Exception('mode not set!');
    }
    $mode = $_POST['mode'];//switch文を使っていたが可変関数で対応
    return $this->$mode();
  }

  private function _validateToken()
  {
    if (
      !isset($_SESSION['token']) ||
      !isset($_POST['token']) ||
      $_SESSION['token'] !== $_POST['token']
    ) {
      throw new \Exception('invalid token!');
    }
  }

  private function update()
  {
    if (!isset($_POST['id'])) {
      throw new \Exception('[update] id not set!');
    }

    $this->_db->beginTransaction();

    $sql = sprintf("update todos set state = (state + 1) %% 2 where id = %d", $_POST['id']);
    pdoExecute($this->_db, $sql);

    $sql = sprintf("select state from todos where id = %d", $_POST['id']);
    $stmt = $this->_db->query($sql);
    $state = $stmt->fetchColumn();

    $this->_db->commit();

    return [
      'state' => $state
    ];
  }

  private function create()
  {
    if (!isset($_POST['title']) || $_POST['title'] === '') {
      throw new \Exception('[create] title not set!');
    }

    $sql = "insert into todos (title) values (:title)";
    $title = [':title' => $_POST['title']];
    pdoExecute($this->_db, $sql, $title);
    return [
      'id' => $this->_db->lastInsertId()
    ];
  }

  private function delete()
  {
    if (!isset($_POST['id'])) {
      throw new \Exception('[delete] id not set!');
    }
    $sql = sprintf("delete from todos where id = %d", $_POST['id']);
    pdoExecute($this->_db, $sql);
    return [];
  }
}

