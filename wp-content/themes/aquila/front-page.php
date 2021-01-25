<?php
/**
 * Main Template files
 * 
 * @package Aquila
 * 
 */

get_header();?>

<div class="container">
    <!-- List componets below  -->
    <?php get_template_part('template-parts/includes/section-content');?>
</div>
<?php get_template_part('template-parts/componets/richmond-preview');?>
<div class="container">
    <!-- List componets below  -->
    <?php get_template_part('template-parts/componets/promo-container');?>
</div>
<?php get_footer();?>