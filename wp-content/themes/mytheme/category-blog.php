<?php get_header();?>

<div class="page-wrap">
  <div class="container">
   
    <?php get_template_part('includes/section', 'archive')?>
    <div class="pagination-wrapper">
    <?php previous_posts_link();?>
    <?php next_posts_link();?>
    </div>
  </div>
</div>

<?php get_footer();?>