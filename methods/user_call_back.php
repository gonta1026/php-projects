<?php


function barber(string $type)
{
  return `${type}ですね、わかりました。\n`;
}
echo call_user_func('barber', "マッシュルームカット");
echo call_user_func('barber', "髭剃り");
