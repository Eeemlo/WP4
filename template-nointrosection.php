<!--Startfilen i WP-temat/backupfil
Bör endast innehålla en oförändrad "the loop"-->

<!-- Include header -->
<?php 

/*
Template name: undersida standard
*/
get_header();

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
                    <img src="<?= get_template_directory_uri();?>/images/blob.svg" alt="blob" id="blob">
                    <img class="emmafarg" src="<?= header_image(); ?>"> <!-- height="<?= get_custom_header()->height ?>" width="<?= get_custom_header()->width ?>">-->
                </div>
            </div>
        </section>

<section class="projectSection">
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
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
        <p><a href="<?php the_permalink(); ?>">Läs mer...</a></p>
    </article>

    </section>
</main>

<!-- Include footer -->
<?php
get_footer();
?>