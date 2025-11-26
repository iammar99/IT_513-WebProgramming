<?php
// Set the page title for the 403 error page
$pageTitle = "Access Denied";
?>

<?php
// Include the header file
require_once 'includes/header.php';
?>

<section class="content-section section-red">
    <h2 class="section-heading heading-red">403 - Access Denied</h2>

    <article class="content-article article-red">
        <h3 class="article-heading">
            <span class="article-icon-red">▸</span> You don't have permission to access this page.
        </h3>
        <p class="text-body mb-6">The page you're trying to reach is restricted or requires special access.</p>

        <div class="content-article article-red mb-6">
            <h4 class="article-heading">
                <span class="article-icon-red">▸</span> Possible reasons:
            </h4>
            <ul class="bullet-list">
                <li>You may need to log in to access this content</li>
                <li>The page might be for administrators only</li>
                <li>Your account doesn't have the required permissions</li>
                <li>The resource has been moved or restricted</li>
            </ul>
        </div>

        <p class="text-body mb-4">If you believe this is an error, please <a href="contact.php" class="address-link font-semibold">contact us</a> for assistance.</p>
        <p class="text-muted"><strong>Technical details:</strong> Error 403 - Forbidden</p>

        <div class="mt-6">
            <a href="index.php" class="btn-primary">
                Return to Homepage
            </a>
        </div>
    </article>
</section>

<?php
// Include the footer file
require_once 'includes/footer.php';
?>