<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
  <?php wp_head(); ?>
</head>
<body>
  <?php get_header(); ?>  
  <h1>テスト用のサイトです</h1>
  <?php
  $args = array(
      'post_type' => 'post', // 投稿タイプを指定します (カスタム投稿タイプの場合は変更)
      'posts_per_page' => 5, // 表示する投稿の数を指定します
      'order' => 'DESC', // 投稿を降順で表示
  );

  $latest_posts = new WP_Query($args);

  if ($latest_posts->have_posts()) :
      while ($latest_posts->have_posts()) : $latest_posts->the_post();
          // 各投稿のコンテンツを表示します
          ?>
          <article <?php post_class(); ?>>
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </article>
          <?php
      endwhile;
      wp_reset_postdata(); // カスタムループのリセット
  else :
      // 最新の投稿がない場合のコードを表示
      echo '最新の投稿はありません。';
  endif;
  ?>
  <?php get_footer(); ?>
  <?php wp_footer(); ?>
</body>
</html>