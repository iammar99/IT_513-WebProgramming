<?php
$pageTitle = "Products";
require_once "includes/header.php"
?>

<section class="px-4 sm:px-6 lg:px-10">
    <h2 class="text-slate-900 my-5 pb-2 font-bold text-2xl sm:text-3xl text-center">Our Products</h2>

    <article class="w-full sm:w-10/12 lg:w-8/12 mx-auto my-10 px-5 sm:px-10 py-5 rounded-xl border-l-4 sm:border-l-8 border-slate-800">
        <h3 class="text-emerald-500 text-lg sm:text-xl font-bold my-3">Web Development Courses</h3>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <caption class="font-bold text-md mb-2">Course Offerings and Pricing</caption>
                <thead class="bg-slate-700 text-white text-center">
                    <tr class="h-10 sm:h-12">
                        <th class="border-2 border-slate-300 px-2 sm:px-5">Course Name</th>
                        <th class="border-2 border-slate-300 px-2 sm:px-5">Duration</th>
                        <th class="border-2 border-slate-300 px-2 sm:px-5">Level</th>
                        <th class="border-2 border-slate-300 px-2 sm:px-5">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="h-10 sm:h-12">
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-100">HTML5 Fundamentals</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-100">4 weeks</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-100">Beginner</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-100">$99</td>
                    </tr>
                    <tr class="h-10 sm:h-12">
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-200">CSS3 Styling</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-200">6 weeks</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-200">Intermediate</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-200">$149</td>
                    </tr>
                    <tr class="h-10 sm:h-12">
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-100">JavaScript Programming</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-100">8 weeks</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-100">Intermediate</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-100">$199</td>
                    </tr>
                    <tr class="h-10 sm:h-12">
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-200">Full Stack Development</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-200">12 weeks</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-200">Advanced</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-200">$399</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>

    <article class="w-full sm:w-10/12 lg:w-8/12 mx-auto my-10 px-5 sm:px-10 py-5 rounded-xl border-l-4 sm:border-l-8 border-slate-800">
        <h3 class="text-emerald-500 text-lg sm:text-xl font-bold my-3">Learning Resources</h3>
        <ul class="list-disc pl-5 sm:pl-10 space-y-1 sm:space-y-2">
            <li>Interactive Coding Exercises</li>
            <li>Video Tutorials</li>
            <li>Project Templates</li>
            <li>Community Support</li>
            <li>Code Review Sessions</li>
            <li>Weekly Q&A Webinars</li>
        </ul>
    </article>

    <article class="w-full sm:w-10/12 lg:w-8/12 mx-auto my-10 px-5 sm:px-10 py-5 rounded-xl border-l-4 sm:border-l-8 border-slate-800">
        <h3 class="text-emerald-500 text-lg sm:text-xl font-bold my-3">Certification Programs</h3>
        <p>Complete our courses to earn industry-recognized certifications that validate your web development skills.</p>
        <details class="mt-2">
            <summary class="text-emerald-500 text-md font-medium my-2 cursor-pointer">View Certification Requirements</summary>
            <ul class="list-disc pl-5 sm:pl-10 space-y-1 sm:space-y-2 mt-2">
                <li>Complete all course modules</li>
                <li>Pass final assessment with 80% or higher</li>
                <li>Submit a capstone project</li>
                <li>Participate in community discussions</li>
            </ul>
        </details>
    </article>

    <article class="w-full sm:w-10/12 lg:w-8/12 mx-auto my-10 px-5 sm:px-10 py-5 rounded-xl border-l-4 sm:border-l-8 border-slate-800">
        <h3 class="text-emerald-500 text-lg sm:text-xl font-bold my-3">Course Bundles</h3>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <caption class="font-bold text-md mb-2">Save with Our Course Bundles</caption>
                <thead class="bg-slate-700 text-white text-center">
                    <tr class="h-10 sm:h-12">
                        <th class="border-2 border-slate-300 px-2 sm:px-5">Bundle Name</th>
                        <th class="border-2 border-slate-300 px-2 sm:px-5">Courses Included</th>
                        <th class="border-2 border-slate-300 px-2 sm:px-5">Individual Price</th>
                        <th class="border-2 border-slate-300 px-2 sm:px-5">Bundle Price</th>
                        <th class="border-2 border-slate-300 px-2 sm:px-5">Savings</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="h-10 sm:h-12">
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-100">Frontend Foundation</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-100">HTML5 + CSS3 + JavaScript</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-100">$447</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-100">$349</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-100">$98</td>
                    </tr>
                    <tr class="h-10 sm:h-12">
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-200">Complete Web Developer</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-200">All 4 Courses</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-200">$846</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-200">$599</td>
                        <td class="border-2 border-slate-300 px-2 sm:px-5 bg-stone-200">$247</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>
</section>

<?php
require_once "includes/footer.php"
?>
