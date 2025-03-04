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
            d="M0,224L20,202.7C40,181,80,139,120,122.7C160,107,200,117,240,144C280,171,320,213,360,213.3C400,213,440,171,480,165.3C520,160,560,192,600,197.3C640,203,680,181,720,149.3C760,117,800,75,840,96C880,117,920,203,960,213.3C1000,224,1040,160,1080,138.7C1120,117,1160,139,1200,128C1240,117,1280,75,1320,85.3C1360,96,1400,160,1420,192L1440,224L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z">
        </path>
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

    <section class="essential-web">
    <h2>Grundpaket hemsida</h2>
    <div class="essential-content">
        <?php
        // Hämta sidan som innehåller innehållet, t.ex. "grundpaket-webb"
        $page = get_page_by_path('grundpaket-hemsida');  // Ändra slug till den sida som innehåller formuläret
        
        // Kontrollera att sidan verkligen hittades och att det är ett objekt
        if ($page && is_object($page)): ?>
            <article class="service-item">
                    <p><?php echo apply_filters('the_content', get_post_field('post_content', $page->ID)); ?></p>
                    <a href="<?php echo get_permalink($page); ?>" class="button">Boka konsultation <i class="fa-solid fa-arrow-right"></i></a>
            </article>
        <?php else: ?>
            <p>Sidan som du söker finns inte eller har inte publicerats än.</p>
        <?php endif; ?>
    </div>
</section>




    <!--WEBBPAKET LONG-->
    <section class="web-packages-long">
        <h2>Tilläggspaket hemsida</h2>
        <div class="flexContainer">
            <?php
            // Slugs för sidorna i önskad ordning
            $slugs = array('marknadsforing', 'utoka', 'custom-design' );

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
                        <h3><?php the_title(); ?></h3>
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
            d="M0,128L30,149.3C60,171,120,213,180,213.3C240,213,300,171,360,165.3C420,160,480,192,540,202.7C600,213,660,203,720,186.7C780,171,840,149,900,160C960,171,1020,213,1080,208C1140,203,1200,149,1260,128C1320,107,1380,117,1410,122.7L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
            </path>
        </svg>
    </div>

    <div class="processBg">
        <section class="processSection">
            <div class="processImg">
                <?php
                // Hämta sidan som innehåller innehållet, t.ex. "process"
                $page = get_page_by_path('hemsida-process');  // Ändra slug till den sida som innehåller formuläret
                if ($page):
                    // Kolla om sidan har en thumbnail
                    if (has_post_thumbnail($page->ID)):
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
            d="M0,128L30,117.3C60,107,120,85,180,101.3C240,117,300,171,360,165.3C420,160,480,96,540,106.7C600,117,660,203,720,213.3C780,224,840,160,900,149.3C960,139,1020,181,1080,208C1140,235,1200,245,1260,234.7C1320,224,1380,192,1410,176L1440,160L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
            </path>
        </svg>
    </div>

    <section class="web-consultation">
        <?php
        // Hämta sidan som innehåller innehållet, t.ex. "process"
        $page = get_page_by_path('boka-konsultation');  // Ändra slug till den sida som innehåller formuläret
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

    <svg id="blob3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 420">
        <path fill="#EAD6D0" fill-opacity="1"
        d="M0,128L30,160C60,192,120,256,180,250.7C240,245,300,171,360,154.7C420,139,480,181,540,197.3C600,213,660,203,720,192C780,181,840,171,900,176C960,181,1020,203,1080,186.7C1140,171,1200,117,1260,122.7C1320,128,1380,192,1410,224L1440,256L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
        </path>
    </svg>

    <section class="other-services">
        <?php
        // Hämta sidan som innehåller innehållet, t.ex. "process"
        $page = get_page_by_path('ovriga-tjanster');  // Ändra slug till den sida som innehåller formuläret
        if ($page):
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
            $slugs = array('tillganglighetsanpassning', 'webbanalys', 'konsulttimmar');

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
                            <h4><?php the_title(); ?></h4>
                            <?php
                            $excerpt = get_post_meta(get_the_ID(), 'excerpt', true);
                            if ($excerpt) {
                                echo '<p class="custom-excerpt">' . esc_html($excerpt) . '</p>';
                            } ?>
                            <a href="<?php the_permalink(); ?>" class="button"><?php the_title(); ?> <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </article>
                </section>
            <?php endforeach;
            wp_reset_postdata(); ?>
        </div>
    </section>




    <p class="bottomSection"></p>

</main>



<!-- Include footer -->
<?php
get_footer();
?>