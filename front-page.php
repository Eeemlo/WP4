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

        <button class="yellowBtn" onclick='window.location.href="http://localhost/WP4/nyheter/"'>Alla nyheter<i
                class="fa-solid fa-arrow-right"></i></button>
    </section>


    <section class="contactSection">
        <div class="contactText" id="contactText">
            <h2 id="contactsHeading">Let's Talk!</h2>
            <p>Vi älskar att ta oss an nya utmaningar och samarbeta med företag som vill växa. Hör av dig så pratar
                vi om hur vi kan bidra till att förverkliga dina idéer och nå dina mål. Vi ser fram emot att höra
                från dig!</p>
            <h4>E-post</h4>
            <p class="pSmall"><a href="mailto:info@sparkmarketing.com">emma.lorensson@outlook.com</a></p>
            <h4>Telefon</h4>
            <p class="pSmall">073-033 00 00</p>
            <div class="socials">
                <a href="https://www.linkedin.com/in/emma-lorensson-b8b21584/"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://www.facebook.com/emmalorensson"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/ememlo/"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
        <div class="formContainer">
            <form id="contactForm">
                <label for="name">Namn</label>
                <input type="text" name="name" id="name">
                <label for="email">E-post</label>
                <input type="text" name="email" id="email">
                <label for="company">Företag</label>
                <input type="text" name="company" id="company">
                <label for="message">Meddelande</label>
                <textarea name="message" id="message"></textarea>
                <input type="submit" value="Skicka">
            </form>
        </div>

    </section>
</main>

<p class="bottomSection">.</p>
</main>

<!-- Include footer -->
<?php
get_footer();
?>