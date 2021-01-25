<?php
/**
 * Template name: contact us
 * 
 * @package Aquila
 * 
 */

get_header();?>
<!-- List componets below  -->
<div class="container">
<div class="col-md-12">
    <?php get_template_part('template-parts/blocks/contactUs-title');?>

    </div>
    
<div class="row">

    <div class="col-md-6">
    <?php get_template_part('template-parts/componets/form-container');?>

    </div>
    <div class="col-md-6">
    <?php get_template_part('template-parts/includes/section-content');?>

    </div>
</div>
</div>
<?php get_footer();?>