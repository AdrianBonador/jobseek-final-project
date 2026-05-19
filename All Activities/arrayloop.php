<?php
$names = ['Monkey D. Luffy', 'Roronoa Zoro', 'Nami', 'Usopp'];

$users = [
    [
        'name' => 'Tony Tony Chopper',
        'email' => 'chopper@strawhat.navy'
    ],
    ['name' => 'Nico Robin', 'email' => 'robin@ohara.museum'],
    ['name' => 'Vinsmoke Sanji', 'email' => 'sanji@baratie.cook'],
    ['name' => 'Franky', 'email' => 'franky@thousand-sunny.corp']
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>LOOPING - One Piece</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP LOOP </h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <h3 class="text-xl font-semibold mb-4">Using a for loop</h3>
            <ul class="mb-6">
                <?php $len = count($names); ?>
                <?php for ($i = 0; $i < $len; $i++): ?>
                    <li><?= htmlspecialchars($names[$i]) ?></li>
                <?php endfor; ?>
            </ul>

            <h3 class="text-xl font-semibold mb-4">Using a foreach loop</h3>
            <ul class="mb-6">
                <?php foreach ($names as $name): ?>
                    <li><?= htmlspecialchars($name) ?></li>
                <?php endforeach; ?>
            </ul>

            <h3 class="text-xl font-semibold mb-4">Using a foreach loop with index</h3>
            <ul class="mb-6">
                <?php foreach ($names as $index => $name): ?>
                    <li><?= ($index + 1) . '. ' . htmlspecialchars($name) ?></li>
                <?php endforeach; ?>
            </ul>

            <h3 class="text-xl font-semibold mb-4">Using a foreach loop with associative array</h3>
            <ul class="mb-6">
                <?php foreach ($users as $user): ?>
                    <li>
                        <strong><?= htmlspecialchars($user['name']) ?></strong> — <?= htmlspecialchars($user['email']) ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <h3 class="text-xl font-semibold mb-4">Getting key names and values from associative array</h3>
            <ul class="mb-6">
                <?php foreach ($users as $i => $user): ?>
                    <li>
                        <div class="font-medium">User <?= ($i + 1) ?>:</div>
                        <ul class="ml-4 list-disc">
                            <?php foreach ($user as $key => $value): ?>
                                <li><?= htmlspecialchars($key) ?>: <?= htmlspecialchars($value) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</body>


</html>