<!--FOOTER-->
<footer>
  <div class="custom-shape-divider-bottom footer-divider">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 830">
      <defs>
        <linearGradient id="gradient1" x1="100%" y1="0%" x2="0%" y2="100%">
        <stop offset="0%" style="stop-color:#ff9a8b;stop-opacity:1" />
        <stop offset="100%" style="stop-color:#8B3F6E;stop-opacity:1" />
        </linearGradient>
      </defs>
      <path fill="url(#gradient1)" fill-opacity="1"
      d="M1440,128L1420,122.7C1400,117,1360,107,1320,112C1280,117,1240,139,1200,170.7C1160,203,1120,245,1080,234.7C1040,224,1000,160,960,144C920,128,880,160,840,154.7C800,149,760,107,720,112C680,117,640,171,600,170.7C560,171,520,117,480,101.3C440,85,400,107,360,117.3C320,128,280,128,240,128C200,128,160,128,120,138.7C80,149,40,171,20,181.3L0,192L0,820L20,820C40,820,80,820,120,820C160,820,200,820,240,820C280,820,320,820,360,820C400,820,440,820,480,820C520,820,560,820,600,820C640,820,680,820,720,820C760,820,800,820,840,820C880,820,920,820,960,820C1000,820,1040,820,1080,820C1120,820,1160,820,1200,820C1240,820,1280,820,1320,820C1360,820,1400,820,1420,820L1440,820Z">
      </path>
    </svg>
  </div>



  

  <div class="footerContent">
  <span>
    <div class="servicesMenu">
      <h4>Tjänster</h4>
      <?php
    wp_nav_menu(array(
      'theme_location' => 'footer-nav-services'
  ));
    ?>
    </div>
    <div class="infoMenu">
      <h4>Information</h4>
      <?php
    wp_nav_menu(array(
      'theme_location' => 'footer-nav-info'
  ));
    ?>
    </div>
  </span>
  <div class="newsLetter">  <?php
            // Hämta sidan som innehåller formuläret, t.ex. "kontaktformulär"
            $page = get_page_by_path('footer-innehall');  // Ändra slug till den sida som innehåller formuläret
            if ($page) {
                // Skriver ut innehållet från den sidan (inklusive formuläret)
                echo apply_filters('the_content', $page->post_content);
            }
            ?></div>
            </div>

<p class="copyright">© Sawabona AB 2025</p>

</footer>
<!--HOOK för footer-->
<?php wp_footer(); ?>

<script src="https://kit.fontawesome.com/bbc57534db.js" crossorigin="anonymous"></script>
</body>