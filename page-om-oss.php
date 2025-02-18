<!-- Include header -->
<?php get_header(); ?>

<div class="custom-shape-divider-top">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <defs>
            <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#ff7e5f;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#A75D5D;stop-opacity:1" />
            </linearGradient>
        </defs>

        <path fill="url(#gradient1)" fill-opacity="1"
            d="M0,128L20,133.3C40,139,80,149,120,138.7C160,128,200,96,240,122.7C280,149,320,235,360,240C400,245,440,171,480,144C520,117,560,139,600,133.3C640,128,680,96,720,122.7C760,149,800,235,840,229.3C880,224,920,128,960,128C1000,128,1040,224,1080,266.7C1120,309,1160,299,1200,250.7C1240,203,1280,117,1320,85.3C1360,53,1400,75,1420,85.3L1440,96L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z">
        </path>
    </svg>
</div>




<main>

    <!--First section-->
    <!--First section KANSKE MÅSTE GÖRA DYNAMISKT SEDAN?-->
    <section class="introSection aboutIntro">

        <!--Left container-->
        <div class="introText">
            <?php
            /* Hämtar posts från WP och förbereder dem för utskrift */
            if (have_posts()) {
                while (have_posts()) {
                    the_post();

                    ?>
                    <!-- Skriver ut innehållet för start i WP -->

                    <?php the_content(); ?>
                    <?php
                }
            }
            ?>

            <a class="button yellowBtn" href="#">Jobba med mig</a>
        </div>

        <!--Right container-->
        <div class="imageContainer">
            <img class="emmafarg" src="<?= header_image(); ?>">
            <!-- height="<?= get_custom_header()->height ?>" width="<?= get_custom_header()->width ?>">-->
        </div>
        </div>
    </section>


    <p class="bottomSection">.</p>
</main>

<!-- Include footer -->
<?php
get_footer();
?>