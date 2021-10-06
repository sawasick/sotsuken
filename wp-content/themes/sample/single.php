<?php get_header(); ?>
<div class="l-main__wrapper">
  <?php include('breadcrumb.php') ?>
  <div class="l-article__inner">
    <div class="l-article__wrapper">
      <div class="l-article__content p-article">
        <h1 class="c-headingFirst u-margin__bottom--large"><?php the_title();?></h1>
        <?php
        if(have_posts()){
          while(have_posts()){
            the_post();
            the_content();
          }
        }
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>