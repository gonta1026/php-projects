<?php
// 名前空間
use App\PostSpace;
use App\PostSpace\BasePost;
use App\PostSpace\Post;
use App\PostSpace\SponsoredPost;
use App\PostSpace\PremiumPost;
require "post.php";

$posts = [];
$posts[0] = new Post('hello');
$posts[0]->like();
$posts[1] = new Post('hello again');
$posts[1]->like();
$posts[2] = new SponsoredPost('親のプロパティにアクセスしてやったぜ！', "keisei");
$posts[3] = new PremiumPost("金額", 1000);
$posts[3]->like();

// BasePost型として実行する。
function prosessPost(BasePost $post)
{
  $post->show();
}
foreach ($posts as $post) {
  prosessPost($post);
}
?>