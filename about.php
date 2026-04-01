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
        <link rel="icon" href="/assets/images/cropped-logo-2-1-32x32.png" sizes="32x32" />
        <link rel="icon" href="/assets/images/cropped-logo-2-1-192x192.png" sizes="192x192" />
        <link rel="apple-touch-icon" href="/assets/images/cropped-logo-2-1-180x180.png" />
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
                    <div class="col-12">
                        <div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-9d6595d7 wp-block-columns-is-layout-flex">
                            <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow align-content-center" style="flex-basis:60%">
                                <h2 class="wp-block-heading"><?php echo getLang('about_join_h1') ?></h2>
                                <p>
                                    <?php echo getLang('about_join_desc') ?>
                                </p>
                            </div>
                            <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:40%">
                                <div data-intgrtn-form-signup-3-steps="" class='wpcf7-101' id='PexizUm'>
                                    <?php
                                    $country = $clientCountryCode;
                                    $phonecode = $clientCountryCode;
                                    $submit = '';
                                    $language = getLang('language_iso');
                                    $offer = getLang('brand_name_api');
                                    include rtrim($_SERVER['DOCUMENT_ROOT'], '/') . "/form_crypto_hyper/form_js_thanks.php"; ?>
                                </div>
                                <p class="has-small-font-size">
                                    <?php echo getLang('about_form_desc') ?>
                                </p>
                            </div>
                        </div>
                        <h1 class="wp-block-heading has-text-align-center"><?php echo getLang('about_h1_mission') ?></h1>
                        <section class="features_section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="features_wrapper" id="features_section-block_f1e939489139f7de30b3f526426adb01">
                                            <div class="feature">
                                                <div class="icon  stroked ">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                                        <path d="M13.5 12.5713H20.5269C22.0846 12.5713 23.3481 13.9732 23.3481 15.3924C23.3481 16.9501 22.0846 18.2136 20.5269 18.2136H13.5V12.5713Z"
                                                            stroke="#F53838" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M13.5 18.1963H21.5308C23.3135 18.1963 24.75 19.4598 24.75 21.0174C24.75 22.5751 23.3135 23.8386 21.5308 23.8386H13.5V18.1963Z"
                                                            stroke="#F53838" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M18.4153 23.8213V26.6424" stroke="#F53838" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
                                                        </path>
                                                        <path d="M14.9019 23.8213V26.6424" stroke="#F53838" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
                                                        </path>
                                                        <path d="M18.4153 9.75V12.5712" stroke="#F53838" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M14.9019 9.75V12.5712" stroke="#F53838" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.1654 12.5713H11.25" stroke="#F53838" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.1654 23.8213H11.25" stroke="#F53838" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M18 33C26.2843 33 33 26.2843 33 18C33 9.71573 26.2843 3 18 3C9.71573 3 3 9.71573 3 18C3 26.2843 9.71573 33 18 33Z" stroke="#F53838"
                                                            stroke-width="3" stroke-miterlimit="10"></path>
                                                    </svg>
                                                </div>
                                                <div class="heading">
                                                    <?php echo getLang('about_mission_1_title') ?>
                                                </div>
                                                <div class="descr">
                                                    <p>
                                                        <?php echo getLang('about_mission_1_desc') ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="feature">
                                                <div class="icon  stroked ">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37" fill="none">
                                                        <path
                                                            d="M17.1528 33.3236C24.6379 33.3236 30.7057 27.2557 30.7057 19.7707H17.1528L17.1529 6.21768C9.66776 6.21764 3.59985 12.2856 3.59985 19.7707C3.59985 27.2557 9.66771 33.3236 17.1528 33.3236Z"
                                                            stroke="#F53838" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M23.0822 3.67627V13.7107H32.3998V12.9939C32.3998 7.84792 28.2282 3.67627 23.0822 3.67627Z" stroke="#F53838" stroke-width="3"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <div class="heading">
                                                    <?php echo getLang('about_mission_2_title') ?>
                                                </div>
                                                <div class="descr">
                                                    <p>
                                                        <?php echo getLang('about_mission_2_desc') ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="feature">
                                                <div class="icon  stroked ">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37" fill="none">
                                                        <path d="M13.005 21.5H6C4.35 21.5 3 22.85 3 24.5V33.5H13.005V21.5Z" stroke="#F53838" stroke-width="3" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M19.9952 15.5H15.9902C14.3402 15.5 12.9902 16.85 12.9902 18.5V33.5H22.9952V18.5C22.9952 16.85 21.6602 15.5 19.9952 15.5Z"
                                                            stroke="#F53838" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M30.0001 26H22.9951V33.5H33.0001V29C33.0001 27.35 31.6501 26 30.0001 26Z" stroke="#F53838" stroke-width="3" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M18.7803 3.60522L19.5753 5.19522C19.6803 5.42022 19.9653 5.63022 20.2053 5.66022L21.6453 5.90022C22.5603 6.05022 22.7853 6.72519 22.1253 7.37019L21.0003 8.49519C20.8053 8.69019 20.7003 9.0502 20.7603 9.3052L21.0753 10.6852C21.3303 11.7802 20.7453 12.2002 19.7853 11.6302L18.4353 10.8352C18.1953 10.6852 17.7903 10.6852 17.5503 10.8352L16.2003 11.6302C15.2403 12.2002 14.6553 11.7802 14.9103 10.6852L15.2253 9.3052C15.2853 9.0502 15.1803 8.67519 14.9853 8.49519L13.8753 7.38521C13.2153 6.72521 13.4253 6.06519 14.3553 5.91519L15.7953 5.67523C16.0353 5.63023 16.3203 5.42023 16.4253 5.21023L17.2203 3.62019C17.6553 2.75019 18.3453 2.75022 18.7803 3.60522Z"
                                                            stroke="#F53838" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <div class="heading">
                                                    <?php echo getLang('about_mission_3_title') ?>
                                                </div>
                                                <div class="descr">
                                                    <p>
                                                        <?php echo getLang('about_mission_3_desc') ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="feature">
                                                <div class="icon  stroked ">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                                        <path d="M13.5 33H22.5C30 33 33 30 33 22.5V13.5C33 6 30 3 22.5 3H13.5C6 3 3 6 3 13.5V22.5C3 30 6 33 13.5 33Z" stroke="#F53838" stroke-width="3"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M10.9951 21.7351L14.5651 17.1001C15.0751 16.4401 16.0201 16.3201 16.6801 16.8301L19.4251 18.9901C20.0851 19.5001 21.0301 19.3801 21.5401 18.7351L25.0051 14.2651"
                                                            stroke="#F53838" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <div class="heading">
                                                    <?php echo getLang('about_mission_4_title') ?>
                                                </div>
                                                <div class="descr">
                                                    <p>
                                                        <?php echo getLang('about_mission_4_desc') ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="feature">
                                                <div class="icon  stroked ">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                                        <path
                                                            d="M15.7352 3.34509L8.25023 6.16509C6.52523 6.81009 5.11523 8.85009 5.11523 10.6801V21.8251C5.11523 23.5951 6.28523 25.9201 7.71023 26.9851L14.1602 31.8001C16.2752 33.3901 19.7552 33.3901 21.8702 31.8001L28.3202 26.9851C29.7452 25.9201 30.9152 23.5951 30.9152 21.8251V10.6801C30.9152 8.83509 29.5052 6.79509 27.7802 6.15009L20.2952 3.34509C19.0202 2.88009 16.9802 2.88009 15.7352 3.34509Z"
                                                            stroke="#F53838" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M13.5747 17.805L15.9897 20.22L22.4397 13.77" stroke="#F53838" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <div class="heading">
                                                    <?php echo getLang('about_mission_5_title') ?>
                                                </div>
                                                <div class="descr">
                                                    <p>
                                                        <?php echo getLang('about_mission_5_desc') ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="feature">
                                                <div class="icon  stroked ">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37" fill="none">
                                                        <path
                                                            d="M27.0001 11.24C26.9101 11.225 26.8051 11.225 26.7151 11.24C24.6451 11.165 22.9951 9.47 22.9951 7.37C22.9951 5.225 24.7201 3.5 26.8651 3.5C29.0101 3.5 30.7351 5.24 30.7351 7.37C30.7201 9.47 29.0701 11.165 27.0001 11.24Z"
                                                            stroke="#F53838" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M25.4552 22.1598C27.5102 22.5048 29.7752 22.1448 31.3652 21.0798C33.4802 19.6698 33.4802 17.3598 31.3652 15.9498C29.7602 14.8848 27.4652 14.5247 25.4102 14.8847"
                                                            stroke="#F53838" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M8.95473 11.24C9.04473 11.225 9.14973 11.225 9.23973 11.24C11.3097 11.165 12.9597 9.47 12.9597 7.37C12.9597 5.225 11.2347 3.5 9.08973 3.5C6.94473 3.5 5.21973 5.24 5.21973 7.37C5.23473 9.47 6.88473 11.165 8.95473 11.24Z"
                                                            stroke="#F53838" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M10.4997 22.1598C8.44467 22.5048 6.17967 22.1448 4.58967 21.0798C2.47467 19.6698 2.47467 17.3598 4.58967 15.9498C6.19467 14.8848 8.48966 14.5247 10.5447 14.8847"
                                                            stroke="#F53838" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M18.0001 22.4448C17.9101 22.4298 17.8051 22.4298 17.7151 22.4448C15.6451 22.3698 13.9951 20.6748 13.9951 18.5748C13.9951 16.4298 15.7201 14.7048 17.8651 14.7048C20.0101 14.7048 21.7351 16.4448 21.7351 18.5748C21.7201 20.6748 20.0701 22.3848 18.0001 22.4448Z"
                                                            stroke="#F53838" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M13.6356 27.1696C11.5206 28.5796 11.5206 30.8895 13.6356 32.2995C16.0356 33.9045 19.9656 33.9045 22.3656 32.2995C24.4806 30.8895 24.4806 28.5796 22.3656 27.1696C19.9806 25.5796 16.0356 25.5796 13.6356 27.1696Z"
                                                            stroke="#F53838" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <div class="heading">
                                                    <?php echo getLang('about_mission_6_title') ?>
                                                </div>
                                                <div class="descr">
                                                    <p>
                                                        <?php echo getLang('about_mission_6_desc') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div style="height:50px" aria-hidden="true" class="wp-block-spacer custom-spacer"></div>
                        <h2 class="wp-block-heading has-text-align-center"><?php echo getLang('about_tech_h1') ?></h2>
                        <p class="has-text-align-center"><?php echo getLang('about_tech_desc') ?></p>
                        <section class="slider_logo_section" id="sliderlogo_block-block_764bc923b449b5624859e17e257d3374">
                            <div class="swiper slider_logo_swiper sliderlogo_block-block_764bc923b449b5624859e17e257d3374__js">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                            <path
                                                d="M14.0625 32.7125H6.25C5.96075 32.7126 5.67652 32.6369 5.4256 32.493C5.17468 32.3491 4.96582 32.142 4.8198 31.8924C4.67378 31.6427 4.59569 31.3591 4.59332 31.0699C4.59094 30.7806 4.66435 30.4958 4.80625 30.2437L18.5812 5.80937C18.7255 5.55388 18.9351 5.34131 19.1885 5.19339C19.4419 5.04547 19.73 4.96753 20.0234 4.96753C20.3168 4.96753 20.605 5.04547 20.8584 5.19339C21.1118 5.34131 21.3213 5.55388 21.4656 5.80937L25.5937 13.0969C25.7397 13.349 25.8165 13.6352 25.8165 13.9266C25.8165 14.2179 25.7397 14.5041 25.5937 14.7562L15.4969 31.8969C15.3502 32.1465 15.1405 32.3533 14.8887 32.4964C14.637 32.6396 14.3521 32.7141 14.0625 32.7125Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M22.9626 30.2374L27.6032 21.9593C27.7479 21.7039 27.9578 21.4914 28.2114 21.3436C28.4651 21.1958 28.7534 21.1179 29.047 21.1179C29.3405 21.1179 29.6288 21.1958 29.8825 21.3436C30.1361 21.4914 30.346 21.7039 30.4907 21.9593L35.1782 30.2343C35.3213 30.4865 35.3958 30.7719 35.3942 31.0618C35.3927 31.3518 35.3152 31.6363 35.1695 31.887C35.0237 32.1377 34.8148 32.3459 34.5636 32.4907C34.3124 32.6355 34.0276 32.712 33.7376 32.7124H24.4095C24.1194 32.7127 23.8343 32.637 23.5826 32.4928C23.331 32.3486 23.1215 32.1409 22.9751 31.8905C22.8287 31.6401 22.7505 31.3557 22.7483 31.0656C22.7461 30.7756 22.82 30.49 22.9626 30.2374Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                        </svg>
                                    </div>
                                    <div class="swiper-slide">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                            <path d="M33.4989 15.9408L29.4419 19.9978L33.4989 24.0548L37.5559 19.9978L33.4989 15.9408Z" fill="#0B132A" fill-opacity="0.5" />
                                            <path d="M6.50307 15.943L2.44604 20L6.50307 24.057L10.5601 20L6.50307 15.943Z" fill="#0B132A" fill-opacity="0.5" />
                                            <path d="M20 29.4438L13.275 22.7188L9.21875 26.775L20 37.5563L30.7812 26.775L26.725 22.7188L20 29.4438Z" fill="#0B132A" fill-opacity="0.5" />
                                            <path d="M20 10.5561L26.725 17.2811L30.7812 13.2249L20 2.4436L9.21875 13.2249L13.275 17.2811L20 10.5561Z" fill="#0B132A" fill-opacity="0.5" />
                                            <path d="M19.9977 15.9938L15.9915 20L19.9977 24.0062L24.0039 20L19.9977 15.9938Z" fill="#0B132A" fill-opacity="0.5" />
                                        </svg>
                                    </div>
                                    <div class="swiper-slide">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                            <path d="M20 10.8875L31.1187 18.1375L20 2.1875L9.13745 18.1469L20 10.8875Z" fill="#0B132A" fill-opacity="0.5" />
                                            <path d="M31.2218 19.9937L20 12.9468L8.77808 19.9999L20 27.053L31.2218 19.9937Z" fill="#0B132A" fill-opacity="0.5" />
                                            <path d="M8.88135 21.8532L20.0001 37.8126L30.8626 21.8501L20.0001 29.1126L8.88135 21.8532Z" fill="#0B132A" fill-opacity="0.5" />
                                        </svg>
                                    </div>
                                    <div class="swiper-slide">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                            <path
                                                d="M20 10.8719C23.1394 10.8719 25.6844 9.37628 25.6844 7.5313C25.6844 5.68632 23.1394 4.19067 20 4.19067C16.8607 4.19067 14.3157 5.68632 14.3157 7.5313C14.3157 9.37628 16.8607 10.8719 20 10.8719Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M20 35.8094C23.1394 35.8094 25.6844 34.3138 25.6844 32.4688C25.6844 30.6238 23.1394 29.1282 20 29.1282C16.8607 29.1282 14.3157 30.6238 14.3157 32.4688C14.3157 34.3138 16.8607 35.8094 20 35.8094Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M12.0452 31.1565C13.643 30.234 13.6658 27.2822 12.0961 24.5634C10.5264 21.8446 7.95864 20.3884 6.36084 21.3109C4.76304 22.2334 4.74026 25.1852 6.30996 27.904C7.87966 30.6228 10.4474 32.079 12.0452 31.1565Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M33.6397 18.6895C35.2375 17.767 35.2603 14.8151 33.6906 12.0963C32.1209 9.37755 29.5531 7.92136 27.9553 8.84385C26.3575 9.76634 26.3347 12.7182 27.9044 15.437C29.4741 18.1558 32.0419 19.612 33.6397 18.6895Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M33.8067 27.7817C35.3764 25.0504 35.3477 22.0885 33.7426 21.166C32.1374 20.2435 29.5637 21.7098 27.994 24.4411C26.4243 27.1723 26.4531 30.1343 28.0582 31.0568C29.6633 31.9793 32.237 30.513 33.8067 27.7817Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M12.0941 15.4361C13.6638 12.7173 13.6411 9.76549 12.0433 8.843C10.4455 7.92051 7.8777 9.3767 6.30801 12.0955C4.73831 14.8143 4.76109 17.7661 6.35889 18.6886C7.95668 19.6111 10.5244 18.1549 12.0941 15.4361Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                        </svg>
                                    </div>
                                    <div class="swiper-slide">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                            <path
                                                d="M13.2595 16.5219H32.0688C32.1517 16.5219 32.2312 16.489 32.2898 16.4304C32.3484 16.3718 32.3813 16.2923 32.3813 16.2094C32.2911 13.6922 31.2276 11.3081 29.4148 9.55923C27.6021 7.81033 25.1815 6.83301 22.6626 6.83301C20.1437 6.83301 17.7231 7.81033 15.9104 9.55923C14.0976 11.3081 13.0341 13.6922 12.9438 16.2094C12.9438 16.2507 12.952 16.2916 12.9679 16.3297C12.9838 16.3678 13.0071 16.4024 13.0365 16.4315C13.0658 16.4605 13.1006 16.4835 13.1389 16.499C13.1772 16.5145 13.2182 16.5223 13.2595 16.5219Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M11.5405 19.7688H33.3062C33.4926 19.7688 33.6715 19.6947 33.8033 19.5629C33.9352 19.431 34.0093 19.2522 34.0093 19.0657C34.0093 18.8792 33.9352 18.7004 33.8033 18.5685C33.6715 18.4366 33.4926 18.3625 33.3062 18.3625H11.5405C11.354 18.3625 11.1752 18.4366 11.0433 18.5685C10.9115 18.7004 10.8374 18.8792 10.8374 19.0657C10.8374 19.2522 10.9115 19.431 11.0433 19.5629C11.1752 19.6947 11.354 19.7688 11.5405 19.7688Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M9.13745 19.8125C9.56892 19.8125 9.9187 19.4627 9.9187 19.0312C9.9187 18.5998 9.56892 18.25 9.13745 18.25C8.70598 18.25 8.3562 18.5998 8.3562 19.0312C8.3562 19.4627 8.70598 19.8125 9.13745 19.8125Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M23.7499 21.7063C23.7499 21.5198 23.6758 21.341 23.544 21.2091C23.4121 21.0773 23.2333 21.0032 23.0468 21.0032H6.8999C6.71342 21.0032 6.53458 21.0773 6.40272 21.2091C6.27086 21.341 6.19678 21.5198 6.19678 21.7063C6.19678 21.8928 6.27086 22.0716 6.40272 22.2035C6.53458 22.3353 6.71342 22.4094 6.8999 22.4094H23.0405C23.1334 22.4102 23.2255 22.3927 23.3115 22.3577C23.3976 22.3227 23.4758 22.2711 23.5418 22.2057C23.6077 22.1403 23.6601 22.0625 23.6958 21.9768C23.7315 21.8911 23.7499 21.7992 23.7499 21.7063Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M4.49048 22.4875C4.92195 22.4875 5.27173 22.1378 5.27173 21.7063C5.27173 21.2748 4.92195 20.925 4.49048 20.925C4.05901 20.925 3.70923 21.2748 3.70923 21.7063C3.70923 22.1378 4.05901 22.4875 4.49048 22.4875Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M11.3843 23.7124C11.1978 23.7124 11.019 23.7865 10.8871 23.9183C10.7552 24.0502 10.6812 24.229 10.6812 24.4155C10.6812 24.602 10.7552 24.7809 10.8871 24.9127C11.019 25.0446 11.1978 25.1187 11.3843 25.1187H30.9624C31.1489 25.1187 31.3277 25.0446 31.4596 24.9127C31.5914 24.7809 31.6655 24.602 31.6655 24.4155C31.6655 24.229 31.5914 24.0502 31.4596 23.9183C31.3277 23.7865 31.1489 23.7124 30.9624 23.7124H11.3843Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M8.8374 25.1438C9.26887 25.1438 9.61865 24.794 9.61865 24.3625C9.61865 23.9311 9.26887 23.5813 8.8374 23.5813C8.40593 23.5813 8.05615 23.9311 8.05615 24.3625C8.05615 24.794 8.40593 25.1438 8.8374 25.1438Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M16.1781 27.0532C16.1781 26.8667 16.104 26.6879 15.9721 26.556C15.8403 26.4242 15.6614 26.3501 15.475 26.3501H8.01245C7.82597 26.3501 7.64713 26.4242 7.51527 26.556C7.38341 26.6879 7.30933 26.8667 7.30933 27.0532C7.30933 27.2397 7.38341 27.4185 7.51527 27.5504C7.64713 27.6823 7.82597 27.7563 8.01245 27.7563H15.475C15.6614 27.7563 15.8403 27.6823 15.9721 27.5504C16.104 27.4185 16.1781 27.2397 16.1781 27.0532Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M5.65942 27.8345C6.0909 27.8345 6.44067 27.4847 6.44067 27.0532C6.44067 26.6218 6.0909 26.272 5.65942 26.272C5.22795 26.272 4.87817 26.6218 4.87817 27.0532C4.87817 27.4847 5.22795 27.8345 5.65942 27.8345Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M34.3375 26.3501H18.325C18.1385 26.3501 17.9596 26.4242 17.8278 26.556C17.6959 26.6879 17.6218 26.8667 17.6218 27.0532C17.6218 27.2397 17.6959 27.4185 17.8278 27.5504C17.9596 27.6823 18.1385 27.7563 18.325 27.7563H34.3375C34.5239 27.7563 34.7028 27.6823 34.8346 27.5504C34.9665 27.4185 35.0406 27.2397 35.0406 27.0532C35.0406 26.8667 34.9665 26.6879 34.8346 26.556C34.7028 26.4242 34.5239 26.3501 34.3375 26.3501Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M31.4125 29.0906H21.45C21.2635 29.0906 21.0846 29.1647 20.9528 29.2965C20.8209 29.4284 20.7468 29.6072 20.7468 29.7937C20.7468 29.9802 20.8209 30.159 20.9528 30.2909C21.0846 30.4227 21.2635 30.4968 21.45 30.4968H31.4125C31.5989 30.4968 31.7778 30.4227 31.9096 30.2909C32.0415 30.159 32.1156 29.9802 32.1156 29.7937C32.1156 29.6072 32.0415 29.4284 31.9096 29.2965C31.7778 29.1647 31.5989 29.0906 31.4125 29.0906Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M19.103 30.575C19.5345 30.575 19.8843 30.2252 19.8843 29.7937C19.8843 29.3622 19.5345 29.0125 19.103 29.0125C18.6716 29.0125 18.3218 29.3622 18.3218 29.7937C18.3218 30.2252 18.6716 30.575 19.103 30.575Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M24.9781 31.7188H15.3281C15.1416 31.7187 14.9628 31.7928 14.8309 31.9247C14.6991 32.0566 14.625 32.2354 14.625 32.4219C14.625 32.6084 14.6991 32.7872 14.8309 32.9191C14.9628 33.0509 15.1416 33.125 15.3281 33.125H24.9781C25.1646 33.125 25.3434 33.0509 25.4753 32.9191C25.6072 32.7872 25.6813 32.6084 25.6813 32.4219C25.6813 32.2354 25.6072 32.0566 25.4753 31.9247C25.3434 31.7928 25.1646 31.7188 24.9781 31.7188Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M13.05 33.2031C13.4815 33.2031 13.8313 32.8533 13.8313 32.4219C13.8313 31.9904 13.4815 31.6406 13.05 31.6406C12.6186 31.6406 12.2688 31.9904 12.2688 32.4219C12.2688 32.8533 12.6186 33.2031 13.05 33.2031Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                        </svg>
                                    </div>
                                    <div class="swiper-slide">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                            <path
                                                d="M14.3437 22.3938C15.6933 22.3938 16.7874 21.2997 16.7874 19.9501C16.7874 18.6005 15.6933 17.5063 14.3437 17.5063C12.994 17.5063 11.8999 18.6005 11.8999 19.9501C11.8999 21.2997 12.994 22.3938 14.3437 22.3938Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M25.6562 22.3938C27.0058 22.3938 28.0999 21.2997 28.0999 19.9501C28.0999 18.6005 27.0058 17.5063 25.6562 17.5063C24.3065 17.5063 23.2124 18.6005 23.2124 19.9501C23.2124 21.2997 24.3065 22.3938 25.6562 22.3938Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M17.172 27.2906C18.5217 27.2906 19.6158 26.1965 19.6158 24.8468C19.6158 23.4972 18.5217 22.4031 17.172 22.4031C15.8224 22.4031 14.7283 23.4972 14.7283 24.8468C14.7283 26.1965 15.8224 27.2906 17.172 27.2906Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M22.8283 17.4969C24.1779 17.4969 25.272 16.4028 25.272 15.0531C25.272 13.7035 24.1779 12.6094 22.8283 12.6094C21.4786 12.6094 20.3845 13.7035 20.3845 15.0531C20.3845 16.4028 21.4786 17.4969 22.8283 17.4969Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M22.8283 27.2906C24.1779 27.2906 25.272 26.1965 25.272 24.8468C25.272 23.4972 24.1779 22.4031 22.8283 22.4031C21.4786 22.4031 20.3845 23.4972 20.3845 24.8468C20.3845 26.1965 21.4786 27.2906 22.8283 27.2906Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M17.172 17.4969C18.5217 17.4969 19.6158 16.4028 19.6158 15.0531C19.6158 13.7035 18.5217 12.6094 17.172 12.6094C15.8224 12.6094 14.7283 13.7035 14.7283 15.0531C14.7283 16.4028 15.8224 17.4969 17.172 17.4969Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M32.4937 21.2812C33.2013 21.2812 33.7749 20.7076 33.7749 20C33.7749 19.2924 33.2013 18.7188 32.4937 18.7188C31.786 18.7188 31.2124 19.2924 31.2124 20C31.2124 20.7076 31.786 21.2812 32.4937 21.2812Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M7.50635 21.2812C8.21396 21.2812 8.7876 20.7076 8.7876 20C8.7876 19.2924 8.21396 18.7188 7.50635 18.7188C6.79873 18.7188 6.2251 19.2924 6.2251 20C6.2251 20.7076 6.79873 21.2812 7.50635 21.2812Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M2.9624 20.8125C3.41113 20.8125 3.7749 20.4487 3.7749 20C3.7749 19.5513 3.41113 19.1875 2.9624 19.1875C2.51367 19.1875 2.1499 19.5513 2.1499 20C2.1499 20.4487 2.51367 20.8125 2.9624 20.8125Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M37.0376 20.8125C37.4863 20.8125 37.8501 20.4487 37.8501 20C37.8501 19.5513 37.4863 19.1875 37.0376 19.1875C36.5889 19.1875 36.2251 19.5513 36.2251 20C36.2251 20.4487 36.5889 20.8125 37.0376 20.8125Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M26.2468 10.4595C26.9544 10.4595 27.5281 9.88584 27.5281 9.17822C27.5281 8.47061 26.9544 7.89697 26.2468 7.89697C25.5392 7.89697 24.9656 8.47061 24.9656 9.17822C24.9656 9.88584 25.5392 10.4595 26.2468 10.4595Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M13.7532 32.1033C14.4608 32.1033 15.0344 31.5296 15.0344 30.822C15.0344 30.1144 14.4608 29.5408 13.7532 29.5408C13.0456 29.5408 12.4719 30.1144 12.4719 30.822C12.4719 31.5296 13.0456 32.1033 13.7532 32.1033Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M11.4812 35.5657C11.9299 35.5657 12.2937 35.2019 12.2937 34.7532C12.2937 34.3044 11.9299 33.9407 11.4812 33.9407C11.0325 33.9407 10.6687 34.3044 10.6687 34.7532C10.6687 35.2019 11.0325 35.5657 11.4812 35.5657Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M28.5188 6.05933C28.9675 6.05933 29.3313 5.69556 29.3313 5.24683C29.3313 4.7981 28.9675 4.43433 28.5188 4.43433C28.0701 4.43433 27.7063 4.7981 27.7063 5.24683C27.7063 5.69556 28.0701 6.05933 28.5188 6.05933Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M13.7532 10.4595C14.4608 10.4595 15.0344 9.88584 15.0344 9.17822C15.0344 8.47061 14.4608 7.89697 13.7532 7.89697C13.0456 7.89697 12.4719 8.47061 12.4719 9.17822C12.4719 9.88584 13.0456 10.4595 13.7532 10.4595Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M26.2468 32.1033C26.9544 32.1033 27.5281 31.5296 27.5281 30.822C27.5281 30.1144 26.9544 29.5408 26.2468 29.5408C25.5392 29.5408 24.9656 30.1144 24.9656 30.822C24.9656 31.5296 25.5392 32.1033 26.2468 32.1033Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M28.5188 35.5657C28.9675 35.5657 29.3313 35.2019 29.3313 34.7532C29.3313 34.3044 28.9675 33.9407 28.5188 33.9407C28.0701 33.9407 27.7063 34.3044 27.7063 34.7532C27.7063 35.2019 28.0701 35.5657 28.5188 35.5657Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M11.4812 6.05933C11.9299 6.05933 12.2937 5.69556 12.2937 5.24683C12.2937 4.7981 11.9299 4.43433 11.4812 4.43433C11.0325 4.43433 10.6687 4.7981 10.6687 5.24683C10.6687 5.69556 11.0325 6.05933 11.4812 6.05933Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M19.9999 11.6968C20.8145 11.6968 21.4749 11.0364 21.4749 10.2218C21.4749 9.40721 20.8145 8.74683 19.9999 8.74683C19.1853 8.74683 18.5249 9.40721 18.5249 10.2218C18.5249 11.0364 19.1853 11.6968 19.9999 11.6968Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M20.0001 5.39985C20.5576 5.39985 21.0095 4.94794 21.0095 4.39048C21.0095 3.83302 20.5576 3.3811 20.0001 3.3811C19.4426 3.3811 18.9907 3.83302 18.9907 4.39048C18.9907 4.94794 19.4426 5.39985 20.0001 5.39985Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M19.9999 31.2532C20.8145 31.2532 21.4749 30.5928 21.4749 29.7782C21.4749 28.9636 20.8145 28.3032 19.9999 28.3032C19.1853 28.3032 18.5249 28.9636 18.5249 29.7782C18.5249 30.5928 19.1853 31.2532 19.9999 31.2532Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M20.0001 36.6186C20.5576 36.6186 21.0095 36.1667 21.0095 35.6092C21.0095 35.0518 20.5576 34.5999 20.0001 34.5999C19.4426 34.5999 18.9907 35.0518 18.9907 35.6092C18.9907 36.1667 19.4426 36.6186 20.0001 36.6186Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M11.5312 16.5875C12.3458 16.5875 13.0062 15.9271 13.0062 15.1125C13.0062 14.2978 12.3458 13.6375 11.5312 13.6375C10.7165 13.6375 10.0562 14.2978 10.0562 15.1125C10.0562 15.9271 10.7165 16.5875 11.5312 16.5875Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M6.4813 13.2031C7.03876 13.2031 7.49067 12.7512 7.49067 12.1937C7.49067 11.6362 7.03876 11.1843 6.4813 11.1843C5.92384 11.1843 5.47192 11.6362 5.47192 12.1937C5.47192 12.7512 5.92384 13.2031 6.4813 13.2031Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M28.4687 26.3626C29.2833 26.3626 29.9437 25.7022 29.9437 24.8876C29.9437 24.073 29.2833 23.4126 28.4687 23.4126C27.654 23.4126 26.9937 24.073 26.9937 24.8876C26.9937 25.7022 27.654 26.3626 28.4687 26.3626Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M33.5187 28.8156C34.0761 28.8156 34.528 28.3637 34.528 27.8063C34.528 27.2488 34.0761 26.7969 33.5187 26.7969C32.9612 26.7969 32.5093 27.2488 32.5093 27.8063C32.5093 28.3637 32.9612 28.8156 33.5187 28.8156Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M11.5312 26.3626C12.3458 26.3626 13.0062 25.7022 13.0062 24.8876C13.0062 24.073 12.3458 23.4126 11.5312 23.4126C10.7165 23.4126 10.0562 24.073 10.0562 24.8876C10.0562 25.7022 10.7165 26.3626 11.5312 26.3626Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M6.4813 28.8156C7.03876 28.8156 7.49067 28.3637 7.49067 27.8063C7.49067 27.2488 7.03876 26.7969 6.4813 26.7969C5.92384 26.7969 5.47192 27.2488 5.47192 27.8063C5.47192 28.3637 5.92384 28.8156 6.4813 28.8156Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M28.4687 16.5875C29.2833 16.5875 29.9437 15.9271 29.9437 15.1125C29.9437 14.2978 29.2833 13.6375 28.4687 13.6375C27.654 13.6375 26.9937 14.2978 26.9937 15.1125C26.9937 15.9271 27.654 16.5875 28.4687 16.5875Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M33.5187 13.2031C34.0761 13.2031 34.528 12.7512 34.528 12.1937C34.528 11.6362 34.0761 11.1843 33.5187 11.1843C32.9612 11.1843 32.5093 11.6362 32.5093 12.1937C32.5093 12.7512 32.9612 13.2031 33.5187 13.2031Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                        </svg>
                                    </div>
                                    <div class="swiper-slide">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                            <g clip-path="url(#clip0_78_361)">
                                                <path
                                                    d="M19.978 6.18746C21.8548 6.18186 23.7126 6.56173 25.4366 7.30355C27.1605 8.04536 28.7137 9.1333 29.9999 10.5L20.028 20.4687L9.9999 10.4468C11.2861 9.09577 12.8344 8.02122 14.55 7.28887C16.2657 6.55651 18.1126 6.18174 19.978 6.18746ZM19.978 4.55933C17.6256 4.55884 15.3042 5.09676 13.1917 6.13187C11.0792 7.16699 9.23167 8.67185 7.79053 10.5312L20.028 22.775L32.2155 10.5875C30.7753 8.71073 28.9223 7.19079 26.8002 6.14543C24.678 5.10007 22.3437 4.55735 19.978 4.55933Z"
                                                    fill="#0B132A" fill-opacity="0.5" />
                                                <path
                                                    d="M13.553 22.078C14.4539 22.0788 15.3278 21.7699 16.028 21.203L10.4749 15.6499C10.0073 16.2303 9.7134 16.9313 9.62728 17.6717C9.54117 18.4121 9.6663 19.1617 9.98822 19.834C10.3101 20.5063 10.8157 21.0738 11.4465 21.4708C12.0773 21.8679 12.8076 22.0784 13.553 22.078Z"
                                                    fill="#0B132A" fill-opacity="0.5" />
                                                <path
                                                    d="M26.4469 22.0782C27.1863 22.0798 27.9114 21.8737 28.5393 21.4832C29.1673 21.0928 29.673 20.5338 29.9987 19.87C30.3245 19.2061 30.4572 18.4641 30.3817 17.7285C30.3062 16.9929 30.0256 16.2933 29.5719 15.7095L24.0312 21.2501C24.7215 21.7879 25.5718 22.0794 26.4469 22.0782Z"
                                                    fill="#0B132A" fill-opacity="0.5" />
                                                <path
                                                    d="M33.2344 12.0437L30.7344 14.5437C31.645 15.6113 32.1199 16.9828 32.0642 18.385C32.0085 19.7871 31.4264 21.1167 30.434 22.1087C29.4416 23.1007 28.1117 23.6823 26.7096 23.7374C25.3074 23.7925 23.936 23.3172 22.8688 22.4062L20.0563 25.2187L17.1875 22.3593C16.121 23.2749 14.748 23.754 13.3433 23.7008C11.9387 23.6477 10.6059 23.0662 9.6115 22.0726C8.61714 21.079 8.03456 19.7467 7.98029 18.3421C7.92602 16.9374 8.40407 15.5641 9.3188 14.4968L6.8188 11.978C5.39787 14.3166 4.62396 16.9909 4.57632 19.7269C4.52867 22.463 5.20901 25.1625 6.54766 27.5492C7.88631 29.9359 9.83519 31.9239 12.1948 33.3098C14.5543 34.6956 17.2398 35.4295 19.9763 35.4363C22.7127 35.4431 25.4018 34.7226 27.7682 33.3484C30.1346 31.9743 32.0934 29.996 33.4439 27.616C34.7944 25.236 35.4881 22.5398 35.454 19.8036C35.42 17.0673 34.6594 14.3893 33.25 12.0437H33.2344Z"
                                                    fill="#0B132A" fill-opacity="0.5" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_78_361">
                                                    <rect width="40" height="40" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="swiper-slide">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                            <path
                                                d="M25.7969 33.3375H33.3844L22.55 17.3844L32.8125 6.70942H25.0375L15.8375 16.2813V6.6438H9.19067V33.3563H15.8375V24.3657L18.1532 21.9563L25.7969 33.3375Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                        </svg>
                                    </div>
                                    <div class="swiper-slide">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                            <path
                                                d="M23.4375 15.5562V11.6468H32.3312V5.47803H7.6437V11.6468H16.5625V15.5562C9.09058 15.9155 3.4812 17.4155 3.4812 19.2124C3.4812 21.0093 9.08433 22.4999 16.5625 22.8687V35.7718H23.4375V22.8687C30.9093 22.5124 36.5187 21.0124 36.5187 19.2124C36.5187 17.4124 30.9156 15.9155 23.4375 15.5562ZM20 21.6999C11.9093 21.6999 5.34995 20.4499 5.34995 18.9437C5.34995 17.6468 10.1281 16.5593 16.5562 16.2687V20.6843C17.6624 20.7343 18.8124 20.7624 19.9937 20.7624C21.1749 20.7624 22.3312 20.7343 23.4312 20.6843V16.2687C29.8593 16.5593 34.6374 17.6468 34.6374 18.9437C34.6499 20.4655 28.0906 21.6999 20 21.6999Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                        </svg>
                                    </div>
                                    <div class="swiper-slide">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                            <path
                                                d="M27.3437 20C32.375 16.5188 36.0094 12.9875 35.0437 11.3157C34.4187 10.2407 32.1875 10.4282 29.2 11.3938C28.9914 11.1891 28.7291 11.0478 28.4434 10.9864C28.1577 10.9249 27.8604 10.9458 27.5861 11.0466C27.3118 11.1474 27.0718 11.324 26.8939 11.5559C26.716 11.7877 26.6076 12.0653 26.5812 12.3563C25.6437 12.7375 24.6719 13.1688 23.6719 13.6407C23.1719 7.54067 21.9312 2.62817 20 2.62817C18.0687 2.62817 16.8281 7.54067 16.3281 13.6407C10.7969 11.0251 5.92186 9.64067 4.95624 11.3157C4.37499 12.3375 5.49686 14.0626 7.61249 16.0282C7.5369 16.2191 7.49871 16.4228 7.49999 16.6282C7.49958 16.8459 7.54211 17.0616 7.62516 17.263C7.70822 17.4643 7.83015 17.6472 7.98399 17.8013C8.13782 17.9555 8.32055 18.0777 8.5217 18.1612C8.72285 18.2446 8.93847 18.2876 9.15624 18.2876C9.45385 18.2865 9.74555 18.2044 9.99999 18.05C10.825 18.6938 11.7156 19.3469 12.6594 20C7.62499 23.4813 3.99061 27.0126 4.95624 28.6844C5.24686 29.1876 5.89374 29.4157 6.79999 29.4157C8.91249 29.4157 12.4594 28.1876 16.3281 26.3594C16.425 27.5626 16.5531 28.7188 16.7094 29.7969C16.4324 29.9747 16.2148 30.231 16.0841 30.533C15.9534 30.835 15.9157 31.1691 15.9757 31.4927C16.0358 31.8163 16.1908 32.1146 16.4211 32.3497C16.6514 32.5848 16.9465 32.7459 17.2687 32.8126C17.9219 35.5719 18.8312 37.3657 20 37.3657C21.9312 37.3657 23.1719 32.4501 23.6719 26.3532C27.5406 28.1813 31.0875 29.4094 33.2 29.4094C34.1094 29.4094 34.7625 29.1813 35.0437 28.6782C36.0094 27.0126 32.375 23.4813 27.3437 20ZM26.7187 13.1657C26.8723 13.4828 27.1286 13.7388 27.4459 13.8919C27.7633 14.0451 28.1231 14.0865 28.4669 14.0094C28.8107 13.9323 29.1184 13.7413 29.34 13.4673C29.5616 13.1933 29.684 12.8524 29.6875 12.5C29.6853 12.3657 29.6653 12.2323 29.6281 12.1032C31.2219 11.6 32.4719 11.3563 33.2937 11.3563C33.8719 11.3563 34.2312 11.475 34.3719 11.7032C34.8844 12.5969 32.1844 15.7188 26.6562 19.5157C25.7687 18.9188 24.8469 18.3251 23.9062 17.7469C23.875 16.6407 23.8219 15.5594 23.75 14.4813C24.7906 13.9844 25.7906 13.5438 26.7156 13.1657H26.7187ZM21.5625 22.7126C21.0312 23.0188 20.5104 23.3125 20 23.5938C19.4875 23.3125 18.9667 23.0188 18.4375 22.7126C17.9083 22.4063 17.3875 22.1011 16.875 21.7969C16.875 21.2126 16.875 20.6251 16.875 20C16.875 19.375 16.875 18.7875 16.8937 18.2032C17.3937 17.9011 17.9146 17.5959 18.4562 17.2875C18.9875 16.975 19.5094 16.6907 20.0187 16.4094C20.5312 16.6907 21.0531 16.9813 21.5812 17.2875C22.1094 17.5938 22.6281 17.9125 23.1281 18.2032C23.125 18.7875 23.125 19.375 23.125 20C23.125 20.6251 23.125 21.2126 23.1062 21.7969C22.6104 22.1011 22.0958 22.4063 21.5625 22.7126ZM23.0844 22.7344C23.0562 23.5719 23.0156 24.3719 22.9656 25.1407C22.2719 24.8 21.5594 24.4344 20.8219 24.0407C21.2031 23.8313 21.5812 23.6157 21.9594 23.3969C22.3375 23.1782 22.7125 22.9594 23.0875 22.7344H23.0844ZM19.175 24.0407C18.4375 24.4344 17.7229 24.8011 17.0312 25.1407C16.9812 24.3719 16.9406 23.5782 16.9125 22.7344C17.2875 22.9594 17.6625 23.1813 18.0375 23.3969C18.4125 23.6126 18.7937 23.8313 19.175 24.0407ZM16.0875 21.3063C15.3781 20.8657 14.7062 20.4282 14.0625 20C14.7031 19.5719 15.375 19.1344 16.0844 18.6938C16.0844 19.1282 16.0844 19.5657 16.0844 20C16.0844 20.4344 16.0812 20.8719 16.0875 21.3063ZM16.9125 17.2657C16.9417 16.4323 16.9812 15.6313 17.0312 14.8626C17.725 15.2032 18.4375 15.5657 19.1719 15.9594C18.7937 16.1719 18.4156 16.3844 18.0375 16.6032C17.6594 16.8219 17.2875 17.0407 16.9125 17.2657ZM20.8281 15.9594C21.5625 15.5657 22.275 15.2032 22.9687 14.8626C23.0187 15.6313 23.0583 16.4323 23.0875 17.2657C22.7125 17.0407 22.3375 16.8188 21.9625 16.6032C21.5875 16.3876 21.2062 16.1719 20.8281 15.9594ZM23.9125 18.6938C24.6219 19.1344 25.2937 19.5719 25.9375 20C25.3125 20.4282 24.625 20.8657 23.9156 21.3063C23.9156 20.8719 23.9156 20.4344 23.9156 20C23.9156 19.5657 23.9187 19.1282 23.9125 18.6938ZM20 3.43755C21.0281 3.43755 22.3781 7.34692 22.9062 14.0219C21.9469 14.4907 20.9719 14.9938 20 15.5219C19.0281 14.9938 18.0531 14.4907 17.0937 14.0219C17.6219 7.3313 18.9719 3.43755 20 3.43755ZM10.5719 17.5001C10.778 17.1645 10.8574 16.7663 10.7956 16.3773C10.7338 15.9884 10.5349 15.6343 10.2349 15.3792C9.93487 15.1241 9.55348 14.9847 9.15965 14.9862C8.76583 14.9878 8.38553 15.1301 8.08749 15.3876C6.17811 13.5938 5.33436 12.2625 5.64061 11.7282C5.77499 11.5 6.14061 11.3813 6.71874 11.3813C8.37811 11.3813 11.7781 12.3688 16.2625 14.5063C16.1906 15.5719 16.1375 16.6657 16.1062 17.7719C15.1687 18.35 14.2312 18.9438 13.3562 19.5407C12.3312 18.8157 11.4 18.125 10.5719 17.4813V17.5001ZM5.64061 28.2907C5.12811 27.3969 7.82811 24.2751 13.3562 20.4782C14.2437 21.0751 15.1656 21.6688 16.1062 22.2469C16.1375 23.3532 16.1906 24.4344 16.2625 25.5126C10.2187 28.3938 6.15624 29.1813 5.64061 28.2907ZM20.0156 36.5782C19.4125 36.5782 18.6969 35.2313 18.1062 32.7751C18.4861 32.6593 18.8118 32.4109 19.0239 32.0752C19.236 31.7394 19.3204 31.3386 19.2617 30.9458C19.203 30.5531 19.0051 30.1944 18.7041 29.9354C18.4031 29.6763 18.019 29.534 17.6219 29.5344C17.5812 29.5344 17.5406 29.5344 17.5 29.5344C17.3437 28.4594 17.2135 27.274 17.1094 25.9782C18.0687 25.5094 19.0437 25.0094 20.0156 24.4813C20.9875 25.0094 21.9625 25.5094 22.9219 25.9782C22.3781 32.6657 21.0312 36.5782 20 36.5782H20.0156ZM34.3906 28.2907C33.875 29.1813 29.8125 28.3938 23.7656 25.5126C23.8375 24.4469 23.8906 23.3532 23.9219 22.2469C24.8594 21.6688 25.7969 21.0751 26.6719 20.4782C32.1594 24.2751 34.8719 27.3969 34.375 28.2907H34.3906Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M20 21.9032C21.0511 21.9032 21.9032 21.0511 21.9032 20C21.9032 18.949 21.0511 18.0969 20 18.0969C18.949 18.0969 18.0969 18.949 18.0969 20C18.0969 21.0511 18.949 21.9032 20 21.9032Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                        </svg>
                                    </div>
                                    <div class="swiper-slide">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                            <path
                                                d="M27.7438 15.5125C29.0907 11.9969 29.3063 9.1313 28.3688 7.4063C28.1066 6.92441 27.7361 6.50992 27.2866 6.19542C26.8371 5.88092 26.3208 5.67498 25.7782 5.5938C25.2456 5.47994 24.6937 5.49422 24.1678 5.63549C23.6418 5.77675 23.157 6.04094 22.7532 6.4063C20.8282 8.12505 20.5157 11.7407 20.4469 13.9625C20.1094 13.9625 19.8219 13.9625 19.5094 13.9625C19.3751 11.7407 19.1219 8.12505 17.1876 6.40942C16.7833 6.04256 16.2976 5.77723 15.7705 5.6354C15.2433 5.49356 14.69 5.4793 14.1563 5.5938C13.6128 5.67692 13.0958 5.88463 12.6459 6.20068C12.1959 6.51673 11.8251 6.93256 11.5625 7.41567C10.625 9.15317 10.8438 12.0313 12.1875 15.5563C8.3688 17.3563 6.19067 20.4938 6.19067 24.2344C6.19067 30.4563 11.6063 34.475 19.9876 34.475C28.3688 34.475 33.7844 30.4563 33.7844 24.2344C33.7969 20.4594 31.6001 17.3063 27.7438 15.5125ZM13.175 16.4L13.7063 16.175L13.4875 15.6407C12.1032 12.2532 11.775 9.45942 12.5813 7.97192C12.763 7.64054 13.0199 7.35648 13.3315 7.14261C13.6431 6.92875 14.0005 6.79107 14.375 6.74067C14.5491 6.70661 14.7259 6.68882 14.9032 6.68755C15.4607 6.69292 15.9968 6.90313 16.4094 7.27817C18.5969 9.11567 18.3907 15.1938 18.3907 15.1938L18.9157 15.1563C19.6204 15.1204 20.3266 15.1204 21.0313 15.1563L21.5438 15.1875C21.5438 15.1875 21.3688 9.12192 23.5376 7.29067C23.809 7.04595 24.1348 6.86952 24.4881 6.77604C24.8414 6.68255 25.2119 6.67471 25.5688 6.75317C25.9416 6.80261 26.2975 6.93931 26.6076 7.15217C26.9176 7.36502 27.1731 7.64802 27.3532 7.97817C28.1563 9.45317 27.8313 12.2344 26.4563 15.6125L26.2501 16.1344L26.7844 16.3594C30.0688 17.7313 32.3532 20.1094 32.5532 23.0407C32.8313 27.35 26.9844 30.7563 20.0001 30.7563C13.0157 30.7563 7.18755 27.4 7.45317 23.125C7.62817 20.1688 9.90005 17.7844 13.175 16.4Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M24.8156 24.8938C25.6302 24.8938 26.2906 23.9074 26.2906 22.6907C26.2906 21.4739 25.6302 20.4875 24.8156 20.4875C24.001 20.4875 23.3406 21.4739 23.3406 22.6907C23.3406 23.9074 24.001 24.8938 24.8156 24.8938Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                            <path
                                                d="M15.1657 24.8938C15.9803 24.8938 16.6407 23.9074 16.6407 22.6907C16.6407 21.4739 15.9803 20.4875 15.1657 20.4875C14.3511 20.4875 13.6907 21.4739 13.6907 22.6907C13.6907 23.9074 14.3511 24.8938 15.1657 24.8938Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                        </svg>
                                    </div>
                                    <div class="swiper-slide">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                            <path
                                                d="M28.6906 7.30622L22.6531 16.0562C22.5764 16.1795 22.545 16.3256 22.5643 16.4695C22.5836 16.6134 22.6524 16.746 22.7588 16.8447C22.8653 16.9434 23.0028 17.002 23.1477 17.0103C23.2926 17.0187 23.436 16.9764 23.5531 16.8906L29.375 12.1875V27.5L12.6593 7.36559C12.1535 6.75809 11.4728 6.32118 10.7098 6.1143C9.94685 5.90741 9.13867 5.94061 8.39524 6.20936C7.65181 6.47812 7.00922 6.96939 6.55492 7.61632C6.10061 8.26326 5.85664 9.03445 5.8562 9.82497V30.7625C5.8562 34.1687 9.9187 34.7281 11.1968 32.8562L17.4468 23.8343C17.5148 23.736 17.5491 23.6184 17.5446 23.4989C17.5401 23.3795 17.497 23.2647 17.4218 23.1718C17.3297 23.056 17.1954 22.9815 17.0484 22.9645C16.9013 22.9475 16.7536 22.9895 16.6375 23.0812L10.625 27.8718V12.3593L27.3406 32.4687C29.9687 35.5562 34.1437 33.6968 34.1437 30.0093V9.06247C34.1437 5.91872 30.3125 4.99997 28.6906 7.30622Z"
                                                fill="#0B132A" fill-opacity="0.5" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="content_with_image_section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content_w_image right" id="image_w_text_section-block_652ccefce6e9b4366c192551745b0499">
                                            <div class="content bottom_self">
                                                <div>
                                                    <h3><?php echo getLang('about_supp_h1') ?></h3>
                                                    <p>
                                                        <?php echo getLang('about_supp_desc') ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="img">
                                                <img data-lazyloaded="1" src="/assets/images/about-us-ico.png" decoding="async" data-src="/assets/images/about-us-ico.png" alt="Image">
                                                <div class="image_wrapper"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
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