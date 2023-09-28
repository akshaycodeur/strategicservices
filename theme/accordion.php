<?php
/* Template Name: Accordion Page */
/* Description: A custom template for the Contact Page. */
get_header();
?>

<section class="contactPage py-5 md:py-10">
    <div class="container mx-auto">
        <div class="max-w-screen-xl mx-auto">
            <div class="flex">
                <div class="w-full">
                    <p>As a forward-thinking organisation committed to innovation and excellence, we are
                        continuously re-evaluating our organisational structures and manpower needs to align with
                        our strategic objectives. This ongoing process of refinement and expansion invariably leads
                        to a career opportunity across various verticals. We are proud to be an Equal Opportunities
                        Employer, committed to fostering a diverse and inclusive work environment where every
                        individual is valued irrespective of their age, gender, ethnicity, sexual orientation, religion,
                        or disability. We welcome applications from candidates at different career stages—be it
                        interns, recent graduates, or seasoned professionals. Our doors are open to talent from
                        diverse disciplines including, but not limited to, Sales, Marketing, Human Resource
                        Management, Business Development, and Information Technology. All available vacancies
                        are diligently posted on our official website and actively promoted across our social media
                        platforms. For those who wish to proactively engage with us, we are pleased to accept
                        spontaneous applications. Please direct such inquiries to contact@mindsetstrategic.com.
                        We invite you to be a part of our journey towards shaping the future.</p>
                </div>

            </div>

            <div class="disclaimer text-center space-y-4">
                <!-- Item 1 -->
                <div class="border-b">
                    <button class="w-full text-left px-4 py-2 bg-gray-200 hover:bg-gray-300 focus:outline-none">
                        Business Development Officers (Commission-Based)
                    </button>
                    <div class="p-4 hidden"> <!-- Initially hidden -->
                        <!-- Content for Item 1 -->
                        <p class="font-semibold">Location: Worldwide</p>
                        <p>About Us:</p>
                        <p>As a pioneering organisation committed to shaping the future through innovation and
                            excellence, MINDSET Strategic Services offers a unique platform for career growth and
                            financial success. We are an Equal Opportunities Employer, fostering a diverse and inclusive
                            work environment. We invite you to be a part of our exciting journey.</p>
                        <p>Job Description:</p>
                        <p class="font-semibold">Role Summary:</p>
                        <p>We are seeking a highly motivated and experienced Business Development Officers to join
                            our dynamic team. This is a commission-based role, ideal for individuals who are confident
                            in their sales abilities and are looking to maximise their earning potential.</p>
                        <p class="font-semibold">Key Responsibilities:</p>
                        <ul class="list-disc disc-list">
                            <li>Identify and pursue new business opportunities to increase revenue.</li>
                            <li>Develop and maintain relationships with clients and stakeholders.</li>
                            <li>Conduct market research to identify trends and customer needs.</li>
                            <li>Prepare and deliver presentations to prospective clients.</li>
                            <li>Collaborate with internal teams to achieve sales targets.</li>
                            <li>Report on sales activities and forecast future trends.</li>
                        </ul>
                        <p class="font-semibold">Qualifications:</p>
                        <ul class="list-disc disc-list">
                            <li>Minimum of 1 year of experience in sales</li>
                            <li>Proven track record of meeting or exceeding sales targets</li>
                            <li>Strong communication and negotiation skills</li>
                            <li>Ability to work independently and as part of a team.</li>
                            <li>Proficiency in CRM software and Microsoft Office Suite</li>
                        </ul>
                        <p class="font-semibold">Compensation</p>
                        <p>This is a commission-based position, offering a competitive commission structure that
                            rewards performance. The sky is the limit for what you can earn.</p>
                        <p class="font-semibold">How to Apply:</p>
                        <p>Interested candidates are invited to send their resumes along with a cover letter to
                            contact@mindsetstrategic.com. All available vacancies are also posted on our official
                            website and social media platforms.</p>
                    </div>
                </div>

                <div>
                    <button class="w-full text-left px-4 py-2 bg-gray-200 hover:bg-gray-300 focus:outline-none">
                        Business Introducers
                    </button>
                    <div class="p-4 hidden"> <!-- Initially hidden -->
                        <!-- Content for Item 2 -->
                        <p>Location: Worldwide</p>
                        <p>Seize the opportunity to become a valued Business Introducer for MINDSET Strategic
                            Services, a pioneering organisation committed to shaping the future through innovation and
                            excellence. We offer an attractive, rolling commission structure that not only rewards you
                            for initial introductions but also provides a trail fee for as long as the client remains with the
                            company. This creates a sustainable and rewarding income stream, allowing you to benefit
                            from the long-term success of the relationships you help establish. As an Equal
                            Opportunities Employer, we are committed to fostering a diverse and inclusive
                            environment, and we invite individuals from all backgrounds to contribute to our network.
                            Your role is not just about financial gain; it&#39;s about becoming a strategic partner in our
                            journey towards industry leadership. Leverage your professional network to introduce new
                            business opportunities and enjoy the financial rewards that come with it, all while
                            contributing to a vision that is transforming the industry. Interested parties are encouraged
                            to reach out to <a href="mailto:contact@mindsetstrategic.com" class="font-semibold">contact@mindsetstrategic.com</a> for further details.</p>
                    </div>
                </div>

                <script>
                    // JavaScript to toggle accordion items
                    const buttons = document.querySelectorAll('.border-b button');

                    buttons.forEach((button) => {
                        button.addEventListener('click', () => {
                            const content = button.nextElementSibling;
                            content.classList.toggle('hidden');
                        });
                    });
                </script>

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