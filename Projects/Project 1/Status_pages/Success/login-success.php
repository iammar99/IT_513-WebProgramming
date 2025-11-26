<?php
$pageTitle = "Registration Successful";
require_once __DIR__ . '/../../includes/header.php';
?>

<section
    class="flex-grow flex flex-col justify-center items-center bg-green-50 min-h-[calc(100vh-5rem)] px-4 sm:px-6 lg:px-10">
    <h2 class="text-3xl font-bold text-slate-800 mb-6 text-center">Logged In Successful!</h2>

    <article class="bg-white shadow-md rounded-xl p-8 text-center w-full sm:w-10/12 lg:w-8/12">
        <div class="mb-6">
            <svg class="success-icon mx-auto mb-4 w-16 h-16 text-green-500" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h3 class="text-2xl font-bold text-green-600 mb-2">Welcome!</h3>
            <p class="text-gray-700 mb-2">You has been Logged in successfully.</p>
            <p class="text-gray-600 mb-6">You can now Enjoy.</p>
        </div>

        <div class="flex justify-center gap-4">
            <!-- <a href="../login.php"
                class="bg-slate-700 text-white px-6 py-2 rounded-md hover:bg-emerald-500 transition duration-200">
                Go to Login
            </a> -->
            <a href="/" class="bg-white text-slate-700 border border-slate-300 px-6 py-2 rounded-md 
          hover:bg-slate-700 hover:text-white  
          transition duration-200 ease-in-out">
                Return to Homepage
            </a>

        </div>
    </article>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>