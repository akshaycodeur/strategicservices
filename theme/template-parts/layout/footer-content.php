<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Strategic_services
 */

?>


<footer class="bg-theme-navy dark:bg-gray-900 text-white">
	<div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
		<div class="md:flex md:justify-between">
			<div class="mb-6 md:mb-0">
				<a href="#" class="flex flex-col items-start">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/mindsetlogo--white.png" alt="" class="max-h-12 w-auto block">
					<p class="block pt-3 pr-20">We help you put your customers at the center of your leadership, strategy, and operation.</p>
				</a>
			</div>
			<div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
				<div>
					<h2 class="mb-6 text-sm font-semibold text-gray-200 uppercase dark:text-white">Sitemap</h2>
					<ul class="text-gray-400 dark:text-gray-400 font-medium space-y-1">
						<li class="">
							<a href="<?php echo site_url() ?>" class="hover:underline">Home</a>
						</li>
						<li class="">
							<a href="<?php echo site_url() ?>/about" class="hover:underline">About</a>
						</li>
						<li class="">
							<a href="<?php echo site_url() ?>/solutions" class="hover:underline">Solutions</a>
						</li>
						<li class="">
							<a href="<?php echo site_url() ?>/news" class="hover:underline">News</a>
						</li>
						<li class="">
							<a href="<?php echo site_url() ?>/careers" class="hover:underline">Careers</a>
						</li>
						<li class="">
							<a href="<?php echo site_url() ?>/contact-us" class="hover:underline">Book a meeting</a>
						</li>
					</ul>
				</div>
				<div>
					<h2 class="mb-6 text-sm font-semibold text-gray-200 uppercase dark:text-white">Solutions</h2>
					<ul class="text-gray-400 dark:text-gray-400 font-medium">
						<li class="">
							<a href="<?php echo site_url() ?>/marketing" class="hover:underline ">Marketing</a>
						</li>
						<li class="">
							<a href="<?php echo site_url() ?>/sales" class="hover:underline">Sales</a>
						</li>
						<li class="">
							<a href="<?php echo site_url() ?>/digital-transformation" class="hover:underline">Digital Transformation</a>
						</li>
						<li class="">
							<a href="<?php echo site_url() ?>/sme" class="hover:underline">SME</a>
						</li>
						<li class="">
							<a href="<?php echo site_url() ?>/training" class="hover:underline">Training</a>
						</li>
						<li class="">
							<a href="<?php echo site_url() ?>/live-and-work-in-mauritius" class="hover:underline">Live & Work in Mauritius</a>
						</li>
						<li class="">
							<a href="<?php echo site_url() ?>/human-resources" class="hover:underline">Human Resources</a>
						</li>
					</ul>
				</div>
				<div>
					<h2 class="mb-6 text-sm font-semibold text-gray-200 uppercase dark:text-white">Useful Links</h2>
					<ul class="text-gray-400 dark:text-gray-400 font-medium">
						<li class="">
							<a href="<?php echo site_url() ?>/privacy-policy" class="hover:underline">Privacy Policy</a>
						</li>
						<li>
							<a href="<?php echo site_url() ?>/terms-and-conditions" class="hover:underline">Terms &amp; Conditions</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
		<div class="sm:flex sm:items-center sm:justify-between">
			<span class="text-sm text-gray-100 sm:text-center dark:text-gray-400">© 2023 MINDSET 360 LTEE | MINDSET STRATEGIC SERVICES| BRN / C23194866
			</span>
			<div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
				<a href="<?php echo site_url() ?>/live-and-work-in-mauritius" class="text-gray-100 hover:text-gray-900 dark:hover:text-white">
					<span class="">Mauritius</span>
				</a>
				<a href="<?php echo site_url() ?>/terms-and-conditions" class="text-gray-100 hover:text-gray-900 dark:hover:text-white">
					<span class="">Terms & Conditions</span>
				</a>
				<a href="<?php echo site_url() ?>/cookies-policy" class="text-gray-100 hover:text-gray-900 dark:hover:text-white">
					<span class="">Cookies Policy</span>
				</a>
				<a href="<?php echo site_url() ?>/privacy-policy" class="text-gray-100 hover:text-gray-900 dark:hover:text-white">
					<span class="">Privacy Policy</span>
				</a>
				<a href="<?php echo site_url() ?>/important-notice" class="text-gray-100 hover:text-gray-900 dark:hover:text-white">
					<span class="<?php echo site_url() ?>#solutions">Important Notice</span>
				</a>

			</div>
		</div>
	</div>
</footer>