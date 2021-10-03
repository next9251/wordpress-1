<?php get_header(); ?>

<div class="styles-single">
  <?php if (have_posts()) : the_post(); ?>
    <div class="styles-single__img">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
      <?php endif; ?>
    </div>


    <div class="styles-single__content">
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
      <h2>サイズ展開</h2>
      <table>
        <tr>
          <th>サイズ</th>
          <th>身幅</th>
          <th>肩幅</th>
          <th>総丈</th>
          <th>袖丈</th>
        </tr>
        <tr>
          <td>S</td>
          <td>36</td>
          <td>32</td>
          <td>57</td>
          <td>28</td>
        </tr>
        <tr>
          <td>M</td>
          <td>38</td>
          <td>36</td>
          <td>59</td>
          <td>30</td>
        </tr>
        <tr>
          <td>L</td>
          <td>40</td>
          <td>38</td>
          <td>61</td>
          <td>32</td>
        </tr>
      </table>
      <h2>POINT</h2>
      <ul>
        <li>春~秋まで着れる</li>
        <li>着痩せするシルエット</li>
        <li>乾燥機に入れられる素材</li>
      </ul>
    </div>
  <?php endif; ?>
</div>
<a class="styles-single__btn" href="<?php echo get_post_type_archive_link('styles'); ?>">Styles一覧へ</a>

<?php get_footer(); ?>