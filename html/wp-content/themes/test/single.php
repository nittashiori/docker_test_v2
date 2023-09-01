<?php
/*
Template Name: news
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <?php wp_head(); ?> <!-- WordPressのヘッダー情報を出力 -->
</head>
<body <?php body_class(); ?>> <!-- ボディ要素にCSSクラスを追加 -->

<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <h1>ニュース詳細ページです</h1>

    <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
      <header>
        <h1 class="ttl"><?php the_title(); ?></h1>
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
      </header>

      <div class="edit-area">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile; ?>
    <p><a href="/">TOPに戻る</a></p>
  </main>
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?> <!-- WordPressのフッター情報を出力 -->
</body>
</html>
