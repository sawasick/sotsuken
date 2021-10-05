<?php get_header(); ?>
<div class="l-main__wrapper">
  <div class="l-article__wrapper">
    <div class="l-article__content p-article">
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

<?php get_footer(); ?>