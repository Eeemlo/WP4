<!--FOOTER-->
<footer>
  <div class="custom-shape-divider-bottom footer-divider">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 720">
      <defs>
        <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" style="stop-color:#ff7e5f;stop-opacity:1" />
          <stop offset="100%" style="stop-color:#A75D5D;stop-opacity:1" />
        </linearGradient>
      </defs>
      <path fill="url(#gradient1)" fill-opacity="1"
        d="M0,128L20,122.7C40,117,80,107,120,112C160,117,200,139,240,170.7C280,203,320,245,360,234.7C400,224,440,160,480,144C520,128,560,160,600,154.7C640,149,680,107,720,112C760,117,800,171,840,170.7C880,171,920,117,960,101.3C1000,85,1040,107,1080,117.3C1120,128,1160,128,1200,128C1240,128,1280,128,1320,138.7C1360,149,1400,171,1420,181.3L1440,192L1440,820L1420,820C1400,820,1360,820,1320,820C1280,820,1240,820,1200,820C1160,820,1120,820,1080,820C1040,820,1000,820,960,820C920,820,880,820,840,820C800,820,760,820,720,820C680,820,640,820,600,820C560,820,520,820,480,820C440,820,400,820,360,820C320,820,280,820,240,820C200,820,160,820,120,820C80,820,40,820,20,820L0,820Z">
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
</body>