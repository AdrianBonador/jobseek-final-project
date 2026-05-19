<?php
// SUPERGLOBALS LAB
// Fill in the blanks using ONLY these:
// $_SERVER, $_GET, $_POST, $_FILES, $_SESSION

session_start(); // needed for $_SESSION

// 1) SERVER: request method
$requestMethod = $_SERVER['REQUEST_METHOD']; // GET or POST

// 2) GET or POST: theme from URL or form 
$theme = $_GET['theme'] ?? ($_POST['theme'] ?? 'light');

// Theme classes

$bodyClass = "bg-blue-100 text-slate-900";
$cardClass = "bg-white border-slate-200";
$mutedText = "text-slate-600";
$softBg    = "bg-slate-50";

if ($theme === "dark") {
    $bodyClass = "bg-slate-900 text-slate-100";
    $cardClass = "bg-slate-800 border-slate-700";
    $mutedText = "text-slate-400";
    $softBg    = "bg-slate-900/50";
}

// Default outputs
$notice = "";
$uploadedInfo = "";

// 3) POST + FILES handling
if ($requestMethod === "POST") {

    // POST: read name (Updated to match the form input name 'student_name')
    $name = $_POST['student_name'] ?? "";

    // SESSION: remember name
    $_SESSION['saved_name'] = $name;

    // FILES: safe check first
    if (isset($_FILES['student_file']) && $_FILES['student_file']['error'] === 0) {

        $fileName = $_FILES['student_file']['name'];
        $fileSize = $_FILES['student_file']['size'];

        $uploadedInfo = "Uploaded file: $fileName ($fileSize bytes)";
    } else {
        $uploadedInfo = "No file selected (or upload error).";
    }

    $notice = "Saved! Refresh the page and your SESSION name should stay.";
}

// 4) SESSION: read remembered value
$savedName = $_SESSION['saved_name'] ?? "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Superglobals Lab</title>
</head>

<body class="<?= $bodyClass; ?> min-h-screen p-6 transition-colors duration-300">
    <div class="max-w-3xl mx-auto">
        <div class="<?= $cardClass; ?> border rounded-2xl shadow p-6">

            <h1 class="text-2xl font-bold">Superglobals Lab (Completed)</h1>
            <p class="mt-1 <?= $mutedText; ?>">
                FORM → $_SERVER → $_GET → $_POST → $_FILES → $_SESSION
            </p>

            <?php if ($notice !== ""): ?>
                <div class="mt-4 <?= $softBg; ?> border <?= ($theme === "dark" ? "border-slate-700" : "border-slate-200"); ?> rounded-xl p-4">
                    <p class="font-semibold text-green-500"><?= $notice; ?></p>
                </div>
            <?php endif; ?>

            <div class="grid md:grid-cols-2 gap-4 mt-6">

                <div class="<?= $softBg; ?> border <?= ($theme === "dark" ? "border-slate-700" : "border-slate-200"); ?> rounded-xl p-4">
                    <h2 class="font-bold text-lg">$_SERVER</h2>
                    <p class="mt-2 text-sm <?= $mutedText; ?>">Shows the request method.</p>
                    <p class="mt-3 font-mono bg-black/5 p-2 rounded">REQUEST_METHOD: <?= $requestMethod; ?></p>
                </div>

                <div class="<?= $softBg; ?> border <?= ($theme === "dark" ? "border-slate-700" : "border-slate-200"); ?> rounded-xl p-4">
                    <h2 class="font-bold text-lg">$_GET</h2>
                    <p class="mt-2 text-sm <?= $mutedText; ?>">Reads data from the URL.</p>
                    <p class="mt-3 font-mono">theme: <?= $theme; ?></p>

                    <div class="mt-3 flex gap-2">
                        <a class="px-3 py-2 rounded-lg <?= ($theme === "light" ? "bg-blue-500 text-white" : "bg-slate-700"); ?>" href="?theme=light">Light</a>
                        <a class="px-3 py-2 rounded-lg <?= ($theme === "dark" ? "bg-blue-500 text-white" : "bg-slate-200 text-slate-900"); ?>" href="?theme=dark">Dark</a>
                    </div>
                </div>

                <div class="<?= $softBg; ?> border <?= ($theme === "dark" ? "border-slate-700" : "border-slate-200"); ?> rounded-xl p-4">
                    <h2 class="font-bold text-lg">FORM → $_POST + $_FILES</h2>
                    <p class="mt-2 text-sm <?= $mutedText; ?>">
                        Submit a name (POST) and choose a file (FILES).
                    </p>

                    <form method="POST" enctype="multipart/form-data" class="mt-4 space-y-3">
                        <input type="hidden" name="theme" value="<?= $theme; ?>">

                        <input type="text"
                            name="student_name"
                            placeholder="Enter your name"
                            class="w-full rounded-xl border px-4 py-2 <?= ($theme === "dark" ? "bg-slate-800 border-slate-700" : "bg-white border-slate-200"); ?>" />

                        <input type="file" name="student_file" class="w-full text-sm" />

                        <button class="w-full rounded-xl px-4 py-2 font-semibold <?= ($theme === "dark" ? "bg-blue-600 text-white" : "bg-slate-900 text-white"); ?>">
                            Save (POST)
                        </button>
                    </form>

                    <?php if ($uploadedInfo !== ""): ?>
                        <p class="mt-3 text-xs font-mono p-2 bg-black/5 rounded"><?= $uploadedInfo; ?></p>
                    <?php endif; ?>
                </div>

                <div class="<?= $softBg; ?> border <?= ($theme === "dark" ? "border-slate-700" : "border-slate-200"); ?> rounded-xl p-4">
                    <h2 class="font-bold text-lg">$_SESSION</h2>
                    <p class="mt-2 text-sm <?= $mutedText; ?>">
                        Remembers data even after refresh.
                    </p>

                    <p class="mt-3">
                        <span class="font-semibold">Saved Name:</span>
                        <span class="font-mono text-blue-500"><?= htmlspecialchars($savedName); ?></span>
                    </p>
                </div>

            </div>
        </div>
    </div>
</body>

</html>