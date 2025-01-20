<!--PHP för Header-->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
    <meta name="desription" content="<?php bloginfo('description') ?>">


    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/css/main.css">

    
    <script src="https://kit.fontawesome.com/bbc57534db.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

<!--HOOK (måste alltid vara med)-->
<?php wp_head();?>

</head>

<body>
<header>
 <!-- Menu for large screens -->
<div class="menu">
<a href="<?php echo home_url(); ?>" class="logo">
    <?php
    // Ladda in logotypen från WP dynamiskt
    $custom_logo_id = get_theme_mod('custom_logo');
    if ($custom_logo_id) {
        // Hämta URL för logotypen
        $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
        echo '<img src="' . esc_url($logo_url) . '" alt="' . get_bloginfo('name') . '">';
    }
    ?>
</a>
  
    <!-- Large Navigation (visible on larger screens) -->
    <nav class="largeNav">
    <?php
    wp_nav_menu(array(
      'theme_location' => 'main-nav'
  ));
    ?>
    </nav>
  
<!-- Small Navigation (for small screens) -->
<nav class="smallNav" id="smallNav" role="navigation">
      
      <!-- Small Navigation (for small screens) -->
      <nav class="smallNav" id="smallNav" role="navigation">
    <?php
    wp_nav_menu(array(
      'theme_location' => 'main-nav'
  ));
    ?>
  
      <!-- Menu Toggle Button for Small Screens -->
      <a href="#smallNav" class="nav__toggle" role="button" aria-expanded="false" aria-controls="menu">
        <svg class="menuicon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
          <title>Toggle Menu</title>
          <g>
            <line class="menuicon__bar" x1="13" y1="16.5" x2="37" y2="16.5"/>
            <line class="menuicon__bar" x1="13" y1="24.5" x2="37" y2="24.5"/>
            <line class="menuicon__bar" x1="13" y1="32.5" x2="37" y2="32.5"/>
            <circle class="menuicon__circle" r="23" cx="25" cy="25" />
          </g>
        </svg>
      </a>

    </nav>

  </div>


  </header>

