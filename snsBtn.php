<?php
  $url_encode = urlencode(get_permalink());
  $title_encode = urlencode(get_the_title());
?>

<div class="contents__snsBtn">
  <p class="contents__snsBtn__text">シェアしてくれると嬉しいですヽ(=´▽`=)ﾉ</p>
  <ul class="cf">
    <li class="twitter">
      <a rel="nofollow" href="http://twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&via=manami1030&tw_p=tweetbutton">
        <i class="fa fa-twitter"></i>
        <br />ツイート
      </a>
    </li>

    <li class="facebook">
      <a rel="nofollow" href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
        <i class="fa fa-facebook"></i>
        <br />シェア</a>
    </li>

    <li class="hatebu">
      <a rel="nofollow" href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encode ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=510');return false;" >
        <i class="fa fa-hatena"></i>
        <br/>はてブ</a>
    </li>

    <li class="line">
      <a rel="nofollow" href="http://line.me/R/msg/text/?<?php echo $title_encode.'%0A'.$url_encode.'?ref=line';?>">
        <span class="icon-line"></span>
        <br />LINE</a>
    </li>
  </ul>
</div>
