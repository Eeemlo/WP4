<!--Generisk page-sida som backup-->

<!-- Include header -->
<?php get_header();?>

<main>

<section class="projectSection">
    <?php
    /* Hämtar posts från WP och förbereder dem för utskrift */
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
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