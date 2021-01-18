<?php get_header();?>

  <div class="page-wrap">
    <div class="container">
      <h1> <a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
      
      <?php get_template_part('includes/section', 'blogcontent')?>
    </div>
  </div>

<?php get_footer();?>