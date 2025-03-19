<!-- Include header -->
<?php get_header();?>


<!--Sida för enskilda nyheter-->
<div class="imgBackground">
  <svg id="blob" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 330">
    <!-- Definiera en linear gradient här -->
    <defs>
    <linearGradient id="gradient1" x1="20%" y1="0%" x2="20%" y2="100%">
                <stop offset="0%" style="stop-color:#ff9a8b;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#8B3F6E;stop-opacity:1" />
      </linearGradient>
    </defs>

    <path fill="url(#gradient1)" fill-opacity="1"
      d="M0,160L15,144C30,128,60,96,90,117.3C120,139,150,213,180,224C210,235,240,181,270,144C300,107,330,85,360,74.7C390,64,420,64,450,64C480,64,510,64,540,96C570,128,600,192,630,202.7C660,213,690,171,720,154.7C750,139,780,149,810,160C840,171,870,181,900,176C930,171,960,149,990,128C1020,107,1050,85,1080,90.7C1110,96,1140,128,1170,133.3C1200,139,1230,117,1260,122.7C1290,128,1320,160,1350,160C1380,160,1410,128,1425,112L1440,96L1440,0L1425,0C1410,0,1380,0,1350,0C1320,0,1290,0,1260,0C1230,0,1200,0,1170,0C1140,0,1110,0,1080,0C1050,0,1020,0,990,0C960,0,930,0,900,0C870,0,840,0,810,0C780,0,750,0,720,0C690,0,660,0,630,0C600,0,570,0,540,0C510,0,480,0,450,0C420,0,390,0,360,0C330,0,300,0,270,0C240,0,210,0,180,0C150,0,120,0,90,0C60,0,30,0,15,0L0,0Z">
    </path>
  </svg>
</div>

<main>

    <section class="singleNews">
        <?php
        /* Hämtar posts från WP och förbereder dem för utskrift */
        if (have_posts()) {
            while (have_posts()) {
                the_post();
            }
        }
        ?>
                   <h2><?php the_title(); ?></h2>

        <!-- Skriver ut avkortade posts från WP enligt inställning -->
        <article class="newsPost">
        <span class="singleImg">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('full');
                }
                ?>
            </span>
            <p class="pSmall">Skriven av Emma Lorensson den <?php the_date(); ?></p>
            <div class="single-post"><?php the_content(); ?></div>
        </article>

    </section>


    <p class="bottomSection">.</p>
</main>



<!-- Include footer -->
<?php
get_footer();
?>