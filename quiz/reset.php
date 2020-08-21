<?php
$_SESSION['perfect_corrent_num'] = 0;
$host  = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
header("Location: http://$host$uri/");
exit;
