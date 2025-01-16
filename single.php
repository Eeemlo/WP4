<!--Sida för enskilda nyheter-->

<!-- Include header -->
<?php get_header();

//Ta bort efter utveckling är klar!!!
echo basename($_SERVER['PHP_SELF']);

?>

<main>

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
        <?php the_content(); ?>
    </article>

    </section>
</main>

<!-- Include footer -->
<?php
get_footer();
?>