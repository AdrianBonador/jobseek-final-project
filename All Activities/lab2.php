<?php
// Set timezone first
date_default_timezone_set('Asia/Manila');

// Data
$ids = [10, 22, 15, 67, 45];
$users = ['user1', 'user2', 'user3', 'User 4'];

// Operations on $ids
sort($ids);                 // sort ascending
array_push($ids, 100);      // add 100
array_pop($ids);            // remove last (100)
array_shift($ids);          // remove first
array_unshift($ids, 67);    // add 67 at beginning

// Get a slice copy
$ids2 = array_slice($ids, 2, 3);

// Replace one element at index 1 with 99 (replacement must be an array)
array_splice($ids, 1, 1, [99]);

// Sum numeric values
$sum = array_sum(array_filter($ids, 'is_numeric'));

// Find index of 'User 4' (handle not found)
$index = array_search('User 4', $users);
$indexOutput = ($index === false) ? 'not found' : $index;

// Tags -> array (trim whitespace)
$tags = 'saleslady, connector, callcenter, pulis';
$tagArray = array_map('trim', explode(',', $tags));

// Prepare summary (kept separate from $time)
$summary  = "Count of IDs: " . count($ids) . "<br>";
$summary .= "Sum of IDs: $sum<br>";
$summary .= "User 4 is at index: $indexOutput<br>";
$summary .= "Tags: " . implode(' | ', $tagArray) . "<br>";

// Current time (12-hour with am/pm). Use 'H:i:s' for 24-hour format.
$time = date('h:i:s a');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Array Functions</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto flex items-center justify-between">
            <h1 class="text-3xl font-semibold">PHP Array Demo</h1>
            <div class="text-sm">Current time: <?= htmlspecialchars($time) ?></div>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <p class="text-xl">
                <?= $summary ?>
            </p>

            <h2 class="text-xl font-semibold my-4">IDs Array</h2>
            <pre class="bg-gray-100 p-3 rounded">
<?php print_r($ids); ?>
            </pre>

            <h2 class="text-xl font-semibold my-4">IDs Slice (ids2)</h2>
            <pre class="bg-gray-100 p-3 rounded">
<?php print_r($ids2); ?>    
            </pre>
        </div>
    </div>
</body>

</html>