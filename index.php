<!--Startfilen i WP-temat/backupfil
Bör endast innehålla en oförändrad "the loop"-->

<!-- Include header -->
<?php get_header(); ?>

<!-- Hämtar posts från WP och förbereder dem för utskrift -->
    <?php
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


<!-- Include footer -->
    <?php 
    get_sidebar();
     get_footer(); 
     ?>  