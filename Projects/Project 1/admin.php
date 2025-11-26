<?php
$pageTitle = "Admin";
require_once "includes/header.php";

require_once "Processing_pages/admin_processing.php";
?>

<div class="flex flex-col min-h-screen">

    <main class="flex-grow py-10 px-4 sm:px-6 lg:px-10">
        <h2 class="text-slate-800 my-8 pb-2 font-bold text-2xl sm:text-3xl text-center">Users</h2>

        <?php if (!empty($users)): ?>
            <div class="overflow-x-auto">
                <table class="min-w-full border border-slate-300">
                    <thead>
                        <tr class="bg-slate-100">
                            <th class="border px-4 py-2 text-left">ID</th>
                            <th class="border px-4 py-2 text-left">Name</th>
                            <th class="border px-4 py-2 text-left">Email</th>
                            <th class="border px-4 py-2 text-left">Phone</th>
                            <th class="border px-4 py-2 text-left">Username</th>
                            <th class="border px-4 py-2 text-left">Course Level</th>
                            <th class="border px-4 py-2 text-left">Interests</th>
                            <th class="border px-4 py-2 text-left">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr class="hover:bg-slate-50">
                                <td class="border px-4 py-2"><?php echo htmlspecialchars($user['userID']); ?></td>
                                <td class="border px-4 py-2"><?php echo htmlspecialchars($user['name']); ?></td>
                                <td class="border px-4 py-2"><?php echo htmlspecialchars($user['email']); ?></td>
                                <td class="border px-4 py-2"><?php echo htmlspecialchars($user['phone']); ?></td>
                                <td class="border px-4 py-2"><?php echo htmlspecialchars($user['username']); ?></td>
                                <td class="border px-4 py-2"><?php echo htmlspecialchars($user['course_level']); ?></td>
                                <td class="border px-4 py-2"><?php echo htmlspecialchars($user['interests']); ?></td>
                                <td class="border px-4 py-2"><?php echo htmlspecialchars($user['created_at']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <p class="text-center text-slate-700">No users found.</p>
        <?php endif; ?>
    </main>

    <?php require_once "includes/footer.php"; ?>

</div>
