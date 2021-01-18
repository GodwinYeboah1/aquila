<?php get_header();?>

  <div class="page-wrap">
    <div class="container">
      <div class="col-md-6">
        <?php if(is_active_sidebar('blog-sidebar')):?>
          <?php dynamic_sidebar('blog-sidebar');?>
        <?php endif;?>
      </div>
      
      <div class="col-md-6">
        <?php get_template_part('includes/section', 'archive')?>
        <?php previous_posts_link();?>
        <?php next_posts_link();?>
      </div>
    </div>
  </div>

<?php get_footer();?>