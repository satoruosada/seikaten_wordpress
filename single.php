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

			<div class="top__des02">
				<span class="top__des02-home"><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></span>
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
						<span class="top__des02-ichiran">お知らせ一覧</span></a>
				<?php endforeach; ?>


				<span>></span>
				<span class="top__des02-home"><?php the_title(); ?></span>
			</div>

			<div class="main-detaile">
				<div class="main-detaile__images">
					<img src="<?php echo get_template_directory_uri(); ?>/images/mobile_logo.png" alt="">
				</div>

				<div class="main-detaile__date-wrapper">
					<span class="main-detaile__date"><?php the_time('Y/m/d'); ?></span>
				</div>



				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

						<div class="main-detaile__title-wrapper">
							<span class="main-detaile__title">
								<?php the_title(); ?>
							</span>
						</div>

						<div class="main-detaile__txt-wrapper">
							<span class="main-detaile__txt">
								<?php the_content(); ?>
							</span>
						</div>

					<?php endwhile; ?>

				<?php endif; ?>


				<?php
				// メニューIDを取得する
				$menu_name = 'main_menu';
				$locations = get_nav_menu_locations();
				$menu = wp_get_nav_menu_object($locations[$menu_name]);

				$menu_items = wp_get_nav_menu_items($menu->term_id);
				?>
				<div class="main-detaile__btn">
					<?php foreach ($menu_items as $item) : ?>
						<a class="btn__ichiran-second" href="<?php echo esc_attr($item->url); ?>">
							<span>一覧に戻る</span><img class="btn-yajirushi" src="<?php echo get_template_directory_uri(); ?>/images/yajirushi03.png" alt=""></a>
					<?php endforeach; ?>

				</div>
			</div>

			<?php get_template_part('includes/footer'); ?>

		</div>
	</div>

	<?php get_footer(); ?>
</body>

</html>