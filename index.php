<?php get_header(); ?>

<div class="firstview top-firstview">
  <div class="firstview__content top-firstview__content">
    <h1 class="firstview__catchcopy">呼び覚ませ</h1>
    <p class="firstview__ss-txt">2021 Spring & Summer</p>
  </div>
</div>
<div class="topics">
  <h2 class="topics-ttl">Topics</h2>
  <div class="topics-inner">
    <!-- the_queryの記事を3つ出力するサブループ開始 -->
    <?php
      $args = array(
      'post_type'      => 'post',
      'posts_per_page' => 3,
      );

      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) :?>
      <?php while ($the_query->have_posts()) :?>
      <?php $the_query->the_post();?>


        <!-- サムネイル画像の出力 -->
    <a href="<?php the_permalink(); ?>"class="topics__item">
      <div class="topics__item-img">
        <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
        <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
            <?php endif; ?>
          </div>
　　
          <!-- 記事のタイトルを出力する -->
          <div class="topics__item-content">
            <h3 class="topics__item-ttl"><?php echo get_the_title(); ?></h3>
          </div>
    </a>

        <!-- 投稿が無い場合の処理 -->
          <?php endwhile; ?>
          <?php else : ?>
          <p>投稿がありません。</p>
          <?php endif; ?>

    <!-- サブループで取得中の投稿情報をリセット-->
          <?php 
          wp_reset_postdata();
          ?>
  </div>
</div>

  <!-- stylesの記事を3つ出力するサブループ開始 -->
  <div class="styles">
    <h2 class="styles-ttl">Styles</h2>
    <div class="styles-wrap">
      <?php
      $style = new WP_Query(
        array(
          'post_type'      => 'styles',
          'posts_per_page' => 3,
        )
      );
      ?>
      <?php if ($style->have_posts()) : ?>
        <?php while ($style->have_posts()) : ?>
          <?php $style->the_post(); ?>

          <!-- サムネイル画像の出力 -->
          <a href="<?php the_permalink(); ?>" class="styles-wrap__item">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
            <?php endif; ?>
          </a>

          <!-- 投稿が無い場合の処理 -->
        <?php endwhile; ?>
      <?php else : ?>
        <p>投稿がありません。</p>
      <?php endif; ?>


      <!-- サブループで取得中の投稿情報をリセット-->
      <?php wp_reset_postdata() ?>
    </div>
    <a href=" <?php echo get_category_link('styles'); ?>" class="styles-btn">Styles一覧ページへ</a>

  </div>

  <div class="about">
    <div class="about__inner">

      <div class="about__img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
      </div>
      <div class="about__content">

        <p class="about__content-subttl">Make your World</p>
        <h2 class="about__content-ttl">個性が出せる<br>世界に</h2>
        <p class="about__content-txt"><span class="new-line">ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。</span>ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。</p>
        <a href="<?php echo get_category_link('about'); ?>" class="about-btn">Aboutページへ</a>
      </div>
    </div>
  </div>


  <?php get_footer(); ?>