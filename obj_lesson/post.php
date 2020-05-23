<?php



trait LikeTrait
{
  private $likes = 0;
  public function like()
  {
    $this->likes++;
  }
}

interface LikeInterface
{
  public function like();
}

abstract class BasePost
{
  protected $text;
  
  public function __construct($text)
  {
    $this->text = $text;
  }
  abstract public function show();
}

class Post extends BasePost implements LikeInterface
{
  use LikeTrait;
  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }
}

class SponsoredPost extends BasePost
{
  private $sponsor;
  public function __construct($text, $sponsor)
  {
    parent::__construct($text);
    $this->sponsor = $sponsor;
  }

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}

class PremiumPost extends BasePost implements LikeInterface
{
  private $price;
  use LikeTrait;

  public function __construct($text, $price)
  {
    parent::__construct($text);
    $this->price = $price;
  }  
  public function show()
  {
    printf('%s [%d円 JPY] (%d)' . PHP_EOL, $this->text, $this->price, $this->likes);
  }
}