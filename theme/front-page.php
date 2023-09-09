<?php get_header(); ?>

<section id="hero" class="py-10 md:py-20 flex items-center justify-center h-screen bg-no-repeat bg-cover text-center" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/slide1.png) ;">
    <div class="centrally p-5 bg-slate-500  ">
        <h2 class="block font-bold text-gray-800 text-3xl md:text-[2.5rem] leading-[1.2] text-center">Welcome to my site</h2>
        <p>This is my motto</p>

    </div>
</section>

<section id="aboutUs" class="py-10">
    <h2 class="block font-bold text-gray-800 text-3xl md:text-[2.35rem] leading-[1.2] mb-10 text-center">About Us</h2>

    <div class="container mx-auto max-w-4xl flex flex-col md:flex md:flex-row gap-0 md:gap-4">
        <div class="w-full md:w-1/2 flex justify-center">
            <img src="../assets/img/jeff-standing.png" alt="" class="hidden md:block object-cover">
            <img src="../assets/img/jeff-standing-mobile.png" alt="" class="block md:hidden mb-4 md:mb-0 object-cover">
        </div>
        <div class="w-full md:w-1/2">

            <p>"Yes," I said. "Charcot has proved that pretty well." He smiled as he went on: "Then you are satisfied as to it. Yes? And of course then you understand how it act, and can follow the mind of the great Charcot--alas that he is no more!--into the very soul of the patient that he influence. No? Then, friend John, am I to take it that you simply accept fact, and are satisfied to let from premise to conclusion be a blank? No? Then tell me--for I am student of the brain--how you accept the hypnotism and reject the thought reading. Let me tell you, my friend, that there are things done to-day in electrical science which would have been deemed unholy by the very men who discovered electricity</p>
            <p>"That is good image," he said. "Well, I shall tell you. My thesis is this: I want you to believe."</p>

            <p>"To believe what?"</p>
        </div>

    </div>

</section>

<?php require 'footer.php'; ?>