<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>

<header>
    <nav class="navbar navbar-dark bg-dark">
    <div class="container">
  <!-- Navbar content -->

        <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'menu_class' => 'top-bar',
                )
            );
        ?>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
      </nav>
</header>