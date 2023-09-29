<?php
/*---------------------------------------------------------
    front-page.php
    トップページ
-----------------------------------------------------------*/
?>

<!DOCTYPE html>
<html lang="ja">

<?php /* head */ ?>
<?php get_template_part(GET_PATH_R('template').'layout/combo/lc-wp-header')?>

<body class="l-header__float">

  <?php /* header bar */ ?>
  <?php get_template_part(GET_PATH_R('template').'layout/l-headerbar' ); ?>
  <?php /* 一番上に戻る */ ?>
  <?php //get_template_part(GET_PATH_R('template').'object/project/p-js-gototop' ); ?>
  <?php /* ローディング */ ?>
  <?php get_template_part(GET_PATH_R('template').'layout/l-loader' ); ?>

<main role="main">

<!-- ヒーローセクション -->
<section class="l-section p-hero">
    <div class="p-hero__background" data-jsanime="blur__in">
    </div>

    <div class="p-hero__inner">
        <div class="p-hero__content">
            <div class="p-hero__headline"><span>いつでもどこでも。</span></div>
            <div class="p-hero__headline"><span>わたしの好きが集まる暮らし。</span></div>
            <div class="p-hero__lead"><span>おうち空間を自由かつ手軽に模様替え</span></div>
        </div>
    </div>
</section>

<!-- CV -->
<section class="l-section p-cv">
    <div class="p-cv__inner">
        <div class="p-cv__outertextarea left">
            <div class="p-cv__outertext camp">CAMPAIGN</div>
            <div class="p-cv__outertext lim">LIMITED TIME</div>
        </div>
        <div class="p-cv__content">
            <div class="p-cv__cinner">
                <div class="p-cv__head">
                    <p>高品質でセンスのいい<br class="u-display__sp">家具・家電を</p>
                    <p><span><strong>10</strong>%OFF</span>価格で<br class="u-display__sp">レンタルできます。</p>
                </div>
                <div class="p-cv__tagwrapper">
                    <ul>
                        <li class="no01">月額<br class="u-display__sp">440円～</li>
                        <li class="no02">1か月～レンタル可能</li>
                        <li class="no03">長期レンタル<br class="u-display__sp">割引あり</li>
                    </ul>
                </div>
                <div class="p-cv__footer">
                    <div class="l-block jc-end-pc">
                        <div class="p-cv__step">
                            <span>カンタン！ <br class="u-display__tab">3 STEP</span>
                        </div>
                    </div>
                    <div class="l-block jc-start-pc">
                        <button class="c-button__cv p-button__cv" data-section="cv">
                            <span>今すぐ会員登録</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-cv__outertextarea right">
            <div class="p-cv__outertext camp">CAMPAIGN</div>
            <div class="p-cv__outertext lim">LIMITED TIME</div>
        </div>
    </div>
</section>

<!-- realizeation(1) -->
<section class="l-section p-real5">
    <div class="p-real5__inner">
        <div class="p-headline__wrapper" data-section="real5">
            <div class="c-anchor__t-40" id="real5"></div>            
            <h2 class="c-headline__h2 p-headline__h2" data-subtitle="REALIZATION">Rich-Lifeがお約束する、<br class="u-display__sp">5つの暮らし</h2>
        </div>
        <div class="p-real5__gridwrapper">
            <ul class="p-real5__gridgroup">
                <li class="p-real5__grid">
                    <div class="p-real5__gridhead"><span>reason 01</span></div>
                    <div class="p-real5__gridimage">
                        <picture>
                        <source srcset="<?php echo GET_PATH()?>/realization/chair-sp.png" media="(max-width: 768px)" width="111" height="112">
                        <img src="<?php echo GET_PATH()?>/realization/chair-pc.png" alt="reason 01" width="167" height="168">
                        </picture>
                    </div>
                    <div class="p-real5__gridlead">交換・返却費が無料で“今”最適な空間を選べる</div>
                </li>
                <li class="p-real5__grid" data-style="wide">
                    <div class="p-real5__gridhead"><span>reason 02</span></div>
                    <div class="p-real5__gridimage">
                        <picture>
                        <source srcset="<?php echo GET_PATH()?>/realization/woman-sp.png" media="(max-width: 768px)" width="111" height="112">
                        <img src="<?php echo GET_PATH()?>/realization/woman-pc.png" alt="reason 02" width="167" height="168">
                        </picture>
                    </div>
                    <div class="p-real5__gridlead">初期コスト抑え、気軽に質の良い空間を手に入れられる</div>
                </li>
            </ul>
            <ul class="p-real5__gridgroup">
                <li class="p-real5__grid">
                    <div class="p-real5__gridhead"><span>reason 03</span></div>
                    <div class="p-real5__gridimage">
                        <picture>
                        <source srcset="<?php echo GET_PATH()?>/realization/man-sp.png" media="(max-width: 768px)" width="111" height="112">
                        <img src="<?php echo GET_PATH()?>/realization/man-pc.png" alt="reason 03" width="167" height="168">
                        </picture>
                    </div>
                    <div class="p-real5__gridlead">モノを持たずに引っ越しや模様替えを楽しめる</div>
                </li>
                <li class="p-real5__grid">
                    <div class="p-real5__gridhead"><span>reason 04</span></div>
                    <div class="p-real5__gridimage">
                        <picture>
                        <source srcset="<?php echo GET_PATH()?>/realization/earth-sp.png" media="(max-width: 768px)" width="111" height="112">
                        <img src="<?php echo GET_PATH()?>/realization/earth-pc.png" alt="reason 04" width="167" height="168">
                        </picture>
                    </div>
                    <div class="p-real5__gridlead">モノをなるべく捨てない、環境に優しい暮らし</div>
                </li>
                <li class="p-real5__grid">
                    <div class="p-real5__gridhead"><span>reason 05</span></div>
                    <div class="p-real5__gridimage">
                        <picture>
                        <source srcset="<?php echo GET_PATH()?>/realization/drink-sp.png" media="(max-width: 768px)" width="111" height="112">
                        <img src="<?php echo GET_PATH()?>/realization/drink-pc.png" alt="reason 05" width="167" height="168">
                        </picture>
                    </div>
                    <div class="p-real5__gridlead">本当に好きなモノに囲まれる豊かな暮らし</div>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- 利用者様の声 | voice -->
<section class="l-section p-voice">
    <!-- 権威性 -->
    <div class="p-voice__inner">
        <div class="p-voice__author">
            <div class="p-voice__author__inner">
                <div class="p-voice__author__leaf left"></div>
                <div class="p-voice__author__content">
                    <p>おかげさまで<br class="p-display__sp">Rich-Life USER 総会員数</p>
                    <p><span>16</span>万人突破!</p>
                </div>
                <div class="p-voice__author__leaf right"></div>
            </div>
        </div>
        <div class="p-headline__wrapper" data-section="voice">
            <div class="c-anchor__t-40" id="voice"></div>            
            <h2 class="c-headline__h2 p-headline__h2" data-subtitle="VOICE">利用者さまの声</h2>
        </div>
        <div class="p-voice__content">
            <ul class="p-voice__reviewlist">
                <!-- 01 -->
                <li class="p-voice__reviewitem">
                    <div class="p-voice__itemimage">
                        <picture>
                        <source srcset="<?php echo GET_PATH()?>/voice/woman_in_the_room-sp.jpg" media="(max-width: 768px)" width="351" height="214">
                        <img src="<?php echo GET_PATH()?>/voice/woman_in_the_room-pc.jpg" alt="review 02" width="368" height="223">
                        </picture>
                    </div>
                    <div class="p-voice__itemcontent">
                        <div class="p-voice__itemarticle">
                            <div class="p-voice__itemtitle">
                                <p>センスのいい家具で</p><p>ワンランク上のお部屋に</p>
                            </div>
                            <div class="p-voice__itemlead"><p>必要なときにだけ借りることができるコンセプトに魅力を感じて利用。<br>
    レンタルできる家具はどれもセンスが良いので、ハズレがありません。そしてRich-Lifeの家具をお迎えしたことで、いつものおうち空間がワンランク上の部屋になって本当にうれしいです。<br>
    今ではシーズンごとに家具のテイストを変えるのが楽しみになっています。</p>
                            </div>
                        </div>
                        <div class="p-voice__itemreviewer">
                            <p>20代女性・XXXX子さん</p>
                        </div>
                    </div>
                </li>
                <!-- 02 -->
                <li class="p-voice__reviewitem">
                    <div class="p-voice__itemimage">
                        <picture>
                        <source srcset="<?php echo GET_PATH()?>/voice/parent&child-sp.jpg" media="(max-width: 768px)" width="351" height="214">
                        <img src="<?php echo GET_PATH()?>/voice/parent&child-pc.jpg" alt="review 02" width="368" height="223">
                        </picture>
                    </div>
                    <div class="p-voice__itemcontent">
                        <div class="p-voice__itemarticle">
                            <div class="p-voice__itemtitle">
                                <p>家具家電を汚した時の</p><p>レンタル保証がうれしい。</p>
                            </div>
                            <div class="p-voice__itemlead"><p>家具のレンタルに興味はあったものの、小さい子どもがいるので家具・家電を汚してしまった時のことが心配でなかなか踏み切れずにいました。ですがRich-Lifeは家具を汚したときの保証があるので安心して利用できています。以前子供がソファーに飲み物をこぼしてしまったのですが無料で交換してくれてとても助かりました。</p>
                            </div>
                        </div>
                        <div class="p-voice__itemreviewer">
                            <p>20代女性・XXXX子さん</p>
                        </div>
                    </div>
                </li>
                <!-- 03 -->
                <li class="p-voice__reviewitem">
                    <div class="p-voice__itemimage">
                        <picture>
                        <source srcset="<?php echo GET_PATH()?>/voice/room-sp.jpg" media="(max-width: 768px)" width="351" height="214">
                        <img src="<?php echo GET_PATH()?>/voice/room-pc.jpg" alt="review 03" width="368" height="223">
                        </picture>
                    </div>
                    <div class="p-voice__itemcontent">
                        <div class="p-voice__itemarticle">
                            <div class="p-voice__itemtitle">
                                <p>本当に好きなモノに囲まれる</p><p>豊かな暮らしを。</p>
                            </div>
                            <div class="p-voice__itemlead"><p>子どもが巣立ち、これからは必要最小限でかつ品質の良いお気に入りのモノたちに囲まれた生活をしたいと思っていました。でもいきなり購入するのは気が引ける、と思っていたところこちらのサービスを見つけました。月額440円〜利用できますので色々試しながらこれからの自分たちに合った家具・家電を探しています。</p>
                            </div>
                        </div>
                        <div class="p-voice__itemreviewer">
                            <p>20代女性・XXXX子さん</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>


<!-- お悩み | solution -->
<section class="l-section p-solution">
<div class="p-solution__inner">
        <div class="p-headline__wrapper" data-section="solution">
            <div class="c-anchor__t-40" id="solution"></div>
            <h2 class="c-headline__h2 p-headline__h2" data-subtitle="SOLUTION">こんなことで<br class="u-display__sp">お悩みではないですか？</h2>
        </div>

        <div class="p-solution__content">
            <ul class="p-solution__listwrapper">
                <li class="p-solution__listitem">しっくりくる家具を選びたい。でもいきなり買うのは自信がない</li>
                <li class="p-solution__listitem">引っ越しのたびに物を持っていることが大きな負担である。</li>
                <li class="p-solution__listitem">きちんとした家具を使いたいけど、予算的に負担が大きい</li>
                <li class="p-solution__listitem" data-no="04">新しい商品が出たら買い換えたい</li>
                <li class="p-solution__listitem" data-no="05">模様替えをもっと楽しみたい</li>
                <li class="p-solution__listitem">モノを捨てない、環境に優しい暮らしを楽しみながらしたい</li>
            </ul>
        </div>
    </div>
</section>


<!-- realization(2) -->
<section class="p-real">
    <div class="p-real__inner">
        <div class="p-real__top">
            <div class="p-real__top__frame"></div>
            <p>Rich-Lifeの<br class="u-display__sp">家具・家電レンタルサービスは<br class="u-display__sp">そんな理想の暮らしをご提供いたします。</p>
        </div>

        <div class="p-headline__wrapper" data-section="real">
            <div class="c-anchor__t-40" id="real"></div>            
            <h2 class="c-headline__h2 p-headline__h2" data-subtitle="REALIZATION">Rich-Lifeで叶える、<br class="u-display__sp">理想の暮らし紹介</h2>
        </div>

        <ul class="p-real__scenewrapper">
            <!-- 01 -->
            <li class="p-real__scene">
                <div class="p-real__scenebgwrapper">
                    <div class="p-real__scenebg"></div>
                </div>
                <div class="p-real__sceneimage">
                    <picture>
                        <source srcset="<?php echo GET_PATH()?>/realization/scene01/main-sp.jpg" media="(max-width: 768px)" width="368" height="223">
                        <img src="<?php echo GET_PATH()?>/realization/scene01/main-pc.jpg" alt="scene 01" width="1180" height="475">
                    </picture>
                </div>
                <div class="p-real__scenecontent">
                    <div class="p-real__scenecontent__inner">
                        <div class="p-real__scenecontent__bg"></div>
                        <h3 class="p-real__scenecontent__title" data-no="1"><span>「スキ」なものを際立たせた</span><span>空間作りを。</span></h3>
                        <div class="p-real__scenecontent__lead" data-no="1">
                            <h4>STYLE POINT</h4>
                            <p>ソファの足元にオットマンを配置すれば、カウチスタイルの出来上がり。<br>
                            アームレスの特徴を活かして左右どちらにでも足を降ろしやすいので、楽な姿勢を見つけてみて。</p>
                            <div class="p-real__scenecontent__leadimage u-display__sp-tab" data-no="l1">
                                <picture>
                                    <source srcset="<?php echo GET_PATH()?>/realization/scene01/man-sp.jpg" media="(max-width: 768px)" width="288" height="132">
                                    <img src="<?php echo GET_PATH()?>/realization/scene01/man@2x-sp.png" alt="コーヒー飲む男" width="576" height="264">
                                </picture>
                            </div>
                        </div>
                        <div class="p-real__scenecontent__lead" data-no="2">
                            <h4>ONE POINT ADVICE</h4>
                            <p>モバイルプロジェクターをサイドテーブルに置いて、足を伸ばした状態でゆったりと映画を楽むのはどうでしょう。Rich-Lifeではターンテーブルやスピーカーなどの音楽 家電も取り扱っています。 </p>
                            <div class="p-real__scenecontent__leadimage u-display__sp-tab" data-no="l2">
                                <picture>
                                    <source srcset="<?php echo GET_PATH()?>/realization/scene01/projector-sp.jpg" media="(max-width: 768px)" width="288" height="132">
                                    <img src="<?php echo GET_PATH()?>/realization/scene01/projector@2x-sp.png" alt="プロジェクター" width="576" height="264">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="p-real__scenecontent__outer" data-side="right">
                        <div class="p-real__scenecontent__leadimage u-hidden__sp" data-no="pcl1">
                            <picture>
                                <img src="<?php echo GET_PATH()?>/realization/scene01/man-pc.jpg" alt="コーヒー飲む男" width="313" height="404">
                            </picture>
                        </div>
                        <div class="p-real__scenecontent__leadimage u-hidden__sp" data-no="pcl2">
                            <picture>
                                <img src="<?php echo GET_PATH()?>/realization/scene01/projector-pc.jpg" alt="プロジェクター" width="331" height="404">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="p-real__scenelineup">
                    <h3 class="p-real__scenelineup__title">使用している家具・家電</h3>
                    <p class="p-real__scenelineup__subtitle">LINE UP</p>
                    <ul>
                        <li>
                            <div class="p-real__lineup-image">
                                <picture>
                                    <source srcset="<?php echo GET_PATH()?>/realization/scene01/lu_speaker-sp.jpg" media="(max-width: 768px)" width="104" height="104">
                                    <img src="<?php echo GET_PATH()?>/realization/scene01/lu_speaker-pc.jpg" alt="LINE UP 1" width="300" height="300">
                                </picture>
                            </div>
                            <div class="p-real__lineup-content">
                                <h4>House of Speaker</h4>
                                <p>Rich Black</p>
                            </div>
                        </li>
                        <li>
                            <div class="p-real__lineup-image">
                                <picture>
                                    <source srcset="<?php echo GET_PATH()?>/realization/scene01/lu_projector-sp.jpg" media="(max-width: 768px)" width="104" height="104">
                                    <img src="<?php echo GET_PATH()?>/realization/scene01/lu_projector-pc.jpg" alt="LINE UP 2" width="300" height="300">
                                </picture>
                            </div>
                            <div class="p-real__lineup-content">
                                <h4>Mobile Projector</h4>
                                <p>Silver</p>
                            </div>
                        </li>
                        <li>
                            <div class="p-real__lineup-image">
                                <picture>
                                    <source srcset="<?php echo GET_PATH()?>/realization/scene01/lu_roomsofa-sp.jpg" media="(max-width: 768px)" width="104" height="104">
                                    <img src="<?php echo GET_PATH()?>/realization/scene01/lu_roomsofa-pc.jpg" alt="LINE UP 2" width="300" height="300">
                                </picture>
                            </div>
                            <div class="p-real__lineup-content">
                                <h4>Couch Sofa</h4>
                                <p>1P</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- 02 -->
            <li class="p-real__scene">
                <div class="p-real__scenebgwrapper">
                    <div class="p-real__scenebg"></div>
                </div>
                <div class="p-real__sceneimage">
                    <picture>
                        <source srcset="<?php echo GET_PATH()?>/realization/scene02/main-sp.jpg" media="(max-width: 768px)" width="368" height="223">
                        <img src="<?php echo GET_PATH()?>/realization/scene02/main-pc.jpg" alt="scene 02" width="1180" height="475">
                    </picture>
                </div>
                <div class="p-real__scenecontent">
                    <div class="p-real__scenecontent__inner right">
                        <div class="p-real__scenecontent__bg"></div>
                        <h3 class="p-real__scenecontent__title" data-no="r1"><span>季節にあった彩りを</span><span>手軽に楽しむ。</span></h3>
                        <div class="p-real__scenecontent__lead" data-no="r1">
                            <h4>STYLE POINT</h4>
                            <p>ソファの上のクッションや壁面のフレーム、ソファ横の1人掛けの椅子などをベージュ〜ブラウンのアースカラーで統一。一方で碧編の白をワゴンの上に置くことで調和をとり、全体的に落ち着いた雰囲気に。</p>
                            <div class="p-real__scenecontent__leadimage u-display__sp-tab" data-no="spr1">
                                <picture>
                                    <source srcset="<?php echo GET_PATH()?>/realization/scene02/room-right-sp.jpg" media="(max-width: 768px)" width="288" height="132">
                                    <img src="<?php echo GET_PATH()?>/realization/scene02/room-right@2x-sp.png" alt="ソファ" width="576" height="264">
                                </picture>
                            </div>
                        </div>
                        <div class="p-real__scenecontent__lead" data-no="r2">
                            <h4>ONE POINT ADVICE</h4>
                            <p>お部屋のコーディネートをまとめるコツの一つとして、
同系色を散らして使うテクニックがあります。寒い冬の日でもどこかあたたかさと落ち着きを感じさせるベージュ〜ブラウンのアースカラーを試してみては？ </p>
                            <div class="p-real__scenecontent__leadimage u-display__sp-tab" data-no="spr2">
                                <picture>
                                    <source srcset="<?php echo GET_PATH()?>/realization/scene02/room-left-sp.jpg" media="(max-width: 768px)" width="288" height="132">
                                    <img src="<?php echo GET_PATH()?>/realization/scene02/room-left@2x-sp.png" alt="部屋" width="576" height="264">
                                </picture>
                            </div>
                        </div>
                    </div><!-- inner -->
                    <div class="p-real__scenecontent__outer" data-side="left">
                        <div class="p-real__scenecontent__leadimage u-display__pc" data-no="pcr1">
                            <picture>
                                <img src="<?php echo GET_PATH()?>/realization/scene02/room-right-pc.jpg" alt="部屋" width="313" height="404">
                            </picture>
                        </div>
                        <div class="p-real__scenecontent__leadimage u-display__pc" data-no="pcr2">
                            <picture>
                                <img src="<?php echo GET_PATH()?>/realization/scene02/room-left-pc.jpg" alt="ソファ" width="313" height="404">
                            </picture>
                        </div>
                    </div>
                </div>

                <div class="p-real__scenelineup" data-no="2">
                    <h3 class="p-real__scenelineup__title">使用している家具・家電</h3>
                    <p class="p-real__scenelineup__subtitle">LINE UP</p>
                    <ul data-no="2">
                        <li>
                            <div class="p-real__lineup-image">
                                <picture>
                                    <source srcset="<?php echo GET_PATH()?>/realization/scene02/lu_sofa-sp.jpg" media="(max-width: 768px)" width="104" height="104">
                                    <img src="<?php echo GET_PATH()?>/realization/scene02/lu_sofa-pc.jpg" alt="部屋" width="300" height="300">
                                </picture>
                            </div>
                            <div class="p-real__lineup-content">
                                <h4>Low Sofa</h4>
                                <p>ローソファ</p>
                            </div>
                        </li>
                        <li>
                            <div class="p-real__lineup-image">
                                <picture>
                                    <source srcset="<?php echo GET_PATH()?>/realization/scene02/lu_table-sp.jpg" media="(max-width: 768px)" width="104" height="104">
                                    <img src="<?php echo GET_PATH()?>/realization/scene02/lu_table-pc.jpg" alt="テーブル" width="300" height="300">
                                </picture>
                            </div>
                            <div class="p-real__lineup-content">
                                <h4>Mini Table</h4>
                                <p>直径45cm</p>
                            </div>
                        </li>
                        <li>
                            <div class="p-real__lineup-image">
                                <picture>
                                    <source srcset="<?php echo GET_PATH()?>/realization/scene02/lu_chair-sp.jpg" media="(max-width: 768px)" width="104" height="104">
                                    <img src="<?php echo GET_PATH()?>/realization/scene02/lu_chair-pc.jpg" alt="椅子" width="300" height="300">
                                </picture>
                            </div>
                            <div class="p-real__lineup-content">
                                <h4>Single Sofa</h4>
                                <p>一人掛け<span class="u-hidden__sp">ソファ</span></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</section>


<!-- CV -->
<section class="l-section p-cv">
    <div class="p-cv__inner">
        <div class="p-cv__outertextarea left">
            <div class="p-cv__outertext camp">CAMPAIGN</div>
            <div class="p-cv__outertext lim">LIMITED TIME</div>
        </div>
        <div class="p-cv__content">
            <div class="p-cv__cinner">
                <div class="p-cv__head">
                    <p>高品質でセンスのいい<br class="u-display__sp">家具・家電を</p>
                    <p><span><strong>10</strong>%OFF</span>価格で<br class="u-display__sp">レンタルできます。</p>
                </div>
                <div class="p-cv__tagwrapper">
                    <ul>
                        <li class="no01">月額<br class="u-display__sp">440円～</li>
                        <li class="no02">1か月～レンタル可能</li>
                        <li class="no03">長期レンタル<br class="u-display__sp">割引あり</li>
                    </ul>
                </div>
                <div class="p-cv__footer">
                    <div class="l-block jc-end-pc">
                        <div class="p-cv__step">
                            <span>カンタン！ <br class="u-display__tab">3 STEP</span>

                        </div>
                    </div>
                    <div class="l-block jc-start-pc">
                        <button class="c-button__cv p-button__cv" data-section="cv">
                            <span>今すぐ会員登録</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-cv__outertextarea right">
            <div class="p-cv__outertext camp">CAMPAIGN</div>
            <div class="p-cv__outertext lim">LIMITED TIME</div>
        </div>
    </div>
</section>


<!-- 愛されるポイント | feature -->
<section class="l-section p-feature">
    <div class="p-feature__inner">
        <div class="p-headline__wrapper" data-section="features">
            <div class="c-anchor__t-40" id="features"></div>
            <h2 class="c-headline__h2 p-headline__h2" data-subtitle="FEATURES">Rich-Lifeが愛される<br class="u-display__sp">4つのポイント</h2>
        </div>

        <ul class="p-feature__content">
            <!-- 01 -->
            <li class="p-feature__item" data-side="right">
                <div class="p-feature__itempoint"><span>point 01</span></div>
                <div class="p-feature__itemtitle">交換・返却が自由でカンタン</div>
                <div class="p-feature__itemimage">
                    <picture>
                    <source srcset="<?php echo GET_PATH()?>features/desk&chair-sp.jpg" media="(max-width: 768px)" width="291" height="180">
                    <img src="<?php echo GET_PATH()?>features/desk&chair-pc.jpg" alt="desk&chair" width="446" height="275">
                    </picture>
                </div>
                <div class="p-feature__itemlead">自分の生活に最適なものを使うために時間や労力をかけて選んだにも関わらず、「思っていたのと違う」と後悔した経験はありませんか？Rich-Lifeでは家具・家電のレンタルができますので取捨選択にかける時間を大幅にカットできます。また実際に使用してみて、自分に合わないと思ったらすぐに交換・返却ができるので、手軽さゆえの心の余裕が生まれるのもポイント。</div>
            </li>
            <!-- 02 -->
            <li class="p-feature__item" data-side="left">
                <div class="p-feature__itempoint"><span>point 02</span></div>
                <div class="p-feature__itemtitle">月額定額制で返却期限なし</div>
                <div class="p-feature__itemimage">
                    <picture>
                    <source srcset="<?php echo GET_PATH()?>features/subscription-sp.jpg" media="(max-width: 768px)" width="290" height="136">
                    <img src="<?php echo GET_PATH()?>features/subscription-pc.jpg" alt="subscription" width="452" height="244">
                    </picture>
                </div>
                <div class="p-feature__itemlead">1ヶ月という短期間からのレンタルが可能ですので、自分により合う家具・家電を色々試せる手軽さが最大の特徴。また、月額定額制なので費用管理がしやすいのもポイント。</div>
            </li>
            <!-- 03 -->
            <li class="p-feature__item" data-side="right">
                <div class="p-feature__itempoint"><span>point 03</span></div>
                <div class="p-feature__itemtitle">きちんとした品質でセンスのいいものだけをセレクト</div>
                <div class="p-feature__itemimage">
                    <picture>
                    <source srcset="<?php echo GET_PATH()?>features/room-sp.jpg" media="(max-width: 768px)" width="291" height="180">
                    <img src="<?php echo GET_PATH()?>features/room-pc.jpg" alt="room" width="446" height="275">
                    </picture>
                </div>
                <div class="p-feature__itemlead">きちんとしたモノは自分の生活の質を向上させてくれます。生活の質は心の余裕にも繋がりますので、それが自然と自分の気持ちをも高めてくれる好循環が生まれます。またきちんとした品質でかつセンスのいいものだけを取り揃えておりますので家具・家電の善し悪しが分からないという人でも失敗が少ないのも嬉しいポイントです。</div>
            </li>
            <!-- 04 -->
            <li class="p-feature__item" data-side="left">
                <div class="p-feature__itempoint"><span>point 04</span></div>
                <div class="p-feature__itemtitle">ライフステージの変化に対応</div>
                <div class="p-feature__itemimage">
                <picture>
                    <source srcset="<?php echo GET_PATH()?>/features/family-sp.jpg" media="(max-width: 768px)" width="291" height="179">
                    <img src="<?php echo GET_PATH()?>/features/family-pc.jpg" alt="family" width="446" height="275">
                    </picture>
                </div>
                <div class="p-feature__itemlead">年齢が上がるにつれてライフステージは変遷していくもの。それと同時に、そのときの暮らしにあった家具・家電のスペックが変わりますので、購入するとなると生活スタイルが変わるたびに家具・家電の入れ替えを迫られるなんてことも。でもRich-Lifeはレンタル品なので、先の心配をすることなく「今の自分に必要なモノだけ」を置いておける気楽さを手に入れられます。また、まだまだ使えるモノを廃棄するという手間や罪悪感をも払拭してくれます。</div>
            </li>
        </ul>
    </div>
</section>


<!-- 使い方 | how-to -->
<section class="l-section p-howto">
    <div class="p-howto__inner">
        <div class="p-headline__wrapper" data-section="features">
            <div class="c-anchor__t-40" id="howto"></div>
            <h2 class="c-headline__h2 p-headline__h2" data-subtitle="HOW TO USE">気軽に簡単<span class="u-display__sp">。</span><br class="u-display__sp"><span class="u-hidden__sp">に</span>Rich-Lifeの使い方</h2>
        </div>

        <ul class="p-howto__content">
            <!-- 01 -->
            <li class="p-howto__item">
                <div class="p-howto__itemimage">
                    <picture>
                        <source srcset="<?php echo GET_PATH()?>/howto/search-sp.jpg" media="(max-width: 768px)" width="160" height="160">
                        <img src="<?php echo GET_PATH()?>/howto/search-pc.jpg" alt="search"  width="268" height="268">
                    </picture>
                </div>
                <div class="p-howto__itemcontent">
                    <div class="p-howto__itemhead">
                        <div class="p-howto__itemno">01</div>
                        <div class="p-howto__itemtitle">ネットで注文</div>
                    </div>
                    <div class="p-howto__itemlead">スマホやパソコンから、商品と配送希望日を選んで、注文</div>
                </div>
            </li>
            <!-- 02 -->
            <li class="p-howto__item">
                <div class="p-howto__itemimage">
                    <picture>
                        <source srcset="<?php echo GET_PATH()?>/howto/moving-sp.jpg" media="(max-width: 768px)" width="160" height="160">
                        <img src="<?php echo GET_PATH()?>/howto/moving-pc.jpg" alt="moving"  width="268" height="268">
                    </picture>
                </div>
                <div class="p-howto__itemcontent">
                    <div class="p-howto__itemhead">
                        <div class="p-howto__itemno">02</div>
                        <div class="p-howto__itemtitle">配送・設置</div>
                    </div>
                    <div class="p-howto__itemlead">専門業者がご自宅までお届け 商品の搬入は全ておまかせ</div>
                </div>
            </li>
            <!-- 03 -->
            <li class="p-howto__item">
                <div class="p-howto__itemimage">
                    <picture>
                        <source srcset="<?php echo GET_PATH()?>/howto/chair-sp.jpg" media="(max-width: 768px)" width="160" height="160">
                        <img src="<?php echo GET_PATH()?>/howto/chair-pc.jpg" alt="chair"  width="268" height="268">
                    </picture>
                </div>
                <div class="p-howto__itemcontent">
                    <div class="p-howto__itemhead">
                        <div class="p-howto__itemno">03</div>
                        <div class="p-howto__itemtitle">ご利用</div>
                    </div>
                    <div class="p-howto__itemlead">購入した商品と同じように普段の生活でご利用いただけます</div>
                </div>
            </li>
            <!-- 04 -->
            <li class="p-howto__item">
                <div class="p-howto__itemimage">
                    <picture>
                        <source srcset="<?php echo GET_PATH()?>/howto/room-sp.jpg" media="(max-width: 768px)" width="160" height="160">
                        <img src="<?php echo GET_PATH()?>/howto/room-pc.jpg" alt="room" width="268" height="268">
                    </picture>
                </div>
                <div class="p-howto__itemcontent">
                    <div class="p-howto__itemhead">
                        <div class="p-howto__itemno">04</div>
                        <div class="p-howto__itemtitle">交換・返送</div>
                    </div>
                    <div class="p-howto__itemlead">交換や返却の際も、搬出は専門業者に全ておまかせ ※一部地域を除く</div>
                </div>
            </li>
        </ul>
    </div>
</section>


<!-- CV -->
<section class="l-section p-cv">
    <div class="p-cv__inner">
        <div class="p-cv__outertextarea left">
            <div class="p-cv__outertext camp">CAMPAIGN</div>
            <div class="p-cv__outertext lim">LIMITED TIME</div>
        </div>
        <div class="p-cv__content">
            <div class="p-cv__cinner">
                <div class="p-cv__head">
                    <p>高品質でセンスのいい<br class="u-display__sp">家具・家電を</p>
                    <p><span><strong>10</strong>%OFF</span>価格で<br class="u-display__sp">レンタルできます。</p>
                </div>
                <div class="p-cv__tagwrapper">
                    <ul>
                        <li class="no01">月額<br class="u-display__sp">440円～</li>
                        <li class="no02">1か月～レンタル可能</li>
                        <li class="no03">長期レンタル<br class="u-display__sp">割引あり</li>
                    </ul>
                </div>
                <div class="p-cv__footer">
                    <div class="l-block jc-end-pc">
                        <div class="p-cv__step">
                            <span>カンタン！ <br class="u-display__tab">3 STEP</span>
                        </div>
                    </div>
                    <div class="l-block jc-start-pc">
                        <button class="c-button__cv p-button__cv" data-section="cv">
                            <span>今すぐ会員登録</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-cv__outertextarea right">
            <div class="p-cv__outertext camp">CAMPAIGN</div>
            <div class="p-cv__outertext lim">LIMITED TIME</div>
        </div>
    </div>
</section>


<!-- faq -->
<section class="l-section p-faq">
    <div class="p-faq__inner">
        <div class="p-headline__wrapper" data-section="faq">
            <div class="c-anchor__t-40" id="faq"></div>            
            <h2 class="c-headline__h2 p-headline__h2" data-subtitle="FAQ">よくある質問</h2>
        </div>
        <div class="p-faq__content">
            <ul class="p-faq__grid" itemscope itemtype="https://schema.org/FAQPage">
                <li class="p-faq__griditem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <details data-js="accordion-details">
                        <summary class="p-faq__q" data-js="accordion-summary">
                            <span class="p-faq__q-inner p-accordion__summary-inner" itemprop="name">
                                Rich-Lifeはどんなサービスですか？<span class="icon" data-type="plus"></span>
                            </span>
                        </summary>
                        <div class="p-faq__a" data-js="accordion-content">
                            <div class="p-faq__a__inner" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p itemprop="text">Rich-lifeは必要なときに必要なものだけを使える家具・家電のレンタルサービスです。</p>
                            </div>
                        </div>
                    </details>
                </li>
                <li class="p-faq__griditem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <details data-js="accordion-details">
                        <summary class="p-faq__q" data-js="accordion-summary">
                            <span class="p-faq__q-inner p-accordion__summary-inner" itemprop="name">
                                レンタル期間は選べますか？<span class="icon" data-type="plus"></span>
                            </span>
                        </summary>
                        <div class="p-faq__a" data-js="accordion-content">
                            <div class="p-faq__a__inner" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p itemprop="text">レンタル期間は1ヶ月からです。更新手続きは毎月自動で行いますので更新手続きは不要です。</p>
                            </div>
                        </div>
                    </details>
                </li>
                
                <li class="p-faq__griditem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <details data-js="accordion-details">
                        <summary class="p-faq__q" data-js="accordion-summary">
                            <span class="p-faq__q-inner p-accordion__summary-inner" itemprop="name">
                            注文してから届くまでどのくらい<br class="u-display__sp">期間がかかりますか？<span class="icon" data-type="plus"></span>
                            </span>
                        </summary>
                        <div class="p-faq__a" data-js="accordion-content">
                            <div class="p-faq__a__inner" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p itemprop="text">商品とお住まいの地域によりますが、約1週間ほどでお届けいたします。</p>
                            </div>
                        </div>
                    </details>
                </li>

                <li class="p-faq__griditem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <details data-js="accordion-details">
                        <summary class="p-faq__q" data-js="accordion-summary">
                            <span class="p-faq__q-inner p-accordion__summary-inner" itemprop="name">
                            商品の交換は可能ですか？<span class="icon" data-type="plus"></span>
                            </span>
                        </summary>
                        <div class="p-faq__a" data-js="accordion-content">
                            <div class="p-faq__a__inner" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p itemprop="text">可能でございます。マイページより交換申請手続きをお願いいたします。</p>
                            </div>
                        </div>
                    </details>
                </li>

                <li class="p-faq__griditem" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <details data-js="accordion-details">
                        <summary class="p-faq__q" data-js="accordion-summary">
                            <span class="p-faq__q-inner p-accordion__summary-inner" itemprop="name">
                                申込の仕方を教えてください。<span class="icon" data-type="plus"></span>
                            </span>
                        </summary>
                        <div class="p-faq__a" data-js="accordion-content">
                            <div class="p-faq__a__inner" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p itemprop="text">
                                1.ご希望の商品を選択し、カートへ入れてください。<br>
                                2.右上のカートボタンを押し、お届け先と支払い情報の登録をお願いいたします。<br>
                                3.配送日を選択し、注文確定ボタンを押していただけましたら注文完了となります。<br>
                                </p>
                            </div>
                        </div>
                    </details>
                </li>
            </ul>
        </div>
        <div class="p-button__wrapper" data-section="faq">
            <button class="c-button__readmore p-button__readmore" data-icontype="arrow-white" data-section="faq">
                よくある質問を見る
            </button>
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>

</body>
</html>
