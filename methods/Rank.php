<?php

// NOTE　長谷川さんに教えてもらったやり方だが理解しておらず一旦そのままにしている。
interface userRankSpecification
{
   public function getRank(): Rank;
}
class UserRank
{
    private $rank
    public function __construct(userRankSpecification $spec)
    {
       $this->rank = $spec->getRank();
    }
}
class CampaingPeriodRankSpecification implements UserRankSpecification
{
  private $something // any...
  public function getRank() : Rank
  {
    ... do something
  }
}
class RegularRankSpecification implements UserRankSpecification
{
  private $something // any...
  public function getRank() : Rank
  {
    // ... do something
  }
}
class UserRankService
{
  public function decideRank()
  {

    // .. do something
    if ( // あるイベント期間ならば ) {
       new UserRank(new CampaingPeriodRankSpecification);
    } else {
       new UserRank(new RegularRankSpecification);
    }
  }
}


// キャンペーン中だとユーザーのランクの仕様が変わるみたいな処理です。
// たとえば、あるキャンペーンであるユーザーの属性値が優先されてランクが変動するようになるみたいな仕様が存在した場合に
// specificationオブジェクトにそれぞれの算出ロジックを閉じ込めてしまって、それを UserRank にわたすことでコンストラクタ内で$specからランクを取り出してプロパティにセットするみたいな感じです。

// new UserRank の引数は interface UserRankSpecification ならばどれでも差し替え可能ということです！

// ただこの場合は、サービスで条件分岐しないでこの分岐もspecificationオブジェクトに閉じ込めてしまうと思います。
new UserRank(new CampaingPeriodRankSpecification);
class CampaingPeriodRankSpecification implements UserRankSpecification
{
  private $something // any...
  public function getRank() : Rank
  {
    if ( // あるイベント期間ならば ) {
      //  イベント期間限定のランク算出ロジック
    } else {
        // 通常のイベント時の算出ロジック
    }
  }
}