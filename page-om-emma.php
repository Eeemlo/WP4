<!-- Include header -->
<?php get_header(); ?>

<div class="custom-shape-divider-top">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
        <defs>
        <linearGradient id="gradient1" x1="20%" y1="0%" x2="20%" y2="100%">
                <stop offset="0%" style="stop-color:#ff9a8b;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#8B3F6E;stop-opacity:1" />
            </linearGradient>
        </defs>

        <path fill="url(#gradient1)" fill-opacity="1"
        d="M0,160L21.8,170.7C43.6,181,87,203,131,197.3C174.5,192,218,160,262,138.7C305.5,117,349,107,393,106.7C436.4,107,480,117,524,117.3C567.3,117,611,107,655,133.3C698.2,160,742,224,785,213.3C829.1,203,873,117,916,101.3C960,85,1004,139,1047,144C1090.9,149,1135,107,1178,106.7C1221.8,107,1265,149,1309,176C1352.7,203,1396,213,1418,218.7L1440,224L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path>
    </svg>
</div>




<main>

    <!--First section-->
    <!--First section KANSKE MÅSTE GÖRA DYNAMISKT SEDAN?-->
    <section class="about">

        <?php
        /* Hämtar posts från WP och förbereder dem för utskrift */
        if (have_posts()) {
            while (have_posts()) {
                the_post();

                ?>
                <!-- Skriver ut innehållet för start i WP -->
                <h1><?php the_title() ?></h1>
                <?php the_content(); ?>
                <?php
            }
        }
        ?>
    </section>

    <section class="web-consultation" id="aboutForm">
        <?php
        // Hämta sidan som innehåller innehållet, t.ex. "process"
        $page = get_page_by_path('konsultation-om-oss');  // Ändra slug till den sida som innehåller formuläret
        if ($page):
            ?>
            <div class="processText" id="processText">
                <?php
                // Skriver ut innehållet från den sidan (inklusive formuläret)
                echo apply_filters('the_content', $page->post_content);
                ?>
            </div>
        <?php endif; ?>
    </section>

    <p class="bottomSection">.</p>
</main>

<!-- Include footer -->
<?php
get_footer();
?>