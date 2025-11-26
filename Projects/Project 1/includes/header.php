<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="   /Styles/output.css?v=<?php echo time(); ?>"> <!-- Correct relative path -->
    <title>WebDev Course - <?php echo $pageTitle ?? "Home"; ?></title>
</head>
<body class="">
    <header class="bg-slate-700 w-full h-max py-6 px-5">
        <h1 class="text-white text-3xl font-bold">WebDev Course</h1>
        <?php require_once __DIR__ . "/navigation.php"; ?>
    </header>
