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
        <div class="w-full md:w-1/3">
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
        <div class="max-w-screen-xl mx-auto">
            <div class="flex">
                <div class="w-full md:w-1/2">
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

                                <a href="#" class=" mt-5 w-full sm:w-auto inline-flex justify-start items-center text-center bg-theme-navy hover:bg-slate-700 border border-transparent text-base md:text-lg text-white font-medium focus:ring-2 focus:ring-blue-600   transition py-3 px-5 tracking-wideflex-col">Submit </a>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 flex justify-start items-start">
                    <div class="centered mt-10">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/mindsetlogo--dark.png" alt="" class="h-24 w-full object-contain object-left-top lg:w-full lg:h-32 rounded-none hidden lg:block">
                        <div class="contactInfo ml-10 mt-10 space-y-5">
                            <div class="email flex space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                    <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                                </svg>
                                <a href="mailto:contact@mindsetstrategic.com">contact@mindsetstrategic.com</a>
                            </div>
                            <div class="phone flex space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                                </svg>
                                <a href="tel:+230 5 701 5649">+230 5 701 5649</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="disclaimer text-center space-y-4">
                <p class="font-semibold text-xl">Important Notice</p>
                <p>MINDSET STRATEGIC SERVICES is a consultancy firm referred to as "MINDSET" and is the brand name of MINDSET 360 Ltée.</p>
                <p>MINDSET has made every effort to ensure that the information provided in this document is accurate and up-to-date as of the date of publication. However, they do not guarantee the accuracy, completeness, or timeliness of the information contained herein. MINDSET will not be held liable for any damages arising from the use or reliance upon the information provided in this document.</p>
                <p>This document has been published for information purposes only. It does not constitute legal, financial, or professional advice, nor should it be construed as such. If you require a detailed description of the services offered, please contact MINDSET directly on <strong>+230 5 701 5649</strong> or <strong>contact@mindsetstrategic.com</strong>.</p>
                <p>MINDSET is <strong>not</strong> regulated by the Financial Services Commission(FSC) or the Bank of Mauritius(BOM) to provide and does not provide any type of financial advice, services or investment solutions. Additionally, MINDSET is not an offshore management company (OMC), insurance company, or estate agent.</p>
                <p>MINDSET, acting as a facilitator, especially for the "Live & Work in Mauritius" service connects clients with a comprehensive network of regulated service providers (referred to as partner agencies or third party agencies) in Mauritius.</p>
                <p>We work diligently to ensure our clients receive high-quality services through our partner agencies, which include reputable banks, offshore management companies, property sellers, real estate agents, and more. However, it is important to note that while MINDSET facilitates these connections, we do not provide the services directly. The contracts for services rendered are entered into directly between the client and the respective service provider.</p>
                <p>As a facilitator, MINDSET aims to simplify the process for individuals looking to work, invest, or live in Mauritius. We act as a one-stop shop, eliminating the need for clients to search for various service providers. By leveraging our extensive network, we guide clients in selecting the best-suited partners to meet their specific needs. Our expertise lies in connecting clients with regulated and trusted professionals, enabling a seamless experience.</p>
                <p>While MINDSET works diligently to ensure the quality of our partner agencies, we do not assume any liability for the services provided by these third-party entities. Clients are advised to conduct their own due diligence and review the terms and conditions of the service providers they engage with. MINDSET shall not be held responsible for any disputes, losses, or damages arising from the services provided by our partner agencies.
                </p>
                <p>Please note that engaging with MINDSET's facilitation services does not create an attorney-client relationship or any fiduciary duty. Our role is solely that of a facilitator, and clients are encouraged to seek independent legal and financial advice when entering into contracts or making important decisions.</p>
                <p>By engaging with MINDSET, clients acknowledge and accept the limitations of our facilitation services and the direct relationship they will have with the chosen service providers.</p>
                <p>Some of the services offered by MINDSET may be provided through partner agencies. These partner agencies may charge additional fees for their services, which are not included in the fees charged by MINDSET. MINDSET will not be held liable for any fees or costs incurred as a result of using the services of these partner agencies. Where the need arises for third party agencies to be involved, MINDSET will clearly state so to the client, at which point the client can choose to agree with MINDSET’s recommendations or choose their own third party agency. Clients are encouraged to do their own due diligence and research before engaging the services of any third-party agencies or professionals.</p>
            </div>

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