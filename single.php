<?php get_header(); ?>

<div class="topics-firstview firstview">
  <div class="firstview__content">
    <h2 class="firstview__catchcopy">特集</h2>
    <p class="firstview__ss-txt">Topics</p>
    <a href="archive.html" class="firstview__btn">特集一覧ページへ</a>
  </div>
</div>


<main class="single-main">
  <div class="container">
    <?php if (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>

    <?php if (has_post_thumbnail()) : ?>
    <?php the_post_thumbnail(); ?>
    <?php else : ?>
    <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
    <?php endif; ?>
     <?php the_content(); ?>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>