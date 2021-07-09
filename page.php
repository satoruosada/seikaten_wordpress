<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og:http://ogp.me/ns# fb:http://ogp.me/ns/fb# website:http://ogp.me/ns/website#">

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="global-container">
        <div class="container">

            <?php get_template_part('includes/header'); ?>

            <div class="top__news">
                <div class="top__news-title">
                    <div class="top__news-maintitle">News</div>
                    <div class="top__news-subtitle">お知らせ</div>
                </div>
            </div>

            <div class="top__des">
                <span class="top__des-home"><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></span>
                <span>></span>



                <?php
                // メニューIDを取得する
                $menu_name = 'main_menu';
                $locations = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object($locations[$menu_name]);

                $menu_items = wp_get_nav_menu_items($menu->term_id);
                ?>
                <?php foreach ($menu_items as $item) : ?>
                    <a href="<?php echo esc_attr($item->url); ?>">
                        <span class="top__des02-ichiran">お知らせ一覧</span>
                    </a>
                <?php endforeach; ?>


            </div>

            <div class="main">
                <div class="main__inner">

                    <?php query_posts('posts_per_page=3'); ?>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <?php
                            $img = get_eyecatch_with_default();
                            ?>
                            <div class="main__panel">
                                <div class="main__images">
                                    <img src="<?php echo $img[0]; ?>" alt="">
                                </div>
                                <div class="main__txt-wrapper">
                                    <div class="main__txt">
                                        <div class="main__date"><?php the_time('Y/m/d'); ?></div>
                                        <div class="main__text">
                                            <p>
                                                <?php the_title(); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <a class="main__des" href="<?php the_permalink(); ?>">
                                        <span class="main__des-span">詳しく見る</span><span class="main__des-yajirushi">></span>
                                    </a>
                                </div>
                            </div>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>
            </div>

            <div class="pager">
                <ul class="pagination">
                    <?php wp_pagenavi(); ?>
                    <!-- <?php next_post_link(); ?> -->
                </ul>
            </div>

            <?php get_template_part('includes/footer'); ?>

        </div>
    </div>

    <?php get_footer(); ?>
</body>

</html>