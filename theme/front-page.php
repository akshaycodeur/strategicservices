<?php get_header(); ?>

<section id="hero" class="relative py-10 md:py-20 flex items-center justify-center h-[70vh] bg-no-repeat bg-cover text-center" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/slide1.png) ;">
    <div class="centrally p-5">
        <h2 class="block font-bold text-white text-3xl md:text-[2.5rem] leading-[1.2] text-center">SUPPORT - PARTNERSIP - GROWTH</h2>
        <p class="text-xl font-bold text-white">We help you put your customers at the center of your leadership, strategy, and operation.</p>
    </div>

    <div class="absolute bottom-0 bg-slate-700 p-5 w-full bg-opacity-50" style="background-color: ;">
        <div class="text-white max-w-2xl mx-auto">
            <h2 class="text-2xl mb-5">ARE WE THE RIGHT FIT FOR YOU ?</h2>
            <p class="text-white mb-5">Would you like to arrange a meeting to talk to us about your situation and objectives? During a 30-minute no commitment interview, we will study your particular needs and the best way to achieve the results you are pursuing.</p>

            <a href="#" target="_blank" class="w-full sm:w-auto inline-flex justify-center items-center text-center bg-theme-navy hover:bg-bg-theme-royal border border-transparent text-base md:text-lg text-white font-medium focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-5 tracking-wideflex-col">Contact Us </a>

        </div>
    </div>
</section>

<section id="aboutUs" class="relative bg-theme-navy overflow-hidden pt-10 md:pt-0">
    <div class="lg:absolute lg:inset-y-0 lg:left-0 lg:w-1/2">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions.webp" alt="Jeff Walker" class="h-56 w-full object-cover object-center-top sm:h-72 md:h-96 lg:w-full lg:h-full rounded-none hidden lg:block">
        <img src="../../assets/img//assets/img/solutions.webp" alt="Jeff Walker" class="h-56 w-full object-cover object-right-top sm:h-72 md:h-96 lg:w-full lg:h-full rounded-none block lg:hidden">
    </div>
    <div class="container mx-auto flex">
        <div class="w-full w-0 lg:w-1/2"></div>
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
    </div>

</section>

<?php require 'footer.php'; ?>