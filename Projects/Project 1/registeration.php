<?php
session_start();

$pageTitle = "User Registration";
require_once "includes/header.php";

$errors = $_SESSION['errors'] ?? [];
$form_data = $_SESSION['form_data'] ?? [];
$success_message = $_SESSION['success_message'] ?? '';

unset($_SESSION['errors'], $_SESSION['form_data'], $_SESSION['success_message']);
?>


<section class="py-10 px-4 sm:px-6 lg:px-10">
    <h2 class="text-slate-800 my-8 pb-2 font-bold text-2xl sm:text-3xl text-center">User Registration</h2>

    <?php if (!empty($errors)): ?>
        <div
            class="flex flex-col items-start bg-orange-200 mx-auto w-full sm:w-10/12 lg:w-9/12 border-2 border-orange-500 rounded-md py-5 px-5 text-orange-800 font-bold text-lg">
            Please fix the following errors:
            <ul class="flex flex-col pl-5 sm:pl-10 font-medium text-sm list-disc mt-2">
                <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>


    <form action="Processing_pages/registeration-proccess.php" method="POST"
        class="w-full sm:w-10/12 lg:w-8/12 mx-auto">

        <fieldset class="border-2 border-slate-800 w-full sm:w-full my-6 px-4 sm:px-5 py-4 rounded-md">
            <legend class="text-emerald-500 text-md font-bold my-3">Personal Information</legend>
            <div class="flex flex-col sm:flex-row sm:items-center my-4">
                <label class="text-slate-700 font-medium sm:w-1/3 mb-2 sm:mb-0" for="first-name">
                    First Name<span class="text-red-600 font-bold text-xl">*</span>:
                </label>
                <input class="border-2 border-zinc-400 rounded-md w-full sm:w-2/3 h-10" type="text" id="first-name"
                    name="first-name"
                    value="<?php echo isset($form_data['first-name']) ? htmlspecialchars($form_data['first-name']) : ''; ?>"
                    required>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center my-4">
                <label class="text-slate-700 font-medium sm:w-1/3 mb-2 sm:mb-0" for="last-name">
                    Last Name<span class="text-red-600 font-bold text-xl">*</span>:
                </label>
                <input class="border-2 border-zinc-400 rounded-md w-full sm:w-2/3 h-10" type="text" id="last-name"
                    name="last-name"
                    value="<?php echo isset($form_data['last-name']) ? htmlspecialchars($form_data['last-name']) : ''; ?>"
                    required>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center my-4">
                <label class="text-slate-700 font-medium sm:w-1/3 mb-2 sm:mb-0" for="email">
                    Email<span class="text-red-600 font-bold text-xl">*</span>:
                </label>
                <input class="border-2 border-zinc-400 rounded-md w-full sm:w-2/3 h-10" type="email" id="email"
                    name="email"
                    value="<?php echo isset($form_data['email']) ? htmlspecialchars($form_data['email']) : ''; ?>"
                    required>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center my-4">
                <label class="text-slate-700 font-medium sm:w-1/3 mb-2 sm:mb-0" for="phone">
                    Phone<span class="text-red-600 font-bold text-xl">*</span>:
                </label>
                <input class="border-2 border-zinc-400 rounded-md w-full sm:w-2/3 h-10" type="tel" id="phone"
                    name="phone"
                    value="<?php echo isset($form_data['phone']) ? htmlspecialchars($form_data['phone']) : ''; ?>"
                    required>
            </div>
        </fieldset>

        <fieldset class="border-2 border-slate-800 w-full my-6 px-4 sm:px-5 py-4 rounded-md">
            <legend class="text-emerald-500 text-md font-bold my-3">Account Information</legend>
            <div class="flex flex-col sm:flex-row sm:items-center my-4">
                <label class="text-slate-700 font-medium sm:w-1/3 mb-2 sm:mb-0" for="username">
                    Username<span class="text-red-600 font-bold text-xl">*</span>:
                </label>
                <input class="border-2 border-zinc-400 rounded-md w-full sm:w-2/3 h-10" type="text" id="username"
                    name="username"
                    value="<?php echo isset($form_data['username']) ? htmlspecialchars($form_data['username']) : ''; ?>"
                    required>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center my-4">
                <label class="text-slate-700 font-medium sm:w-1/3 mb-2 sm:mb-0" for="password">
                    Password<span class="text-red-600 font-bold text-xl">*</span>:
                </label>
                <input class="border-2 border-zinc-400 rounded-md w-full sm:w-2/3 h-10" type="password" id="password"
                    name="password"
                    value="<?php echo isset($form_data['password']) ? htmlspecialchars($form_data['password']) : ''; ?>"
                    required minlength="8">
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center my-4">
                <label class="text-slate-700 font-medium sm:w-1/3 mb-2 sm:mb-0" for="confirm-password">
                    Confirm Password<span class="text-red-600 font-bold text-xl">*</span>:
                </label>
                <input class="border-2 border-zinc-400 rounded-md w-full sm:w-2/3 h-10" type="password"
                    id="confirm-password" name="confirm-password"
                    value="<?php echo isset($form_data['confirm-password']) ? htmlspecialchars($form_data['confirm-password']) : ''; ?>"
                    required>
            </div>
        </fieldset>

        <fieldset class="border-2 border-slate-800 w-full my-6 px-4 sm:px-5 py-4 rounded-md">
            <legend class="text-emerald-500 text-md font-bold my-3">Additional Information</legend>

            <div class="flex flex-col sm:flex-row sm:items-center my-4">
                <label class="text-slate-700 font-medium sm:w-1/3 mb-2 sm:mb-0" for="birthdate">
                    Birth Date<span class="text-red-600 font-bold text-xl">*</span>:
                </label>
                <input class="border-2 border-zinc-400 rounded-md w-full sm:w-2/3 h-10" type="date" id="birthdate"
                    name="birthdate"
                    value="<?php echo isset($form_data['birthdate']) ? htmlspecialchars($form_data['birthdate']) : ''; ?>">
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center my-4">
                <label class="text-slate-700 font-medium sm:w-1/3 mb-2 sm:mb-0" for="course-level">
                    Course Level<span class="text-red-600 font-bold text-xl">*</span>:
                </label>
                <select class="border-2 border-zinc-400 rounded-md w-full sm:w-2/3 h-10" id="course-level"
                    name="course-level">
                    <option value="beginner" <?php echo (isset($form_data['course-level']) && $form_data['course-level'] === 'beginner') ? 'selected' : ''; ?>>Beginner</option>
                    <option value="intermediate" <?php echo (isset($form_data['course-level']) && $form_data['course-level'] === 'intermediate') ? 'selected' : ''; ?>>Intermediate</option>
                    <option value="advanced" <?php echo (isset($form_data['course-level']) && $form_data['course-level'] === 'advanced') ? 'selected' : ''; ?>>Advanced</option>
                </select>

            </div>

            <div class="flex flex-col my-4">
                <label class="mb-2">Interests<span class="text-red-600 font-bold text-xl">*</span>:</label>
                <div class="flex flex-col sm:flex-row sm:space-x-4">
                    <div>
                        <input type="checkbox" id="frontend" name="interests[]" value="frontend">
                        <label class="ms-1 text-slate-700 font-medium" for="frontend">Frontend Development</label>
                    </div>
                    <div>
                        <input type="checkbox" id="backend" name="interests[]" value="backend">
                        <label class="ms-1 text-slate-700 font-medium" for="backend">Backend Development</label>
                    </div>
                    <div>
                        <input type="checkbox" id="fullstack" name="interests[]" value="fullstack">
                        <label class="ms-1 text-slate-700 font-medium" for="fullstack">Full Stack Development</label>
                    </div>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-start my-4">
                <label class="text-slate-700 font-medium sm:w-1/3 mb-2 sm:mb-0" for="comments">
                    Comments:
                </label>
                <textarea class="border-2 border-zinc-400 rounded-md w-full sm:w-2/3 h-40" id="comments" name="comments"
                    rows="4"><?php echo isset($form_data['comments']) ? htmlspecialchars($form_data['comments']) : ''; ?></textarea>
            </div>
        </fieldset>

        <div class="text-center my-4">
            <p class="text-md text-slate-600">
                Already have an account?
                <a href="../login.php" class="relative inline-block text-emerald-500 font-medium 
          after:absolute after:left-0 after:bottom-0 after:h-0.5 after:bg-emerald-500 
          after:w-full after:origin-left after:scale-x-0 after:transition-transform after:duration-300 
          hover:after:scale-x-100">
                    Login
                </a>
            </p>
        </div>

        <div class="flex flex-col sm:flex-row justify-center my-6 space-y-2 sm:space-y-0 sm:space-x-4">
            <input
                class="bg-slate-700 text-white px-8 py-3 rounded-md hover:cursor-pointer hover:bg-emerald-500 duration-200"
                type="submit" value="Register">
            <input
                class="bg-slate-700 text-white px-8 py-3 rounded-md hover:cursor-pointer hover:bg-emerald-500 duration-200"
                type="reset" value="Clear Form">
        </div>
    </form>
</section>

<?php
require_once "includes/footer.php";
unset($_SESSION['errors']);
unset($_SESSION['form_data']);
unset($_SESSION['success_message']);
?>