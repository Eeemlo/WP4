<!-- Include header -->
<?php get_header(); ?>

<div class="custom-shape-divider-top">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
        <defs>
            <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#ff7e5f;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#A75D5D;stop-opacity:1" />
            </linearGradient>
        </defs>

        <path fill="url(#gradient1)" fill-opacity="1"
        d="M0,64L34.3,96C68.6,128,137,192,206,202.7C274.3,213,343,171,411,144C480,117,549,107,617,117.3C685.7,128,754,160,823,154.7C891.4,149,960,107,1029,96C1097.1,85,1166,107,1234,122.7C1302.9,139,1371,149,1406,154.7L1440,160L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
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


    <p class="bottomSection">.</p>
</main>

<!-- Include footer -->
<?php
get_footer();
?>