<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/assets/php/bootstrap.php';


$pageSlug = detectPageSlug(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?php echo getLang('locale_lang') ?>">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php generateMetaTags($pageSlug); ?>
        <?php generateHreflangTags(); ?>
        <?php generateJsonLd($pageSlug); ?>
        <link rel="icon" href="/assets/images/cropped-logo-2-1-32x32.webp" sizes="32x32" />
        <link rel="icon" href="/assets/images/cropped-logo-2-1-192x192.webp" sizes="192x192" />
        <link rel="apple-touch-icon" href="/assets/images/cropped-logo-2-1-180x180.webp" />
        <link rel="stylesheet" href="/assets/css/7dd16efcaed0dcd402485e2673788c57.css">
        <link rel="stylesheet" href="/assets/css/030f73c45257861d373a56b3b7cbd2a0.css">
        <link rel="stylesheet" href="/assets/css/069d067256f29b0a1145d6eacdbc25bb.css">
        <link rel="stylesheet" href="/assets/css/a43e5b2b0d34867e5c8f8d6bca006c9a.css">
        <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="/assets/css/about.css">
        <link rel="stylesheet" href="/assets/css/index.css?v=3">
        <script src="/assets/js/menu.js" defer></script>
        <script src="/assets/js/accordion.js" defer></script>
        <script type="module" src="/assets/js/swiper.js" defer></script>
        <script src="/assets/js/swiper-bundle.min.js" defer></script>
        <script src="/assets/js/slider.js" defer></script>
    </head>

    <body class="wp-singular page-template-default page page-id-1143 wp-theme-target_landing non-front-page">
        <header class="main_header">
            <button class="hamburger_menu hamburger_menu__js hamburger--3dx d-xxl-none d-xl-none d-lg-none d-md-block d-block hamburger" type="button" aria-label="Menu" aria-controls="navigation"
                id="hamburger-menu-button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <a class="logo" href="<?php echo getHref('') ?>" style="background-image:url(/assets/images/logo-2.svg?v=2);"></a>
                    </div>
                    <div class="col-lg-4 d-xxl-block d-xl-block d-lg-block d-md-none d-sm-none d-none">
                        <nav class="primary_menu">
                            <ul id="menu-primary-menu" class="">
                                <li id="menu-item-1279" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1279"><a
                                        href="<?php echo getHref('about') ?>"><?php echo getLang('about') ?></a></li>
                                <li id="menu-item-1278" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1278"><a
                                        href="<?php echo getHref('contact') ?>"><?php echo getLang('contact') ?></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 d-xxl-block d-xl-block d-lg-block d-md-none d-sm-none d-none">
                        <div class="lang_switcher">
                            <div class="wpml-ls-statics-shortcode_actions wpml-ls wpml-ls-legacy-dropdown js-wpml-ls-legacy-dropdown">
                                <ul>
                                    <div id="lang-select" class="lang-select menu-call" data-open="false">
                                        <?php generateLanguageSelector() ?>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sign-up">
                        <a href="<?php echo getHref('create-profile') ?>" class="sign-up-button"><?php echo getLang('sign_up') ?></a>
                    </div>
                </div>
            </div>
        </header>
        <div class="mobile_menu_wrapper mobile_menu_wrapper__js" id="mobileMenu">
            <button class="close-button" id="closeBtn">X</button>
            <div>
                <div class="nav">
                    <ul id="mobile-menu-1" class="mobile_menu">
                        <li id="menu-item-1517"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-29 current_page_item menu-item-1517">
                            <a href="<?php echo getHref('') ?>"><?php echo getLang('home') ?></a>
                        </li>
                        <li id="menu-item-1518" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1518">
                            <a href="<?php echo getHref('about') ?>"><?php echo getLang('about') ?></a>
                        </li>
                        <li id="menu-item-1519" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1519">
                            <a href="<?php echo getHref('contact') ?>"><?php echo getLang('contact') ?></a>
                        </li>
                        <li id="menu-item-1520" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-1520">
                            <a href="<?php echo getHref('privacy') ?>"><?php echo getLang('privacy') ?></a>
                        </li>
                        <li id="menu-item-1521" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1521">
                            <a href="<?php echo getHref('terms') ?>"><?php echo getLang('terms') ?></a>
                        </li>
                    </ul>
                </div>
                <div class="lang_switcher">
                    <div class="wpml-ls-statics-shortcode_actions wpml-ls wpml-ls-legacy-dropdown js-wpml-ls-legacy-dropdown">
                        <ul>
                            <div id="lang-select" class="lang-select menu-call bottom" data-open="false">
                                <?php generateLanguageSelector() ?>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-sign-up">
                    <a href="<?php echo getHref('create-profile') ?>" class="sign-up-button"><?php echo getLang('sign_up') ?></a>
                </div>
            </div>
        </div>
        <div id="content" class="page_content_wrapper" role="main">
            <div class="container">
                <div class="row">
                    <?php echo getLang('terms_content') ?>
                </div>
            </div>
        </div>
        <footer class="main_footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <a class="logo" href="/" style="background-image:url(/assets/images/logo-1.svg?v=2);"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <p>
                            <?php echo getLang('footer_desc') ?>
                        </p>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <nav class="footer_menu">
                            <ul id="menu-primary-menu-1" class="">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1279"><a href="<?php echo getHref('about') ?>"><?php echo getLang('about') ?></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1278"><a href="<?php echo getHref('contact') ?>"><?php echo getLang('contact') ?></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1279"><a href="<?php echo getHref('privacy') ?>"><?php echo getLang('privacy') ?></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1278"><a href="<?php echo getHref('terms') ?>"><?php echo getLang('terms') ?></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>
    </body>

</html>