<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <meta name="keywords" content="アイエスガステム,エネルギー事業,住宅リフォーム事業,環境事業,千葉県,茨城県,東京都,神奈川県,アイ・エス・ガステム株式会社">
    <meta name="description" content="「快適な暮らしを創造する365日24時間のライフパートナー」アイ・エス・ガステム株式会社">
    <meta name="viewport" content="width=device-width,user-scalable=no" id="viewport">
    <script>
        var viewport = document.getElementById("viewport");
        var mql = window.matchMedia("(max-width:640px)");

        function mediaChange(mql) {
            if (!mql.matches) {
                viewport.setAttribute("content", "width=1240,user-scalable=no");
            }
        }

        mediaChange(mql);
    </script>
    <meta name="format-detection" content="telephone=no">
    <!-- link -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/normalize.css" rel="stylesheet" media="all">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/base.css" rel="stylesheet" media="all">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/font-awesome.min.css" rel="stylesheet"
          media="all">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/common.css" rel="stylesheet" media="all">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet" media="all">
    <!-- js -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-3.2.0.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.bxslider.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.cookie.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.smooth-scroll.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/common.js"></script>
    <?php //wp_head(); ?>
</head>
<body id="top">
<div id="wrap">
    <header id="header">
        <div class="inner">
            <h1 id="siteTitle">
                <?php demo_the_custom_logo() ?>
            </h1>
            <nav id="gNav">
                <?php if (has_nav_menu('primary')) : ?>
                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                <?php endif; ?>
                <div class="contact"><a href="/support/contact/" class="hov"><span>お問い合わせ</span></a></div>
                <div class="search">
                    <div class="input">
                        <form action="http://www.google.co.jp/search" method="get">
                            <input type="hidden" name="ie" value="UTF-8">
                            <input type="hidden" name="oe" value="UTF-8">
                            <input type="hidden" name="hl" value="ja">
                            <input type="hidden" name="lr" value="lang_ja">
                            <input type="hidden" name="as_sitesearch" value="https://www.isgnet.jp/">
                            <input type="text" name="q" class="textbox" id="searchArea" placeholder="サイト内を検索"/>
                            <input type="submit" name="btnG" value="検索" id="submitTxt"/>
                        </form>
                    </div>
                </div>
            </nav><!-- /gNav -->
            <div class="search"><a href="#" class="hov"><span>サイト内を検索</span></a></div>
            <div class="contact"><a href="/support/contact/" class="hov"><span>お問い合わせ</span></a></div>
            <div class="tel"><a href="tel:047-429-1234"><span class="label">緊急時のご連絡先</span><span class="number">047-429-1234</span></a>
            </div>
            <div id="btMenu"></div>
        </div>
        <div id="searchBox">
            <div class="input">
                <form action="http://www.google.co.jp/search" method="get">
                    <input type="hidden" name="ie" value="UTF-8">
                    <input type="hidden" name="oe" value="UTF-8">
                    <input type="hidden" name="hl" value="ja">
                    <input type="hidden" name="lr" value="lang_ja">
                    <input type="hidden" name="as_sitesearch" value="https://www.isgnet.jp/">
                    <input type="text" name="q" class="textbox" id="searchArea"/>
                    <input type="submit" name="btnG" value="検索" id="submitTxt"/>
                </form>
            </div>
        </div>
    </header><!-- /header -->