<?php
use App\PostSpace;
require "post.php";

// spl_autoload_register(function ($class){
//   require($class .".php");
// });
$posts = [];
$posts[0] = new PostSpace\Post('hello');
// $posts[0]->like();
$posts[1] = new PostSpace\Post('hello again');
// $posts[1]->like();
$posts[2] = new PostSpace\SponsoredPost('親のプロパティにアクセスしてやったぜ！', "keisei");
$posts[3] = new PostSpace\PremiumPost("金額", 1000);
$posts[3]->like();

function prosessPost(PostSpace\BasePost $post)
{
  $post->show();
}
foreach ($posts as $post) {
  prosessPost($post);
}
?>