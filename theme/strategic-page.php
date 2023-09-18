<?php
/* Template Name: Strategic Page */
/* Description: A custom template for the under construction page. */
get_header();
?>

<section class="strategicpage py-5 md:py-10">
    <div class="container mx-auto">
        <div class="max-w-4xl mx-auto">

            <?php

            /* Start the Loop */
            while (have_posts()) :
                the_post();

                get_template_part('template-parts/content/content', 'pagestrategic');

                // If comments are open, or we have at least one comment, load
                // the comment template.
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }

            endwhile; // End of the loop.
            ?>

        </div>
    </div>
</section>

<?php require 'footer.php'; ?>