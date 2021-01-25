<?php
/**
 * Header Navigation template 
 * @package Aquila
 */
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light mobile">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php
        wp_nav_menu(
          array(
            // 'theme_location' => "top-menu",
            'menu' => "top-menu",
            "menu_class" => "nav-item",
          )
          );

      ?>
        </li>
      </ul>
      
    </div>
  </div>
</nav>