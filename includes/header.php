<?php wp_body_open(); ?>

<!-- モバイルカバー -->
<div class="mobile-menu__cover">
    <nav class="mobile-menu__nav">
        <ul class="mobile-menu__ul">
            <li class="mobile-menu__li">
                <a href="<?php echo esc_url(home_url('/#info')); ?>" class="mobile-menu__link"><img src="<?php echo get_template_directory_uri(); ?>/images/mobile_logo.png" alt=""><span class="mobile-menu__span1 fo-zo">News</span><span class="mobile-menu__span2 fo-go">お知らせ</span></a>
            </li>
            <li class="mobile-menu__li">
                <a href="<?php echo esc_url(home_url('/#category')); ?>" class="mobile-menu__link"><img src="<?php echo get_template_directory_uri(); ?>/images/mobile_logo.png" alt=""><span class="mobile-menu__span1 fo-zo">Category</span><span class="mobile-menu__span2 fo-go">取り扱い商品</span></a>
            </li>
            </li>
            <li class="mobile-menu__li">
                <a href="<?php echo esc_url(home_url('/#service')); ?>" class="mobile-menu__link"><img src="<?php echo get_template_directory_uri(); ?>/images/mobile_logo.png" alt=""><span class="mobile-menu__span1 fo-zo">Service</span><span class="mobile-menu__span2 fo-go">サービス</span></a>
            </li>
            <li class="mobile-menu__li mb-mi">
                <a href="<?php echo esc_url(home_url('/#store')); ?>" class="mobile-menu__link"><img src="<?php echo get_template_directory_uri(); ?>/images/mobile_logo.png" alt=""><span class="mobile-menu__span1 fo-zo">Store</span><span class="mobile-menu__span2 fo-go">店舗情報</span></a>
            </li>
        </ul>
        <li class="mobile-menu__li-tel back-color">
            <a href="tel:054-254-1187" class="mobile-menu__link-tel">
                <img class="mobile-menu__image-tel" src="<?php echo get_template_directory_uri(); ?>/images/mobile_tel.png" alt=""><span class="mobile-menu__span-tel fo-go fo-color">054-254-1187</span>
            </a>
        </li>
        <li class="mobile-menu__li-mail back-color">
            <a href="mailto:送信先メールアドレス" class="mobile-menu__link-mail">
                <img class="mobile-menu__image-mail" src="<?php echo get_template_directory_uri(); ?>/images/mobile_mail.png" alt=""><span class="mobile-menu__span-tel fo-zo fo-color">Mail</span>
            </a>
        </li>
    </nav>
</div>

<!-- ヘッダートリガー -->
<div class="nav-trigger"></div>

<!-- ヘッダー -->
<header class="header">
    <div class="header__inner">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <span class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/header_main02.png" alt="">
            </span>
            <span class="logo__right">
                <div class="logo__title">
                    静岡市葵区 街中のお花屋さん
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/header_main01.png" alt="">
            </span>
        </a>

        <div class="header__backcolor">
            <nav class="header__nav">
                <div class="header__tel">
                    <a href="tel:054-254-1187">TEL: 054-254-1187</a>
                </div>
                <ul class="header__ul">
                    <div class="header__ul-wrapper">
                        <li class="header__li item">
                            <a href="<?php echo esc_url(home_url('/#info')); ?>">お知らせ</a>
                        </li>
                        <li class="header__li item">
                            <a href="<?php echo esc_url(home_url('/#category')); ?>">取り扱い商品</a>
                        </li>
                        <li class="header__li item">
                            <a href="<?php echo esc_url(home_url('/#service')); ?>">サービス</a>
                        </li>
                        <li class="header__li item">
                            <a href="<?php echo esc_url(home_url('/#store')); ?>">店舗情報</a>
                        </li>
                    </div>
                    <li class="header__li border-none">
                        <a class="btn filled" href="mailto:送信先メールアドレス">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/header_mail.png" alt="" />
                            <span>お問い合わせ</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <button class="mobile-menu__btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>