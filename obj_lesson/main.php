<?php

require "post.php";

$posts = [];
$posts[0] = new Post('hello');
$posts[0]->like();
$posts[1] = new Post('hello again');
$posts[1]->like();
$posts[2] = new SponsoredPost('親のプロパティにアクセスしてやったぜ！', "keisei");
$posts[3] = new PremiumPost("金額", 1000);
$posts[3]->like();

foreach ($posts as $post) {
  prosessPost($post);
}

?>