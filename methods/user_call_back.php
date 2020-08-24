<?php


function callback_func(string $type)
{
  return `${type}ですね、わかりました。\n`;
}
echo call_user_func('callback_func', "マッシュルームカット");
echo call_user_func('callback_func', "髭剃り");
