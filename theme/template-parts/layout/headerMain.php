<nav class=" bg-theme-navy p-6 py-3 sticky top-0 relative z-50">
    <div class="container mx-auto flex items-center justify-between flex-wrap">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <a href="/">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mindsetlogo--white.png" alt="" class="max-h-10 w-auto rounded-none flex place-self-center mx-auto">
            </a>
        </div>
        <div class="block md:hidden">
            <button class="flex items-center px-1 py-1 border rounded-sm text-white border-white hover:text-white hover:border-white" id="mobileButton">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>
            </button>
        </div>
        <div class="w-full block flex-grow hidden md:flex lg:items-center lg:w-auto justify-end" id="mobileNav">
            <div class="dropdown relative">
                <div class="inline-block text-sm px-4 py-2 leading-none text-white border-b-2 border-theme-navy hover:border-slate-100 mt-4 lg:mt-0">About Us</div>
                <div class="dropdown-items flex flex-col bg-white relative md:absolute min-w-max hidden">
                    <a href="<?php echo site_url() ?>#mission-vision" class="inline-block text-sm px-4 py-2 leading-none text-theme-navy border-b-2 border-theme-navy hover:border-slate-100 mt-4 lg:mt-0">Mission | Vision | Values</a>
                    <a href="<?php echo site_url() ?>#mission-vision" class="inline-block text-sm px-4 py-2 leading-none text-theme-navy border-b-2 border-theme-navy hover:border-slate-100 mt-4 lg:mt-0">Pillar of Growth</a>
                </div>
            </div>
            <div>
                <a href="<?php echo site_url() ?>#solutions" class="inline-block text-sm px-4 py-2 leading-none text-white border-b-2 border-theme-navy hover:border-slate-100 mt-4 lg:mt-0">Solutions</a>
            </div>
            <div>
                <a href="<?php echo site_url() ?>#ourProcess" class="inline-block text-sm px-4 py-2 leading-none text-white border-b-2 border-theme-navy hover:border-slate-100 mt-4 lg:mt-0">Our Process</a>
            </div>
            <div>
                <a href="<?php echo site_url() ?>#news" class="inline-block text-sm px-4 py-2 leading-none text-white border-b-2 border-theme-navy hover:border-slate-100 mt-4 lg:mt-0">News</a>
            </div>
            <div>
                <a href="<?php echo site_url() ?>#careers" class="inline-block text-sm px-4 py-2 leading-none text-white border-b-2 border-theme-navy hover:border-slate-100 mt-4 lg:mt-0">Careers</a>
            </div>
            <div>
                <a href="<?php echo site_url() ?>#contactUs" class="inline-block text-sm px-4 py-2 leading-none text-white border-b-2 border-theme-navy hover:border-slate-100 mt-4 lg:mt-0">Contact</a>
            </div>
        </div>
    </div>
</nav>