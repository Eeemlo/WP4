<!--Hämtas av WP för förstasidan-->

<!-- Include header -->
<?php get_header(); ?>

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
            d="M0,160L21.8,170.7C43.6,181,87,203,131,197.3C174.5,192,218,160,262,138.7C305.5,117,349,107,393,106.7C436.4,107,480,117,524,117.3C567.3,117,611,107,655,133.3C698.2,160,742,224,785,213.3C829.1,203,873,117,916,101.3C960,85,1004,139,1047,144C1090.9,149,1135,107,1178,106.7C1221.8,107,1265,149,1309,176C1352.7,203,1396,213,1418,218.7L1440,224L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z">
        </path>
    </svg>
    </svg>
</div>

<main>
    <!--First section KANSKE MÅSTE GÖRA DYNAMISKT SEDAN?-->
    <section class="introSection">

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

            <a class="button btn-scale btn-shadow" href="#contactMain">Jobba med mig</a>
        </div>

        <!--Right container-->
        <div class="imageContainer">
            <img class="emmafarg" src="<?= header_image(); ?>">
            <!-- height="<?= get_custom_header()->height ?>" width="<?= get_custom_header()->width ?>">-->
        </div>
        </div>
    </section>

    <svg id="blob2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319">
        <path fill="#f5e8de" fill-opacity="1"
            d="M0,192L20,208C40,224,80,256,120,277.3C160,299,200,309,240,288C280,267,320,213,360,181.3C400,149,440,139,480,154.7C520,171,560,213,600,224C640,235,680,213,720,224C760,235,800,277,840,266.7C880,256,920,192,960,181.3C1000,171,1040,213,1080,224C1120,235,1160,213,1200,192C1240,171,1280,149,1320,160C1360,171,1400,213,1420,234.7L1440,256L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z">
        </path>
    </svg>

    <!--VÅRA TJÄNSTER-->
    <section class="services">
        <h2>Tjänster</h2>
        <div class="gridContainer">
            <?php
            // Slugs för sidorna i önskad ordning
            $slugs = array('hemsida', 'tillganglighetsanpassning', 'webbanalys', 'konsulttimmar');

            // Skapa en tom array för att lagra sidorna
            $pages = array();

            // Loopa genom varje slug och hämta motsvarande sida
            foreach ($slugs as $slug) {
                $page = get_page_by_path($slug); // Hämta sida baserat på slug
                if ($page) {
                    $pages[] = $page; // Lägg till sidan i arrayen om den finns
                }
            }

            // Nu loopar vi genom sidorna i den ordning som definieras i $slugs arrayen
            foreach ($pages as $post):
                setup_postdata($post);
                ?>
                <section class="workExperience">
                    <article class="project workItem">
                        <div class="projectDescription">
                            <h3><?php the_title(); ?></h3>
                            <?php
                            $excerpt = get_post_meta(get_the_ID(), 'excerpt', true);
                            if ($excerpt) {
                                echo '<p class="custom-excerpt">' . esc_html($excerpt) . '</p>';
                            } ?>
                            <a href="<?php the_permalink(); ?>" class="button btn-shadow" id="serviceBtn"><?php the_title(); ?> <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </article>
                </section>
            <?php endforeach;
            wp_reset_postdata(); ?>
        </div>
    </section>


    <!--SVG SECTION-->
    <div class="curved upper">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
            <path fill="#fcf4f2" fill-opacity="1"
                d="M0,128L30,149.3C60,171,120,213,180,213.3C240,213,300,171,360,165.3C420,160,480,192,540,202.7C600,213,660,203,720,186.7C780,171,840,149,900,160C960,171,1020,213,1080,208C1140,203,1200,149,1260,128C1320,107,1380,117,1410,122.7L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
            </path>
        </svg>
    </div>

    <section class="accentSection">
        <div class="accentContent">
            <div class="accentAbout">
                <?php
                // Hämta sidan som innehåller formuläret, t.ex. "kontaktformulär"
                $page = get_page_by_path('start-emma');  // Ändra slug till den sida som innehåller formuläret
                if ($page) {
                    // Skriver ut innehållet från den sidan (inklusive formuläret)
                    echo apply_filters('the_content', $page->post_content); ?>
                    <a class="button btn-scale btn-shadow" href="#contactMain">Jobba med mig</a>

                </div>
                <div class="accentImg">
                    <?php

                    // Kolla om sidan har en featured image
                    if (has_post_thumbnail($page->ID)) {
                        // Hämta och skriv ut featured image
                        echo get_the_post_thumbnail($page->ID, 'large');  // 'full' ger storbilden, kan justeras
                    }
                }
                ?>
            </div>
        </div>
    </section>


    <div class="curved under">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 270">
            <path fill="#fcf4f2" fill-opacity="1"
                d="M0,128L30,117.3C60,107,120,85,180,101.3C240,117,300,171,360,165.3C420,160,480,96,540,106.7C600,117,660,203,720,213.3C780,224,840,160,900,149.3C960,139,1020,181,1080,208C1140,235,1200,245,1260,234.7C1320,224,1380,192,1410,176L1440,160L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
            </path>
        </svg>
    </div>

    <!--NYHETER PÅ STARTSIDA SLIDER-->
    <div class="newsBg">
        <h2>Senaste blogginlägg</h2>
        <section class="newsSection">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <?php
                        query_posts('category_name=news&posts_per_page=6');

                        /* Hämtar posts från WP och förbereder dem för utskrift */
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                ?>
                                <!-- Skriver ut avkortade posts från WP -->
                                <div class="card swiper-slide">
                       
                                
                                        <div class="card-image">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('small'); // Anger storlek på thumbnail
                                            }
                                            ?>
                                        </div>
                                    
                                    <div class="card-content">
                                        <h4><?php the_title(); ?></h4>
                                        <p class="pSmall"><?php the_date(); ?></p>
                                        <?php the_excerpt(); ?>
                                        <a class="button" href="<?php the_permalink(); ?>">Läs mer</a>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
    </div>
    </section>




    <svg id="blob3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f5e8de" fill-opacity="1"
            d="M0,128L30,160C60,192,120,256,180,250.7C240,245,300,171,360,154.7C420,139,480,181,540,197.3C600,213,660,203,720,192C780,181,840,171,900,176C960,181,1020,203,1080,186.7C1140,171,1200,117,1260,122.7C1320,128,1380,192,1410,224L1440,256L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
        </path>
    </svg>



    <!-- Hämta formuläret dynamiskt från en annan sida -->
    <section class="contactSection">
        <div class="contactText" id="contactMain">
            <?php
            // Hämta sidan som innehåller formuläret, t.ex. "kontaktformulär"
            $page = get_page_by_path('kontakt');  // Ändra slug till den sida som innehåller formuläret
            if ($page) {
                // Skriver ut innehållet från den sidan (inklusive formuläret)
                echo apply_filters('the_content', $page->post_content);
            }
            ?>
        </div>

        <!-- Dynamiskt hämtad kontaktformulär -->
        <div class="formContainer">
            <?php
            // Hämta sidan som innehåller formuläret, t.ex. "kontaktformulär"
            $page = get_page_by_path('kontaktformular');  // Ändra slug till den sida som innehåller formuläret
            if ($page) {
                // Skriver ut innehållet från den sidan (inklusive formuläret)
                echo apply_filters('the_content', $page->post_content);
            }
            ?>
        </div>


    </section>
</main>

<!-- Include footer -->
<?php
get_footer();
?>