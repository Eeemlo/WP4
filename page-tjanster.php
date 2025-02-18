
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
            d="M0,64L20,64C40,64,80,64,120,96C160,128,200,192,240,202.7C280,213,320,171,360,176C400,181,440,235,480,218.7C520,203,560,117,600,80C640,43,680,53,720,96C760,139,800,213,840,224C880,235,920,181,960,133.3C1000,85,1040,43,1080,58.7C1120,75,1160,149,1200,176C1240,203,1280,181,1320,154.7C1360,128,1400,96,1420,80L1440,64L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z">
        </path>
    </svg>
</div>

<main>

    <!--First section-->
    <section class="flexSection">
        <!--Left container-->
        <div class="textContainer">
            <?php
            /* Hämtar posts från WP och förbereder dem för utskrift */
            if (have_posts()) {
                while (have_posts()) {
                    the_post();

                    ?>
                    <!-- Skriver ut innehållet för tjänster i WP -->

                    <?php the_content(); ?>
                    <?php
                }
            }
            ?>
        </div>
    </section>
   

    <!--VÅRA TJÄNSTER-->
    <section class="services servicepage">
        <h2>Tjänsteutbud</h2>
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
        foreach ($pages as $post) :
            setup_postdata($post);
            ?>
            <section class="workExperience">
                <article class="project workItem">
                    <div class="projectDescription">
                        <h4><?php the_title(); ?></h4>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="yellowLink"><?php the_title(); ?> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </article>
            </section>
        <?php endforeach; wp_reset_postdata(); ?>
    </div>
    </section>

    <p class="bottomSection">.</p>
</main>

<!-- Include footer -->
<?php
get_footer();
?>