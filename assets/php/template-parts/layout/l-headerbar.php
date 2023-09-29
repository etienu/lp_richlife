<?php
//----------------------------------------
//  ヘッダーバー
//----------------------------------------
?>
<?php
  $homeurl = esc_url(home_url());
  //  トップページの場合はスムーススクロールさせる為URLを入れない
  if( is_home() || is_front_page() ) :
    $homeurl = "";
  endif;  
?>

<header class="l-header p-headerbar">

<div class="p-headerbar__inner">
  <div class="p-headerbar__startwrapper">
    <!-- ハンバーガー -->
    <div class="p-hamburger__wrapper u-display__sp">
        <button class="p-hamburger"  aria-controls="spnavigation" aria-expanded="false" data-acc="hamburger" data-accgroup="main">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    <!-- ロゴ -->
    <h1 class="p-headerbar__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="c-link" data-accgroup="main" data-acc="start">
        <picture>
            <source srcset="<?php echo GET_PATH()?>/header/logo.png">
            <img src="<?php echo GET_PATH()?>/header/logo.png" alt="SAKATA KOMUTEN" width="113" height="46">
        </picture>
      </a>
    </h1>
  </div>
  <div class="p-headerbar__centerwrapper">
    <!-- ナビメニュー -->
    <div class="p-headerbar__menulist">
      <ul>
        <li class="p-headerbar__menuitem"><a href="#concept"><span>家具</span></a></li>
        <li class="p-headerbar__menuitem"><a href="#works"><span>家電</span></a></li>
        <li class="p-headerbar__menuitem"><a href="#news"><span>法人のお客様へ</span></a></li>
      </ul>
    </div>
  </div>

  <div class="p-headerbar__endwrapper">
    <!-- お問い合わせ・ハンバーガーボタン エリア-->
    <div class="p-headerbar__buttonarea">
      <a href="#contact" id="btnContact">
        <div class="c-button__lineframe p-button__lineframe" data-type="rounds">
          <span>ログイン/会員登録</span>
        </div>
      </a>
      <!-- → ] -->
      <a href="#" class="icon-download u-display__sp">
        <i class="p-icon fa-solid fa-arrow-right-to-bracket"></i>
      </a>
      <!-- カート -->
      <a href="#" class="icon-cart">
        <i class="p-icon fa-solid fa-cart-shopping"></i>
      </a>
    </div>
  </div>
</div>

</header>

<?php
//----------------------------------------
//  SPメニュー
//----------------------------------------
?>
<div class="p-spmenu__background"></div>
<div class="p-spmenu" data-hide="true">
  <div class="p-spmenu__inner">
    <div class="p-spmenu__list__wrapper">
      <ul>
        <li><a href="<?php echo $homeurl; ?>#" data-accgroup="spmenu">TOP</a></li>
        <li><a href="<?php echo $homeurl; ?>#real5" data-accgroup="spmenu">5つの暮らし</a></li>
        <li><a href="<?php echo $homeurl; ?>#voice" data-accgroup="spmenu">利用者様の声</a></li>
        <li><a href="<?php echo $homeurl; ?>#solution" data-accgroup="spmenu">お悩みではないですか？</a></li>
        <li><a href="<?php echo $homeurl; ?>#real" data-accgroup="spmenu">理想の暮らしを紹介</a></li>
        <li><a href="<?php echo $homeurl; ?>#features" data-accgroup="spmenu">愛されるポイント</a></li>
        <li><a href="<?php echo $homeurl; ?>#howto" data-accgroup="spmenu">使い方</a></li>
        <li><a href="<?php echo $homeurl; ?>#faq" data-accgroup="spmenu">FAQ</a></li>
        <li><a href="<?php echo $homeurl; ?>#contact" data-accgroup="spmenu">
          <span></span>お問い合わせ</span></a></li>
      </ul>
    </div><!-- p-spmenu__list__wrapper -->
  </div>
</div>

<?php /* */ ?>
