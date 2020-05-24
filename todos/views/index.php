<!DOCTYPE html>
<html lang="ja">
<?php include(__DIR__ . "/common/head.php") ?>

<body>
  <div id="container">
    <h1>Todos</h1>
    <form action="" id="new_todo_form">
      <input type="text" id="new_todo" placeholder="What needs to be done?">
    </form>
    <ul id="todos">
      <?php foreach ($todos as $todo) : ?>
        <li id="todo_<?= h($todo->id); ?>" data-id="<?= h($todo->id); ?>">
          <input type="checkbox" class="update_todo" <?php if ($todo->state === '1') {
                                                          echo 'checked';
                                                        } ?>>
          <span class="todo_title <?php if ($todo->state === '1') {
                                      echo 'done';
                                    } ?>"><?= h($todo->title); ?></span>
          <div class="delete_todo">x</div>
        </li>
      <?php endforeach; ?>
      <li id="todo_template" data-id="">
        <input type="checkbox" class="update_todo">
        <span class="todo_title"></span>
        <div class="delete_todo">x</div>
      </li>
    </ul>
  </div>
  <input type="hidden" id="token" value="<?= h($_SESSION['token']); ?>">
  <?php include(__DIR__ . "/common/footer.php") ?>

</body>

</html>