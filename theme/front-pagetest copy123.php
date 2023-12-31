<?php get_header(); ?>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>
<section id="hero" class="relative py-10 md:py-20 flex items-center justify-center h-[70vh] bg-no-repeat bg-cover text-center" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/human.jpg) ;">
    <div class="centrally py-8 px-5 bg-slate-800 bg-opacity-50 max-w-3xl">
        <h2 class="block font-bold text-white text-3xl md:text-[2.5rem] leading-[1.2] text-center">SUPPORT - PARTNERSIP - GROWTH</h2>
        <p class="text-xl mt-5 text-white">We help you put your customers at the center of your leadership, strategy, and operation.</p>
        <h2 class="text-2xl mt-5 font-black text-white">ARE WE THE RIGHT FIT FOR YOU ?</h2>
        <p class="text-white mb-5">Would you like to arrange a meeting to talk to us about your situation and objectives? During a 30-minute no commitment interview, we will study your particular needs and the best way to achieve the results you are pursuing.</p>
        <a href="#contactUs" class=" w-full sm:w-auto inline-flex justify-center items-center text-center bg-white hover:bg-theme-navy border border-transparent text-base md:text-lg text-theme-navy hover:text-white font-medium focus:ring-2 focus:ring-blue-600   transition py-3 px-5 tracking-wideflex-col">Contact Us </a>
    </div>

    <div class="hidden absolute bottom-0 bg-slate-700 p-5 w-full bg-opacity-50" style="background-color: ;">
        <div class="text-white max-w-2xl mx-auto">

            <p class="text-white mb-5">Would you like to arrange a meeting to talk to us about your situation and objectives? During a 30-minute no commitment interview, we will study your particular needs and the best way to achieve the results you are pursuing.</p>

            <a href="#" class="w-full sm:w-auto inline-flex justify-center items-center text-center bg-theme-navy hover:bg-bg-theme-royal border border-transparent text-base md:text-lg text-white font-medium focus:ring-2 focus:ring-blue-600   transition py-3 px-5 tracking-wideflex-col">Contact Us </a>

        </div>
    </div>
</section>

<section id="aboutUs" class="relative bg-theme-navy overflow-hidden pt-10 md:pt-0 flex-col-reverse flex">
    <div class="container mx-auto flex">
        <div class="relative z-10 bg-theme-blue w-full lg:w-1/2">
            <div class="py-12 lg:py-16 max-w-xl mx-auto pl-0 lg:pl-10" data-gtm-vis-recent-on-screen-32410801_439="305" data-gtm-vis-first-on-screen-32410801_439="305" data-gtm-vis-total-visible-time-32410801_439="5000" data-gtm-vis-has-fired-32410801_439="1">
                <div class="sm:text-center lg:text-left">
                    <div class="relative">
                        <h2 class="block font-bold text-slate-50 text-3xl md:text-[2.35rem] leading-[1.2] mb-4">WE HELP CLIENTS MAKE FASTER, SMARTER DECISIONS.</h2>
                        <div class="mb-8 space-y-4 text-white">
                            <p>At MINDSET, we stand as a top-tier management consulting firm, specialising in providing strategic, integrated business solutions across diverse industries. Our meticulously designed services are tailor-made to fit the unique requirements of each client, enabling business growth and paving the way to success.</p>
                            <p>Leveraging our extensive expertise in the field, we empower organisations to reach their full potential through tailor-made strategies and innovative solutions. Recognised for our client-centric approach, we function as more than just a service provider; we act as a strategic toolbox, uniquely configured to meet your specific business needs.</p>
                            <p>Understanding that each company faces its own set of unique challenges and goals, we are committed to crafting personalised solutions. Our strategies are designed to help you overcome obstacles and drive your business forward, ensuring that success is not just an ambition but an attainable reality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-0 lg:w-1/2"></div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions.webp" alt="" class="h-56 w-full object-cover object-center-top sm:h-72 md:h-96 lg:w-full lg:h-full rounded-none hidden lg:block">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions.webp" alt="" class="h-56 w-full object-cover object-right-top sm:h-72 md:h-96 lg:w-full lg:h-full rounded-none block lg:hidden">
    </div>
</section>


<section id="growth" class="relative bg-white overflow-hidden pt-10 md:pt-0 flex-col-reverse flex">
    <div class="container mx-auto flex">

        <div class="w-0 lg:w-1/2"></div>
        <div class="relative z-10 bg-theme-blue w-full lg:w-1/2">
            <div class="py-12 lg:py-16 max-w-xl mx-auto pl-0 lg:pl-10">
                <div class="sm:text-center lg:text-left">
                    <div class="relative">
                        <div class="mb-8 space-y-4 text-slate-700">
                            <p>In today's dynamic business environment, the integration of various functions, along with digital transformation and the right human resources, is a strategic game-changer. MINDSET champions this holistic approach through our specialised services.</p>
                            <p>MINDSET is here to enhance your existing value proposition with solutions tailored to your unique needs. We add our expertise in various business domains, working closely with your team to provide a seamless, transparent, and accountable extension to your operations.</p>
                            <p>Our services are designed to integrate smoothly with your business, offering a comprehensive solution that fosters growth and success across all sectors.</p>
                            <p>We align objectives, streamline processes, and enhance strategies, leveraging digital transformation to unlock your business's full potential</p>
                            <p>With MINDSET, you acquire a strategic partner committed to fostering collaboration, driving innovation, and propelling your organisation towards unified success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:left-0 lg:w-1/2">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/growth.webp" alt="" class="h-56 w-full object-cover object-center-top sm:h-72 md:h-96 lg:w-full lg:h-full rounded-none hidden lg:block">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/growth.webp" alt="" class="h-56 w-full object-cover object-right-top sm:h-72 md:h-96 lg:w-full lg:h-full rounded-none block lg:hidden">
    </div>
</section>

<section id="adaptFuture" class="relative bg-theme-navy overflow-hidden pt-10 md:pt-0">
    <div class="container mx-auto flex">
        <div class="relative z-10 bg-theme-blue w-full lg:w-1/2">
            <div class="py-12 lg:py-16 max-w-xl mx-auto pl-0 lg:pl-10">
                <div class="sm:text-center lg:text-left">
                    <div class="relative">
                        <h2 class="block font-bold text-slate-50 text-3xl md:text-[2.35rem] leading-[1.2] mb-4">ADAPT TO THE FUTURE</h2>
                        <div class="mb-8 space-y-4 text-white">
                            <p>Embracing digital strategies is no longer optional; it's a vital path to accelerate growth and maintain competitive edge.</p>
                            <p>Modern customers demand unique, seamless experiences. Traditional sales and marketing techniques hold value, but digital transformation offers unparalleled opportunities. Utilizing tools like data analytics, automation, immersive content, and personalized messaging, digital strategies enable businesses to connect with audiences more effectively and efficiently.</p>
                            <p>At MINDSET, we specialise in pinpointing opportunities for digital growth tailored to your industry. We craft custom strategies, seamlessly aligned with your business goals, to elevate sales and marketing to new heights</p>
                            <p>Leveraging extensive expertise in digital trends and cutting-edge technologies, we confidently guide you through the complex digital landscape. Trust MINDSET as your partner in digital transformation, and together, we'll forge a pathway to continued success and innovation in your market.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-0 lg:w-1/2"></div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/vision.webp" alt="" class="h-56 w-full object-cover object-center-top sm:h-72 md:h-96 lg:w-full lg:h-full rounded-none hidden lg:block">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/vision.webp" alt="" class="h-56 w-full object-cover object-right-top sm:h-72 md:h-96 lg:w-full lg:h-full rounded-none block lg:hidden">
    </div>
</section>

<section class="py-12 md:py-16" id="solutions">
    <div class="container mx-auto text-center">
        <h2 class="block font-bold text-slate-800 text-3xl md:text-[2.35rem] leading-[1.2] mb-4">SELECTION OF SOLUTIONS</h2>
        <p>We Provide tailor-made strategies that enhance your value proposition, diriving growth and revenue in an era of conscious consumerism.</p>
        <p>Our flexible structure allows us to provide solutions completely tailoring the service to your clientele. With your brand at the forefront, our expertise ans services act as a complementary tool for revenue generation and business growth.</p>
    </div>
    <div class="container mx-auto mt-5">
        <div class="max-w-screen-lg mx-auto">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4 responsive-grid">

                <div class="relative bg-white p-4 shadow-md w-full h-64 bg-cover" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/card1.png) ;">
                    <div class="absolute w-full bottom-0 left-0 py-4 bg-slate-900 bg-opacity-75">
                        <h4 class="text-white text-xl text-center">Digital Transformation</h4>
                    </div>
                    <a href="<?php echo site_url() ?>/digital-transformation" class="absolute w-full h-full left-0 top-0"></a>
                </div>

                <div class="relative bg-white p-4 shadow-md w-full h-64 bg-cover" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/card2.webp) ;">
                    <div class="absolute w-full bottom-0 left-0 py-4 bg-slate-900 bg-opacity-75">
                        <h4 class="text-white text-xl text-center">Marketing</h4>
                    </div>
                    <a href="<?php echo site_url() ?>/marketing" class="absolute w-full h-full left-0 top-0"></a>
                </div>

                <div class="relative bg-white p-4 shadow-md w-full h-64 bg-cover" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/card3.png) ;">
                    <div class="absolute w-full bottom-0 left-0 py-4 bg-slate-900 bg-opacity-75">
                        <h4 class="text-white text-xl text-center">Sales</h4>
                    </div>
                    <a href="<?php echo site_url() ?>/sales" class="absolute w-full h-full left-0 top-0"></a>
                </div>

                <div class="relative bg-white p-4 shadow-md w-full h-64 bg-cover" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/card6.jpg) ;">
                    <div class="absolute w-full bottom-0 left-0 py-4 bg-slate-900 bg-opacity-75">
                        <h4 class="text-white text-xl text-center">Training</h4>
                    </div>
                    <a href="<?php echo site_url() ?>/training" class="absolute w-full h-full left-0 top-0"></a>
                </div>

            </div>

            <h4 class="block font-bold text-slate-800 text-2xl md:text-[2rem] leading-[1.2] mt-10 my-5 text-center">Other bespoke solutions</h4>

            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4 responsive-grid mt-5">

                <div class="relative bg-white p-4 shadow-md w-full h-64 bg-cover" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/card5.jpg) ;">
                    <div class="absolute w-full bottom-0 left-0 py-4 bg-slate-900 bg-opacity-75">
                        <h4 class="text-white text-xl text-center">Strategy</h4>
                    </div>
                    <a href="<?php echo site_url() ?>/strategy" class="absolute w-full h-full left-0 top-0"></a>
                </div>


                <div class="relative bg-white p-4 shadow-md w-full h-64 bg-cover" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/card4.jpg) ;">
                    <div class="absolute w-full bottom-0 left-0 py-4 bg-slate-900 bg-opacity-75">
                        <h4 class="text-white text-xl text-center">SME</h4>
                    </div>
                    <a href="<?php echo site_url() ?>/sme" class="absolute w-full h-full left-0 top-0"></a>
                </div>
                <div class="relative bg-white p-4 shadow-md w-full h-64 bg-cover" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/card7.webp) ;">
                    <div class="absolute w-full bottom-0 left-0 py-4 bg-slate-900 bg-opacity-75">
                        <h4 class="text-white text-xl text-center">Human Resources</h4>
                    </div>
                    <a href="<?php echo site_url() ?>/human-resources" class="absolute w-full h-full left-0 top-0"></a>
                </div>

                <div class="relative bg-white p-4 shadow-md w-full h-64 bg-cover" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/card8.jpg) ;">
                    <div class="absolute w-full bottom-0 left-0 py-4 bg-slate-900 bg-opacity-75">
                        <h4 class="text-white text-xl text-center">Live and work in Mauritius</h4>
                    </div>
                    <a href="<?php echo site_url() ?>/live-and-work-in-mauritius" class="absolute w-full h-full left-0 top-0"></a>
                </div>

            </div>
        </div>


    </div>
</section>

<section class="py-12 md:py-16 bg-gray-50" id="news">
    <div class="">
        <div class="md:flex  items-center">
            <div class="text-white container mx-auto text-center">
                <h2 class="block font-bold text-slate-800 text-3xl md:text-[2.35rem] leading-[1.2] mb-4">NEWS</h2>

                <div class="max-w-screen-lg mx-auto flex flex-col md:flex-row space-y-4 space-x-0 md:space-x-4 md:space-y-0">

                    <?php
                    $the_query = new WP_Query('posts_per_page=3'); ?>
                    <?php
                    while ($the_query->have_posts()) : $the_query->the_post();
                    ?>

                        <div class="w-full md:w-1/3 ">
                            <div class="newsBox relative">
                                <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                                <?php echo '<div class="img-box w-full  h-40 md:h-48" style="background: url(' . $url . ')"></div>'; ?>
                                <div class="text-box w-full bg-theme-navy py-4">
                                    <h4 class="text-md"><?php the_title(); ?></h4>
                                </div>
                                <a href="<?php the_permalink() ?>" class="absolute h-full w-full bg-black bg-opacity-20 transition-all hover:bg-opacity-0 top-0 left-0"></a>
                            </div>
                        </div>

                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>


                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-12 md:py-16 bg-white" id="contactUs">
    <div class="">
        <div class="md:flex  items-center">
            <div class=" container mx-auto text-center">
                <h2 class="block font-bold text-slate-800 text-3xl md:text-[2.35rem] leading-[1.2] mb-4">Contact</h2>

                <div class="max-screen-w-lg mx-auto flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2 mx-auto">
                        <div class=" dark:bg-gray-900">
                            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                                <form action="#" class="space-y-8">
                                    <div class="flex flex-col  md:flex-row space-x-0 md:space-x-4 w-full">
                                        <div class="w-full">
                                            <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 text-left">First Name</label>
                                            <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-white rounded-sm border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light w-full" placeholder="First Name" required>
                                        </div>
                                        <div class="w-full">
                                            <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 text-left">Last Name</label>
                                            <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-white rounded-sm border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light w-full" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 text-left">Your email</label>
                                        <input type="email" id="email" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="email" required>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 text-left">Your message</label>
                                        <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-sm shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a message..."></textarea>
                                    </div>
                                    <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
                                </form>
                                <a href="#" class="w-full sm:w-auto inline-flex justify-start items-center text-center bg-theme-navy hover:bg-slate-700 border border-transparent text-base md:text-lg text-white font-medium focus:ring-2 focus:ring-blue-600   transition py-3 px-5 tracking-wideflex-col" style="float: left; margin-top: -2rem;">Submit </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php require 'footer.php'; ?>