<?php
/**
 * 
 * @Pakage Aquila
 */
?>
<!DOCTYPE html>
<!-- <html lang="en"> -->
<!-- dealing with multi site .. we can grab the informaion here -->
<html lang="<?php language_attributes(); ?>">
<head>
    <!-- <meta charset="UTF-8"> -->
    <meta charset=<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- check for backward compatiabilty  -->
    <?php
        if (function_exists('wp_body_open')){
            wp_body_open();
        }
    ?>
<header>header

<p>g</p>
</header>
