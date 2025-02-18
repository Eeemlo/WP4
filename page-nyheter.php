<!-- Include header -->
<?php get_header(); ?>

<!--Hämtas av WP för förstasidan-->

<div class="custom-shape-divider-top">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <defs>
            <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#ff7e5f;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#A75D5D;stop-opacity:1" />
            </linearGradient>
        </defs>

        <path fill="url(#gradient1)" fill-opacity="1"
            d="M0,160L15,133.3C30,107,60,53,90,48C120,43,150,85,180,112C210,139,240,149,270,138.7C300,128,330,96,360,85.3C390,75,420,85,450,128C480,171,510,245,540,240C570,235,600,149,630,138.7C660,128,690,192,720,197.3C750,203,780,149,810,133.3C840,117,870,139,900,149.3C930,160,960,160,990,138.7C1020,117,1050,75,1080,69.3C1110,64,1140,96,1170,101.3C1200,107,1230,85,1260,112C1290,139,1320,213,1350,250.7C1380,288,1410,288,1425,288L1440,288L1440,0L1425,0C1410,0,1380,0,1350,0C1320,0,1290,0,1260,0C1230,0,1200,0,1170,0C1140,0,1110,0,1080,0C1050,0,1020,0,990,0C960,0,930,0,900,0C870,0,840,0,810,0C780,0,750,0,720,0C690,0,660,0,630,0C600,0,570,0,540,0C510,0,480,0,450,0C420,0,390,0,360,0C330,0,300,0,270,0C240,0,210,0,180,0C150,0,120,0,90,0C60,0,30,0,15,0L0,0Z">
        </path>
    </svg>
</div>



<main>

    <!--NYHETER PÅ STARTSIDA-->
    <section class="projectSection">
        <h1>Nyheter</h1>
        <div class="newsContainer">
            <?php
            query_posts('category_name=news&posts_per_page=7');


            /* Hämtar posts från WP och förbereder dem för utskrift */
            if (have_posts()) {
                while (have_posts()) {
                    the_post();

                    ?>
                    <!-- Skriver ut avkortade posts från WP enligt inställning -->

                    <a href="<?php the_permalink(); ?>">
                        <article>
                            <div>
                                <h4><?php the_title(); ?></h4>
                                <p class="pSmall"><?php the_date(); ?></p>
                                <?php the_excerpt(); ?>
                            </div>
                            <span>
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                }
                                ?>
                            </span>
                        </article>
                    </a>

                    <?php
                }
            }
            ?>
        </div>
    </section>

    <p class="bottomSection">.</p>
</main>

<!-- Include footer -->
<?php
get_footer();
?>