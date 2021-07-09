<!DOCTYPE html>
<html lang="ja" prefix="og:http://ogp.me/ns# fb:http://ogp.me/ns/fb# website:http://ogp.me/ns/website#">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div id="global-container">
		<div class="container">

			<?php get_template_part('includes/header'); ?>

			<div class="hero">
				<div class="hero__image-left">
					<div class="hero__title">
						<p>いつでも、どこでも</p>
						<p>どなたにも</p>
					</div>
				</div>
				<div class="hero__image-right"></div>
			</div>

			<div class="main-content">
				<main>
					<section id="info" class="info">
						<!-- 共通タイトル -->
						<div class="section__title-wrapper">
							<div class="section__title-left">
								<img src="<?php echo get_template_directory_uri(); ?>/images/section_logo.png" alt="" />
								<span class="section__jattl">News</span>
								<span class="section__enttl">お知らせ</span>
							</div>

							<?php
							// メニューIDを取得する
							$menu_name = 'main_menu';
							$locations = get_nav_menu_locations();
							$menu = wp_get_nav_menu_object($locations[$menu_name]);

							$menu_items = wp_get_nav_menu_items($menu->term_id);
							?>
							<div class="section__title-right">
								<?php foreach ($menu_items as $item) : ?>
									<a class="btn__ichiran" href="<?php echo esc_attr($item->url); ?>">
										<span>一覧を見る</span><img class="btn-yajirushi" src="<?php echo get_template_directory_uri(); ?>/images/btn_yajirushi02.png" alt="">
									</a>
								<?php endforeach; ?>

								<!-- <?php next_posts_link(); ?> -->

							</div>
						</div>


						<!-- レスポンシブ時スライド -->
						<div class="section pb pt">
							<div class="sliderArea">
								<div class="full-screen_one slider">

									<?php if (have_posts()) : ?>
										<?php while (have_posts()) : the_post(); ?>
											<?php
											$img = get_eyecatch_with_default();
											?>
											<a href="<?php the_permalink(''); ?>" class="info__panel">
												<img src="<?php echo $img[0]; ?>" alt="" />
												<div class="info__txt">
													<div class="info__date"><?php the_time('Y.m.d'); ?></div>
													<div class="info__ttl"><?php the_title(); ?></div>
												</div>
											</a>

										<?php endwhile; ?>

									<?php endif; ?>

								</div>

								<?php
								// メニューIDを取得する
								$menu_name = 'main_menu';
								$locations = get_nav_menu_locations();
								$menu = wp_get_nav_menu_object($locations[$menu_name]);

								$menu_items = wp_get_nav_menu_items($menu->term_id);
								?>
								<div class="section__title-right">
									<?php foreach ($menu_items as $item) : ?>
										<a class="btn__ichiran-res" href="<?php echo esc_attr($item->url); ?>">
											<span>一覧を見る</span><img class="btn-yajirushi" src="<?php echo get_template_directory_uri(); ?>/images/yajirushi03.png" alt=""></a>
									<?php endforeach; ?>

								</div>
							</div>
						</div>

						<div class="info__inner ">
							<div class="info__images ">

								<?php if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>

										<?php
										$img = get_eyecatch_with_default();
										?>
										<a href="<?php the_permalink(); ?>" class="info__panel">
											<img src="<?php echo $img[0]; ?>" alt="" />
											<div class="info__txt">
												<div class="info__date"><?php the_time('Y.m.d'); ?></div>
												<div class="info__ttl"><?php the_title(); ?></div>
											</div>
										</a>

									<?php endwhile; ?>

								<?php endif; ?>

							</div>
						</div>
					</section>

					<section id="category" class="category">
						<!-- 共通タイトル -->
						<div class="section__title-wrapper-category float-right mb-md">
							<div class="section__title-left-category">
								<img src="<?php echo get_template_directory_uri(); ?>/images/section_logo.png" alt="" />
								<span class="section__jattl-category">Category</span>
								<span class="section__enttl-category">取り扱い商品</span>
							</div>
						</div>

						<div class="category__inner">

							<div class="s_05">

								<div class="accordion_one">
									<div class="accordion_header" id="ac1">
										<img src="<?php echo get_template_directory_uri(); ?>/images/category_01.png" alt="">
										<div class="accordion_cover">
										</div>
										<div class="accordion_title-wrapper">
											<div class="accordion_jatitle">ラン鉢</div>
											<div class="accordion_entitle">Orchid bowl</div>
											<div class="accordion_btn">
												<span class="accordion_btn-ttl"></span>
												<div class="i_box">
													<i class="one_i"></i>
												</div>
											</div>
										</div>

									</div>
									<div class="accordion_inner">
										<div class="box_one">
											<div class="box_one-images">
												<div class="box_one-image01">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_05.png" alt="">
												</div>
												<div class="box_one-image02">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_06.png" alt="">
												</div>
											</div>
											<div class="box_text">
												<p class="txt_a_ac">
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。 ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。
												</p>
											</div>
										</div>
										<div class="box_one">
											<div class="box_one-images">
												<div class="box_one-image01">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_05.png" alt="">
												</div>
												<div class="box_one-image02">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_06.png" alt="">
												</div>
											</div>
											<div class="box_text">
												<p class="txt_a_ac">
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。 ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。
												</p>
											</div>
										</div>
										<div class="closeArea">
											<div class="close_box">
												<a href="#ac1" class="close_btn">
													Close
													<div class="i_box close_btn-yajirushi">
														<i class="one_i"></i>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>

								<div class="accordion_one">
									<div class="accordion_header" id="ac2">
										<img src="<?php echo get_template_directory_uri(); ?>/images/category_02.png" alt="">
										<div class="accordion_cover">
										</div>
										<div class="accordion_title-wrapper">
											<div class="accordion_jatitle">花束</div>
											<div class="accordion_entitle">Bouquet</div>
											<div class="accordion_btn">
												<span class="accordion_btn-ttl"></span>
												<div class="i_box">
													<i class="one_i"></i>
												</div>
											</div>
										</div>

									</div>
									<div class="accordion_inner">
										<div class="box_one">
											<div class="box_one-images">
												<div class="box_one-image01">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_05.png" alt="">
												</div>
												<div class="box_one-image02">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_06.png" alt="">
												</div>
											</div>
											<div class="box_text">
												<p class="txt_a_ac">
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。 ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。
												</p>
											</div>
										</div>
										<div class="box_one">
											<div class="box_one-images">
												<div class="box_one-image01">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_05.png" alt="">
												</div>
												<div class="box_one-image02">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_06.png" alt="">
												</div>
											</div>
											<div class="box_text">
												<p class="txt_a_ac">
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。 ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。
												</p>
											</div>
										</div>
										<div class="closeArea">
											<div class="close_box">
												<a href="#ac2" class="close_btn">
													Close
													<div class="i_box close_btn-yajirushi">
														<i class="one_i"></i>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>

								<div class="accordion_one">
									<div class="accordion_header" id="ac3">
										<img src="<?php echo get_template_directory_uri(); ?>/images/category_03.png" alt="">
										<div class="accordion_cover">
										</div>
										<div class="accordion_title-wrapper">
											<div class="accordion_jatitle">スタンド</div>
											<div class="accordion_entitle">Flower stand</div>
											<div class="accordion_btn">
												<span class="accordion_btn-ttl"></span>
												<div class="i_box">
													<i class="one_i"></i>
												</div>
											</div>
										</div>

									</div>
									<div class="accordion_inner">
										<div class="box_one">
											<div class="box_one-images">
												<div class="box_one-image01">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_05.png" alt="">
												</div>
												<div class="box_one-image02">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_06.png" alt="">
												</div>
											</div>
											<div class="box_text">
												<p class="txt_a_ac">
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。 ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。
												</p>
											</div>
										</div>
										<div class="box_one">
											<div class="box_one-images">
												<div class="box_one-image01">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_05.png" alt="">
												</div>
												<div class="box_one-image02">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_06.png" alt="">
												</div>
											</div>
											<div class="box_text">
												<p class="txt_a_ac">
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。 ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。
												</p>
											</div>
										</div>
										<div class="closeArea">
											<div class="close_box">
												<a href="#ac3" class="close_btn">
													Close
													<div class="i_box close_btn-yajirushi">
														<i class="one_i"></i>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>

								<div class="accordion_one">
									<div class="accordion_header" id="ac4">
										<img src="<?php echo get_template_directory_uri(); ?>/images/category_09.png" alt="">
										<div class="accordion_cover">
										</div>
										<div class="accordion_title-wrapper">
											<div class="accordion_jatitle">アレンジメント</div>
											<div class="accordion_entitle">Arangement</div>
											<div class="accordion_btn">
												<span class="accordion_btn-ttl"></span>
												<div class="i_box">
													<i class="one_i"></i>
												</div>
											</div>
										</div>

									</div>
									<div class="accordion_inner">
										<div class="box_one">
											<div class="box_one-images">
												<div class="box_one-image01">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_05.png" alt="">
												</div>
												<div class="box_one-image02">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_06.png" alt="">
												</div>
											</div>
											<div class="box_text">
												<p class="txt_a_ac">
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。 ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。
												</p>
											</div>
										</div>
										<div class="box_one">
											<div class="box_one-images">
												<div class="box_one-image01">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_05.png" alt="">
												</div>
												<div class="box_one-image02">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_06.png" alt="">
												</div>
											</div>
											<div class="box_text">
												<p class="txt_a_ac">
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。 ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。
												</p>
											</div>
										</div>
										<div class="closeArea">
											<div class="close_box">
												<a href="#ac4" class="close_btn">
													Close
													<div class="i_box close_btn-yajirushi">
														<i class="one_i"></i>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>

								<div class="accordion_one">
									<div class="accordion_header" id="ac5">
										<img src="<?php echo get_template_directory_uri(); ?>/images/category_10.png" alt="">
										<div class="accordion_cover">
										</div>
										<div class="accordion_title-wrapper">
											<div class="accordion_jatitle">プリザーブドフラワー</div>
											<div class="accordion_entitle">Preserved flower</div>
											<div class="accordion_btn">
												<span class="accordion_btn-ttl"></span>
												<div class="i_box">
													<i class="one_i"></i>
												</div>
											</div>
										</div>

									</div>
									<div class="accordion_inner">
										<div class="box_one">
											<div class="box_one-images">
												<div class="box_one-image01">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_05.png" alt="">
												</div>
												<div class="box_one-image02">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_06.png" alt="">
												</div>
											</div>
											<div class="box_text">
												<p class="txt_a_ac">
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。 ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。
												</p>
											</div>
										</div>
										<div class="box_one">
											<div class="box_one-images">
												<div class="box_one-image01">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_05.png" alt="">
												</div>
												<div class="box_one-image02">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_06.png" alt="">
												</div>
											</div>
											<div class="box_text">
												<p class="txt_a_ac">
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。 ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。
												</p>
											</div>
										</div>
										<div class="closeArea">
											<div class="close_box">
												<a href="#ac5" class="close_btn">
													Close
													<div class="i_box close_btn-yajirushi">
														<i class="one_i"></i>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>

								<div class="accordion_one">
									<div class="accordion_header" id="ac6">
										<img src="<?php echo get_template_directory_uri(); ?>/images/category_11.png" alt="">
										<div class="accordion_cover">
										</div>
										<div class="accordion_title-wrapper">
											<div class="accordion_jatitle">観葉植物</div>
											<div class="accordion_entitle">Foliage plant</div>
											<div class="accordion_btn">
												<span class="accordion_btn-ttl"></span>
												<div class="i_box">
													<i class="one_i"></i>
												</div>
											</div>
										</div>

									</div>
									<div class="accordion_inner">
										<div class="box_one">
											<div class="box_one-images">
												<div class="box_one-image01">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_05.png" alt="">
												</div>
												<div class="box_one-image02">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_06.png" alt="">
												</div>
											</div>
											<div class="box_text">
												<p class="txt_a_ac">
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。 ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。
												</p>
											</div>
										</div>
										<div class="box_one">
											<div class="box_one-images">
												<div class="box_one-image01">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_05.png" alt="">
												</div>
												<div class="box_one-image02">
													<img src="<?php echo get_template_directory_uri(); ?>/images/category_06.png" alt="">
												</div>
											</div>
											<div class="box_text">
												<p class="txt_a_ac">
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。 ここにテキストが入ります。ここにテキストが入ります。
													ここにテキストが入ります。ここにテキストが入ります。
												</p>
											</div>
										</div>
										<div class="closeArea">
											<div class="close_box">
												<a href="#ac6" class="close_btn">
													Close
													<div class="i_box close_btn-yajirushi">
														<i class="one_i"></i>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>


							</div>
						</div>

						<!-- パララックス -->
						<div class="category__parallax"></div>
					</section>

					<section id="service" class="service">
						<!-- 共通タイトル -->
						<div class="section__title-wrapper">
							<div class="section__title-left">
								<img src="<?php echo get_template_directory_uri(); ?>/images/section_logo.png" alt="" />
								<span class="section__jattl">Service</span>
								<span class="section__enttl">サービス</span>
							</div>
						</div>

						<div class="service__inner">
							<div class="service__wrapper">
								　<div class="service__txt">
									<p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
										ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
								</div>
								<div class="service__images">
									<img src="<?php echo get_template_directory_uri(); ?>/images/category_07.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/images/category_08.png" alt="">
								</div>
							</div>
							<div class="service__wrapper">
								　<div class="service__txt">
									<p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
										ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
								</div>
								<div class="service__images">
									<img src="<?php echo get_template_directory_uri(); ?>/images/category_07.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/images/category_08.png" alt="">
								</div>
							</div>
						</div>
					</section>

					<section id="store" class="store">
						<!-- 共通タイトル -->
						<div class="section__title-wrapper float-right">
							<div class="section__title-left">
								<img src="<?php echo get_template_directory_uri(); ?>/images/section_logo.png" alt="" />
								<span class="section__jattl">Store</span>
								<span class="section__enttl">店舗情報</span>
							</div>
						</div>

						<div class="store__wrapper">
							<div class="store__images">
								<img src="<?php echo get_template_directory_uri(); ?>/images/store_images.jpg" alt="">
							</div>
							<div class="store__des">
								<img src="<?php echo get_template_directory_uri(); ?>/images/store_logo.png" alt="">

								<div class="store__info">
									<table>
										<tr>
											<td class="store__ttl">住所</td>
											<td class="store__content">〒420-0034　静岡県静岡市葵区常磐町1-1-6</td>
										</tr>
										<tr>
											<td class="store__ttl">電話・FAX</td>
											<td class="store__content">電話：054-254-1187　FAX：054-252-1990</td>
										</tr>
										<tr>
											<td class="store__ttl">営業時間</td>
											<td class="store__content">9:00〜18:00</td>
										</tr>
										<tr>
											<td class="store__ttl">定休日</td>
											<td class="store__content">正月4 日間（予約可）休</td>
										</tr>
										<tr>
											<td class="store__ttl">配達可能エリア</td>
											<td class="store__content">静岡市【葵区（但し山間部除く）・駿河区】</td>
										</tr>
									</table>
								</div>
							</div>
						</div>

						<div class="store__map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3269.3647729398363!2d138.38088531557267!3d34.972526776118265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601a49f5c28a021d%3A0xf62651ac7f33d5b9!2z44CSNDIwLTAwMzQg6Z2Z5bKh55yM6Z2Z5bKh5biC6JG15Yy65bi456OQ55S677yR5LiB55uu77yR4oiS77yW!5e0!3m2!1sja!2sjp!4v1622445156503!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</section>

					<section id="icon" class="icon">
						<div class="icon__wrapper">
							<a href="tel:054-254-1187" class="icon__left">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tel.png" alt="" />
								<div class="icon__txt pl">
									<span>054-254-1187</span>
									<p class="icon__p">営業時間：9:00〜18:00</p>
								</div>
							</a>
							<a href="mailto:送信先メールアドレス" class="icon__left pd">
								<img src="<?php echo get_template_directory_uri(); ?>/images/footer_mail.png" alt="" />
								<div class="icon__txt">
									<span class="pt-md">Mail</span>
								</div>
							</a>
						</div>
					</section>
				</main>
			</div>

			<?php get_template_part('includes/footer'); ?>

		</div>
	</div>

	<?php get_footer(); ?>
</body>

</html>