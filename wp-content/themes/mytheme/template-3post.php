<?php 
/**
 * Template Name: 3 card post 
 */
?>
<?php get_header();?>

  <div class="page-wrap">
    <div class="container">
    <h1><?php the_title();?></h1>
    <h5><?php the_content();?></h5>
        <div class="row">
            <?php get_template_part('includes/section', '3post')?>
            </div>
        </div>
  </div>
<?php get_footer();?>