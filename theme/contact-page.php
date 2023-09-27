<?php
/* Template Name: Contact Page */
/* Description: A custom template for the Contact Page. */
get_header();
?>

<section id="" class="hero py-5 md:py-10 bg-cover bg-center" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/contactbg.webp) ;">
    <div class="max-w-screen-xl mx-auto px-4">
        <h1 class="text-4xl text-white">
            Contact
        </h1>
        <div class="w-full md:w-1/2">
            <p class="text-white mt-5">
                Is Our Partnership the Ideal Solution for Your Needs?
                Understanding your unique situation and objectives is paramount to us. We invite you to schedule a personalised 30-minute consultation with our team. During this focused discussion, we will meticulously analyse your specific needs and strategize the most effective pathway to achieve the results you desire.
                Please contact us at your earliest convenience to explore how our expertise aligns with your goals. We look forward to the opportunity to collaborate with you.
            </p>
            <p class="text-xl font-semibold text-white mt-5">We look forward to helping you grow your business.</p>
        </div>
    </div>
</section>
<section class="contactPage py-5 md:py-10">
    <div class="container mx-auto">
        <div class="max-w-4xl mx-auto">

            <?php

            /* Start the Loop */
            while (have_posts()) :
                the_post();
            endwhile; // End of the loop.
            ?>

        </div>
    </div>
</section>

<?php require 'footer.php'; ?>