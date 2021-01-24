<?php
/**
 * Main Template files
 * 
 * @package Aquila
 * 
 */

get_header();?>
<!-- List componets below  -->

<?php get_template_part('template-parts/componets/richmond-preview');?>
<?php get_template_part('template-parts/componets/promo-container'); ?>
<?php get_template_part('template-parts/componets/form-container'); ?>

<!--  accordion container -->
<?php get_template_part('template-parts/componets/accordion-container'); ?>
<?php get_footer();?>