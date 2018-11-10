<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title>アーカイブ | Ozone Cafe</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- ▼ヘッダー : 開始-->
		<header class="header">
			<div class="container">
				<div class="header-logo">
					<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt="@oneko-cafe"></a>
				</div><!--/.header-logo-->

				<nav class="header-navigation">
					<ul class="nav-menu">
						<li><a href="../index.html">HOME</a></li>
						<li>
							<span>SHOP</span>
							<ul class="sub-menu">
								<li><a href="../shop/index.html">店舗案内</a></li>
								<li><a href="../shop/taste.html">こだわり</a></li>
								<li><a href="../shop/history.html">歴史</a></li>
							</ul>
						</li>
						<li>
							<a href="../menus/index.html">MENUS</a>
						</li>
						<li>
							<span>RECRUIT</span>
							<ul class="sub-menu">
								<li><a href="../recruit/index.html">スタッフ募集</a></li>
								<li><a href="../recruit/form.html">応募フォーム</a></li>
							</ul>
						</li>
						<li><a href="../blog/index.html">BLOG</a></li>
					</ul>
				</nav><!--/.header-navigation-->

			</div>
		</header>
		<!-- ▲ヘッダー : 終了 -->

		<!--▼メインコンテンツ : 開始-->
		<div id="main" class="l-two-column">
			<div class="container">

				<!-- ▼メインカラム : 開始-->
				<div id="main-content" class="l-main site-main">

					<!--▼記事コンテンツエリア : 開始-->
					<div class="content-area posts" role="main">

						<header class="page-header">
							<h1 class="archive-title">アーカイブ</h1>
						</header><!--/.page-header-->

						<!-- ▼ブログ記事一覧 : 開始 -->
						<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) :
						the_post(); ?>
						<article id="<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
								<h1 class="entry-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>
								<div class="entry-meta">
									<span class="date">
										<time class="entry-date">
											<?php the_time('Y年n月j日'); ?>
										</time>
									</span>
									<span class="categories-links ">
										<?php the_category(','); ?>
									</span>
								</div>
							</header>
							<div class="entry-content">
								<?php the_content('&raquo;詳しく見る'); ?>
							</div>
							<footer class="entry-footer">
								<span class="comments-link">
									<a href="#">1件のコメント</a>
								</span>
								<?php the_tags('<span class="tag-links">', ',', '</span>'); ?>
							</footer>
						</article>
            <!-- ▲ブログ記事一覧 : 終了 -->

						<?php endwhile; ?>
					<?php endif; ?>

						<!--▼ ページネーション : 開始-->
						<nav class="navigation pagination" role="navigation">
							<h2 class="screen-reader-text">投稿ナビゲーション</h2>
							<div class="nav-links"><span class='page-numbers current'>1</span>
								<a class='page-numbers' href='#'>2</a>
								<a class='page-numbers' href='#'>3</a>
								<a class="next page-numbers" href="#">次ページへ</a>
							</div>
						</nav>
						<!--▲ ページネーション : 終了-->

					</div>
					<!--▲記事コンテンツエリア : 終了-->

				</div>
				<!-- ▲メインカラム : 終了-->

				<!-- ▼サイドカラム : 開始-->
				<aside id="secondary" class="l-sidebar">

					<!--▼ 検索ウィジェット : 開始-->
					<div class="widget widget_search">
						<h2 class="widget-title">検索</h2>
						<div class="search form-control">
							<form action="" id="searchform">
								<input type="search" name="s" id="s" class="search-input" value="">
								<input type="submit" value="検索" id="searchsubmit">
							</form>
						</div>
					</div>
					<!--▲ 検索ウィジェット : 終了-->

					<!--▼カテゴリウィジェット : 開始-->
					<div class="widget widget_categories">
						<h2 class="widget-title">メニューカテゴリー</h2>
						<ul>
							<li><a href="../menu/index.html">アイスドリンク</a></li>
							<li><a href="../menu/index.html">ホットドリンク</a></li>
							<li><a href="../menu/index.html">フード</a></li>
							<li><a href="../menu/index.html">スイーツ</a></li>
						</ul>
					</div>
					<!--▲ カテゴリウィジェット : 終了-->

					<!--▼ サイドバーバナー : 開始-->
					<div class="widget banner">
						<p>
							<a href="../recruit/form.html">
								<img src="../images/common/banner-contact.png" alt="お問い合わせ">
							</a>
						</p>
						<p>
							<a href="../shop/index.html#access">
								<img src="../images/common/banner-access.png" alt="アクセス">
							</a>
						</p>
						<p>
							<a href="../blog/index.html">
								<img src="../images/common/banner-blog.png" alt="ブログ">
							</a>
						</p>
					</div>
					<!--▲ サイドバーバナー : 終了-->

				</aside>
				<!-- ▲サイドカラム : 終了-->

			</div><!-- /.container -->

		</div>
		<!--▲メインコンテンツ : 終了-->

		<!--▼フッター : 開始-->
		<footer id="colophon" class="footer text-center">
			<div class="container">
				<div class="footer-logo">
					<a href="../index.html">
						<img src="../images/common/logo-footer.png" alt="Ozone Cafe">
					</a>
					<p><?php bloginfo('description'); ?></p>
				</div><!--/.footer-logo-->

				<div class="footer-navigation">
					<ul>
						<li><a href="../">トップページ</a></li>
						<li><a href="../shop/index.html">店舗案内</a></li>
						<li><a href="../menus/index.html">メニュー</a></li>
						<li><a href="../blog/index.html">ブログ</a></li>
						<li><a href="../recruit/index.html">スタッフ募集</a></li>
						<li><a href="../recruit/form.html">求人応募</a></li>
						<li><a href="../sitemap.html">サイトマップ</a></li>
					</ul>
				</div><!--/.footer-navigation-->

				<div class="footer-copyright">
					<p>Copyright &copy; 2018 <?php bloginfo('name'); ?> All Right Reserved.</p>
				</div><!--/.footer-copyright-->

			</div>
		</footer>
		<!--▲フッター : 終了-->
    <?php wp_footer(); ?>
	</body>
</html>
