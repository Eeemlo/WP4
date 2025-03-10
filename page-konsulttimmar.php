<!-- Include header -->
<?php get_header(); ?>


<!--Sida för enskilda nyheter-->
<div class="custom-shape-divider-top">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <defs>
            <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#ff7e5f;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#A75D5D;stop-opacity:1" />
            </linearGradient>
        </defs>

        <path fill="url(#gradient1)" fill-opacity="1"
        d="M0,160L21.8,170.7C43.6,181,87,203,131,197.3C174.5,192,218,160,262,138.7C305.5,117,349,107,393,106.7C436.4,107,480,117,524,117.3C567.3,117,611,107,655,133.3C698.2,160,742,224,785,213.3C829.1,203,873,117,916,101.3C960,85,1004,139,1047,144C1090.9,149,1135,107,1178,106.7C1221.8,107,1265,149,1309,176C1352.7,203,1396,213,1418,218.7L1440,224L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path>
    </svg>
</div>

<main>

    <section class="service web">
        <?php
        /* Hämtar posts från WP och förbereder dem för utskrift */
        if (have_posts()) {
            while (have_posts()) {
                the_post();
            }
        }
        ?>

        <!-- Skriver ut avkortade posts från WP enligt inställning -->
        <article>
            <span>
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('full');
                }
                ?>
            </span>
            <h1><?php the_title(); ?></h1>
            <div><?php the_content(); ?></div>
        </article>
    </section>

    <svg id="blob2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319">
        <path fill="#EAD6D0" fill-opacity="1"
            d="M0,192L20,208C40,224,80,256,120,277.3C160,299,200,309,240,288C280,267,320,213,360,181.3C400,149,440,139,480,154.7C520,171,560,213,600,224C640,235,680,213,720,224C760,235,800,277,840,266.7C880,256,920,192,960,181.3C1000,171,1040,213,1080,224C1120,235,1160,213,1200,192C1240,171,1280,149,1320,160C1360,171,1400,213,1420,234.7L1440,256L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z">
        </path>
    </svg>

    <!--WEBBPAKET LONG-->
    <section class="web-packages-long accessability">
        <h2>Konsultupplägg</h2>
        <div class="flexContainer">
            <?php
            // Slugs för sidorna i önskad ordning
            $slugs = array('konsult-upplagg');

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
                    <article class="service-item">
                        <div class="serviceDescription">
                            <p><?php the_content(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="button">Boka konsultation <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </article>
                
            <?php endforeach;
            wp_reset_postdata(); ?>
        </div>
    </section>
    <div class="curved upper">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
            <path fill="#f6e8e4" fill-opacity="1"
                d="M0,192L15,176C30,160,60,128,90,101.3C120,75,150,53,180,80C210,107,240,181,270,202.7C300,224,330,192,360,170.7C390,149,420,139,450,128C480,117,510,107,540,122.7C570,139,600,181,630,202.7C660,224,690,224,720,192C750,160,780,96,810,112C840,128,870,224,900,256C930,288,960,256,990,213.3C1020,171,1050,117,1080,112C1110,107,1140,149,1170,186.7C1200,224,1230,256,1260,266.7C1290,277,1320,267,1350,250.7C1380,235,1410,213,1425,202.7L1440,192L1440,320L1425,320C1410,320,1380,320,1350,320C1320,320,1290,320,1260,320C1230,320,1200,320,1170,320C1140,320,1110,320,1080,320C1050,320,1020,320,990,320C960,320,930,320,900,320C870,320,840,320,810,320C780,320,750,320,720,320C690,320,660,320,630,320C600,320,570,320,540,320C510,320,480,320,450,320C420,320,390,320,360,320C330,320,300,320,270,320C240,320,210,320,180,320C150,320,120,320,90,320C60,320,30,320,15,320L0,320Z">
            </path>
        </svg>
    </div>

    <div class="processBg">
    <section class="processSection">
        <div class="processImg">
        <?php
        // Hämta sidan som innehåller innehållet, t.ex. "process"
        $page = get_page_by_path('konsultprocessen');  // Ändra slug till den sida som innehåller formuläret
        if ($page) :
            // Kolla om sidan har en thumbnail
            if (has_post_thumbnail($page->ID)) :
                ?>
                <div class="thumbnail">
                    <?php echo get_the_post_thumbnail($page->ID, 'full'); ?> <!-- Skriv ut thumbnail-bilden -->
                </div>
                <?php
            endif; ?>
            </div>
            <div class="processText" id="processText">
                <?php
            // Skriver ut innehållet från den sidan (inklusive formuläret)
            echo apply_filters('the_content', $page->post_content);
        endif;
        ?>
    </div>
</section>
</div>

<div class="curved under">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 270">
            <path fill="#f6e8e4" fill-opacity="1"
                d="M0,192L15,176C30,160,60,128,90,101.3C120,75,150,53,180,80C210,107,240,181,270,202.7C300,224,330,192,360,170.7C390,149,420,139,450,128C480,117,510,107,540,122.7C570,139,600,181,630,202.7C660,224,690,224,720,192C750,160,780,96,810,112C840,128,870,224,900,256C930,288,960,256,990,213.3C1020,171,1050,117,1080,112C1110,107,1140,149,1170,186.7C1200,224,1230,256,1260,266.7C1290,277,1320,267,1350,250.7C1380,235,1410,213,1425,202.7L1440,192L1440,0L1425,0C1410,0,1380,0,1350,0C1320,0,1290,0,1260,0C1230,0,1200,0,1170,0C1140,0,1110,0,1080,0C1050,0,1020,0,990,0C960,0,930,0,900,0C870,0,840,0,810,0C780,0,750,0,720,0C690,0,660,0,630,0C600,0,570,0,540,0C510,0,480,0,450,0C420,0,390,0,360,0C330,0,300,0,270,0C240,0,210,0,180,0C150,0,120,0,90,0C60,0,30,0,15,0L0,0Z">
            </path>
        </svg>
    </div>

<section class="web-consultation">
    <?php
    // Hämta sidan som innehåller innehållet, t.ex. "process"
    $page = get_page_by_path('konsultation-konsulttimmar');  // Ändra slug till den sida som innehåller formuläret
    if ($page) :
    ?>
        <div class="processText" id="processText">
            <?php
            // Skriver ut innehållet från den sidan (inklusive formuläret)
            echo apply_filters('the_content', $page->post_content);
            ?>
        </div>
    <?php endif; ?>
</section>

<svg id="blob3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 420">
        <path fill="#EAD6D0" fill-opacity="1"
            d="M0,64L20,69.3C40,75,80,85,120,112C160,139,200,181,240,181.3C280,181,320,139,360,149.3C400,160,440,224,480,213.3C520,203,560,117,600,117.3C640,117,680,203,720,245.3C760,288,800,288,840,245.3C880,203,920,117,960,122.7C1000,128,1040,224,1080,266.7C1120,309,1160,299,1200,266.7C1240,235,1280,181,1320,149.3C1360,117,1400,107,1420,101.3L1440,96L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z">
        </path>
    </svg>

    <section class="other-services">
    <?php
    // Hämta sidan som innehåller innehållet, t.ex. "process"
    $page = get_page_by_path('ovriga-tjanster');  // Ändra slug till den sida som innehåller formuläret
    if ($page) :
    ?>
        <div class="ovrigText" id="ovrigText">
            <?php
            // Skriver ut innehållet från den sidan (inklusive formuläret)
            echo apply_filters('the_content', $page->post_content);
            ?>
        </div>
    <?php endif; ?>

    
    <!--VÅRA TJÄNSTER-->
    <div class="gridContainer">
        <?php
        // Slugs för sidorna i önskad ordning
        $slugs = array('hemsida', 'tillganglighetsanpassning', 'webbanalys');

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
        foreach ($pages as $post) :
            setup_postdata($post);
            ?>
            <section class="workExperience">
                <article class="project workItem">
                    <div class="projectDescription">
                        <h4><?php the_title(); ?></h4>
                        <?php
                            $excerpt = get_post_meta(get_the_ID(), 'excerpt', true);
                            if ($excerpt) {
                                echo '<p class="custom-excerpt">' . esc_html($excerpt) . '</p>';
                            } ?>
                        <a href="<?php the_permalink(); ?>" class="button"><?php the_title(); ?> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </article>
            </section>
        <?php endforeach; wp_reset_postdata(); ?>
    </div>
</section>




    <p class="bottomSection"></p>

</main>



<!-- Include footer -->
<?php
get_footer();
?>