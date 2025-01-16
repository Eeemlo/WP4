<!--Hämtas av WP för förstasidan-->

<!-- Include header -->
<?php get_header();

//Ta bort efter utveckling är klar!!!
echo basename($_SERVER['PHP_SELF']);

?>

<main>

    <!--First section KANSKE MÅSTE GÖRA DYNAMISKT SEDAN?-->
    <section class="introSection">
        
        <!--Left container-->
        <div class="introText">
            <p class="accentText">Digital marknadsföring för det lilla företaget</p>
            <h1>Din personliga marknadsförings&shy;byrå</h1>
            <p>Vi är en liten byrå med stora idéer. Hos oss får du en engagerad partner som verkligen lyssnar och
                bryr sig om din verksamhet. Vare sig du behöver hjälp med sociala medier, annonsering eller
                innehållsskapande, så ser vi till att varje insats gör skillnad.
            </p>
            <strong>Här möts kreativitet och strategi – alltid med dig i fokus.</strong>
        </div>

        <!--Right container-->
        <div class="imageContainer">
            <div class="imgBackground">
                <img src="<?= get_template_directory_uri(); ?>/images/blob.svg" alt="blob" id="blob">
                <img class="emmafarg" src="<?= header_image(); ?>">
                <!-- height="<?= get_custom_header()->height ?>" width="<?= get_custom_header()->width ?>">-->
            </div>
        </div>
    </section>

<!--NYHETER PÅ STARTSIDA-->
    <section class="projectSection">
        <h2>Nyheter</h2>
        <?php
        query_posts('category_name=news&posts_per_page=3');


        /* Hämtar posts från WP och förbereder dem för utskrift */
        if (have_posts()) {
            while (have_posts()) {
                the_post();

                ?>
                <!-- Skriver ut avkortade posts från WP enligt inställning -->
                
                <a href="<?php the_permalink(); ?>">
                <article>
                    <div>
                    <h3><?php the_title(); ?></h3>
                    <p class="pSmall"><?php the_date(); ?></p>
                    <?php the_excerpt(); ?>
                    </div>
                <span>
                <?php 
                if(has_post_thumbnail()) {
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

<button class="yellowBtn" onclick='window.location.href="http://localhost/WP4/nyheter/"'>Alla nyheter<i class="fa-solid fa-arrow-right"></i></button>
    </section>

    <p class="bottomSection">.</p>
</main>

<!-- Include footer -->
<?php
get_footer();
?>