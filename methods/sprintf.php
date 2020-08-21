<?php

/*使い方 sprintf(文字列のフォーマット, 入力したい文字１,　入力したい文字２,　・・・) 
他にも文字列の幅数を指定できたり、それを右寄せ、左寄とうができる。
*/

(function () {
    function formatText(string $human, string $food, int $num = 0): string
    {
        $format = "%s 君は %s を %d 個食べました。\n";
        return $text = sprintf($format, $human, $food, $num);
    }
    echo formatText("ジョン", "ドーナツ", 30);
    echo formatText("田中", "ドーナツ", 40);
    (formatText("田中", "ドーナツ", 40));
})();
