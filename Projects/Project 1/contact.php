<?php
$pageTitle = "Contact";
require_once "includes/header.php";
?>

<section class="py-10 px-4 sm:px-6 lg:px-10">
    <h2 class="text-slate-800 my-8 pb-2 font-bold text-2xl sm:text-3xl text-center">Contact Us</h2>

    <article class="w-full sm:w-10/12 lg:w-8/12 mx-auto my-6 px-6 sm:px-10 py-5 rounded-xl border-l-8 border-slate-800">
        <h3 class="text-emerald-500 text-xl font-bold my-3">Get in Touch</h3>
        <p class="mb-4">We'd love to hear from you. Please use the form below to send us a message.</p>

        <form action="contact-success.html" method="get" class="w-full">
            <div class="flex flex-col sm:flex-row sm:items-center my-4">
                <label class="text-slate-700 font-medium sm:w-1/3 mb-2 sm:mb-0" for="contact-name">Your Name:</label>
                <input class="border-2 border-zinc-400 rounded-md w-full sm:w-2/3 h-10" type="text" id="contact-name" name="contact-name" required>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center my-4">
                <label class="text-slate-700 font-medium sm:w-1/3 mb-2 sm:mb-0" for="contact-email">Your Email:</label>
                <input class="border-2 border-zinc-400 rounded-md w-full sm:w-2/3 h-10" type="email" id="contact-email" name="contact-email" required>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center my-4">
                <label class="text-slate-700 font-medium sm:w-1/3 mb-2 sm:mb-0" for="contact-subject">Subject:</label>
                <select class="border-2 border-zinc-400 rounded-md w-full sm:w-2/3 h-10" id="contact-subject" name="contact-subject" required>
                    <option value="">Select a subject</option>
                    <option value="general">General Inquiry</option>
                    <option value="course">Course Information</option>
                    <option value="technical">Technical Support</option>
                    <option value="billing">Billing Question</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-start my-4">
                <label class="text-slate-700 font-medium sm:w-1/3 mb-2 sm:mb-0" for="contact-message">Message:</label>
                <textarea class="border-2 border-zinc-400 rounded-md w-full sm:w-2/3 h-40" id="contact-message" name="contact-message" rows="6" required></textarea>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center my-4">
                <label class="text-slate-700 font-medium sm:w-1/3 mb-2 sm:mb-0">Preferred Contact Method:</label>
                <div class="flex flex-col sm:flex-row sm:space-x-4">
                    <div>
                        <input type="radio" id="contact-email-method" name="contact-method" value="email" checked>
                        <label class="text-slate-700 font-medium ms-1" for="contact-email-method">Email</label>
                    </div>
                    <div>
                        <input type="radio" id="contact-phone-method" name="contact-method" value="phone">
                        <label class="text-slate-700 font-medium ms-1" for="contact-phone-method">Phone</label>
                    </div>
                </div>
            </div>

            <div class="flex justify-center my-6">
                <input class="bg-slate-700 text-white px-8 py-3 rounded-md hover:bg-emerald-500 duration-200 cursor-pointer" type="submit" value="Send Message">
            </div>
        </form>
    </article>

    <article class="w-full sm:w-10/12 lg:w-8/12 mx-auto my-6 px-6 sm:px-10 py-5 rounded-xl border-l-8 border-slate-800">
        <h3 class="text-emerald-500 text-xl font-bold my-3">Our Location</h3>
        <address class="not-italic text-slate-700">
            WebDev Training Center<br>
            123 Learning Street<br>
            Tech City, TC 10101<br>
            Email: <a class="text-emerald-500" href="mailto:info@webdevcourse.com">info@webdevcourse.com</a><br>
            Phone: <a class="text-emerald-500" href="tel:+15551234567">(555) 123-4567</a>
        </address>
    </article>

    <article class="w-full sm:w-10/12 lg:w-8/12 mx-auto my-6 px-6 sm:px-10 py-5 rounded-xl border-l-8 border-slate-800">
        <h3 class="text-emerald-500 text-xl font-bold my-3">Office Hours</h3>
        <div class="grid grid-cols-2 gap-2 sm:grid-cols-2">
            <div class="border-b-2 border-slate-300 py-2">Monday - Friday</div>
            <div class="border-b-2 border-slate-300 py-2">9:00 AM - 6:00 PM</div>
            <div class="border-b-2 border-slate-300 py-2">Saturday</div>
            <div class="border-b-2 border-slate-300 py-2">10:00 AM - 4:00 PM</div>
            <div class="border-b-2 border-slate-300 py-2">Sunday</div>
            <div class="border-b-2 border-slate-300 py-2">Closed</div>
        </div>
    </article>

    <article class="w-full sm:w-10/12 lg:w-8/12 mx-auto my-6 px-6 sm:px-10 py-5 rounded-xl border-l-8 border-slate-800">
        <h3 class="text-emerald-500 text-xl font-bold my-3">Frequently Asked Questions</h3>
        <details class="mb-3 hover:cursor-pointer">
            <summary class="text-slate-700 font-semibold">What prerequisites do I need for the courses?</summary>
            <p class="pl-4 mt-2">Our beginner courses require no prior experience. For intermediate and advanced courses, we recommend basic computer literacy and familiarity with using web browsers.</p>
        </details>

        <details class="mb-3 hover:cursor-pointer">
            <summary class="text-slate-700 font-semibold">How long do I have access to course materials?</summary>
            <p class="pl-4 mt-2">You'll have lifetime access to all course materials once you enroll, including any future updates to the content.</p>
        </details>

        <details class="mb-3 hover:cursor-pointer">
            <summary class="text-slate-700 font-semibold">Do you offer payment plans?</summary>
            <p class="pl-4 mt-2">Yes, we offer flexible payment plans for all our courses. Contact us for more information about available options.</p>
        </details>
    </article>
</section>

<?php
require_once "includes/footer.php";
?>
