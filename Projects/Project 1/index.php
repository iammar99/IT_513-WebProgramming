<?php 
$pageTitle = "Home";


require_once "includes/header.php";

?>


<section>
    <h2 class="text-slate my-8 pb-2 font-bold text-3xl border-b-2 border-slate-800 w-6/12 mx-auto">Welcome to Our Web
        Development Course</h2>
    <article class=" w-10/12 mx-auto my-10 px-10 py-5 rounded-xl border-l-8 border-slate-800">
        <h3 class="text-emerald-500 text-xl font-bold my-3">About This Course</h3>
        <p>This course provides comprehensive training in modern web development technologies, starting with
            HTML5 fundamentals.</p>
        <p>You'll learn to create semantic, accessible web pages that follow current web standards.</p>
    </article>

    <article class=" w-10/12 mx-auto my-10 px-10 py-5 rounded-xl border-l-8 border-slate-800">
        <h3 class="text-emerald-500 text-xl font-bold my-3">Course Features</h3>
        <ul class="list-disc">
            <li>HTML5 Semantic Elements</li>
            <li>Forms and Input Validation</li>
            <li>Accessibility Best Practices</li>
            <li>Responsive Design Principles</li>
        </ul>
    </article>

    <article class=" w-10/12 mx-auto my-10 px-10 py-5 rounded-xl border-l-8 border-slate-800">
        <h3 class="text-emerald-500 text-xl font-bold my-3">What You'll Learn</h3>
        <ol class="list-decimal">
            <li>HTML5 structure and semantics</li>
            <li>Creating accessible web forms</li>
            <li>Building multi-page websites</li>
            <li>Web standards and best practices</li>
        </ol>
    </article>
</section>




<?php
require_once "includes/footer.php";

?>