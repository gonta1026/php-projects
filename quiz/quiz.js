$(function () {
  'use strict';
  // var element = document.querySelector(".answer");
  // console.log(element)
  $('.answer').on('click', function () {
    var $selected = $(this);
    if ($selected.hasClass('correct') || $selected.hasClass('wrong')) {
      return;
    }
    $selected.addClass('selected');
    var answer = $selected.text();

    $.post('/_answer.php', {
      answer,
      token: $('#token').val()
    }).done(function (res) {
      $('.answer').each(function () {
        console.log(res.correct_answer)
        if ($(this).text() === res.correct_answer) {/* クリックした要素と答えが要素名が一緒なら */
          $(this).addClass('correct');
        } else {
          $(this).addClass('wrong');
        }
      });
      if (answer === res.correct_answer) {
        $selected.text(answer + ' ... CORRECT!');
      } else {
        $selected.text(answer + ' ... WRONG!');
      }
      $('#btn').removeClass('disabled');
    });
  });

  $('#btn').on('click', function () {
    if (!$(this).hasClass('disabled')) {
      location.reload();
    }
  });

});