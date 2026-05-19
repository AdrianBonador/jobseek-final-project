<?php

// Job listings data
$listings = [
    [
        'id' => 1,
        'title' => 'Software Engineer',
        'description' => 'We are seeking a skilled software engineer to develop high quality software solutions.',
        'salary' => 80000,
        'location' => 'San Francisco',
        'tags' => ['Java', 'Python', 'PHP']
    ],
    [
        'id' => 2,
        'title' => 'Chef',
        'description' => 'Looking for a creative chef to manage kitchen operations.',
        'salary' => 40000,
        'location' => 'New York',
        'tags' => ['Cooking', 'Baking', 'Menu Planning']
    ],
    [
        'id' => 3,
        'title' => 'Teacher',
        'description' => 'Experienced teacher needed for elementary school.',
        'salary' => 35000,
        'location' => 'Chicago',
        'tags' => ['Math', 'Science', 'English']
    ],
    [
        'id' => 4,
        'title' => 'Artist',
        'description' => 'Seeking a painter to create unique artwork for gallery.',
        'salary' => 30000,
        'location' => 'Los Angeles',
        'tags' => ['Painting', 'Drawing', 'Sketching']
    ],
    [
        'id' => 5,
        'title' => 'Farmer',
        'description' => 'Looking for someone to manage and grow crops organically.',
        'salary' => 25000,
        'location' => 'Texas',
        'tags' => ['Farming', 'Harvesting', 'Irrigation']
    ]
];


// FILTER FUNCTION
function filterByLocation($listings, $location)
{
    return array_filter($listings, function ($job) use ($location) {
        return strcasecmp($job['location'], $location) === 0;
    });
}


// CHECK SEARCH
if (isset($_GET['location']) && $_GET['location'] != '') {
    $location = $_GET['location'];
    $filteredLocation = filterByLocation($listings, $location);
} else {
    $filteredLocation = $listings;
}


// SAMPLE FUNCTIONS
function sayHello($name, $age)
{
    echo "Hello " . $name . "! You are " . $age . " years old.<br>";
}

function add($a, $b)
{
    return $a + $b;
}

$result = add(5, 3);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Job Listings</title>
</head>

<body class="bg-gray-100">

    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-xl font-semibold">Job Listings</h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">

        <!-- SEARCH BAR -->
        <form method="GET" class="mb-6 flex gap-2">

            <input
                type="text"
                name="location"
                placeholder="Search by location..."
                value="<?= htmlspecialchars($_GET['location'] ?? '') ?>"
                class="border p-2 rounded w-64">

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                Search
            </button>

            <a href="?" class="bg-gray-500 text-white px-4 py-2 rounded">
                Clear
            </a>

        </form>


        <ul class="space-y-4">

            <?php foreach ($filteredLocation as $index => $job): ?>

                <?php

                $specialJobs = ['Software Engineer', 'Teacher', 'Farmer'];

                if (in_array($job['title'], $specialJobs)) {
                    $bgClass = 'bg-blue-400 text-black';
                } elseif ($index % 2 == 0) {
                    $bgClass = 'bg-white text-black';
                } else {
                    $bgClass = 'bg-purple-600 text-white';
                }

                ?>

                <li>

                    <div class="rounded-lg shadow p-4 <?= $bgClass ?>">

                        <h2 class="text-xl font-semibold">
                            <?= htmlspecialchars($job['title']) ?>
                        </h2>

                        <p class="text-lg mt-2">
                            <?= htmlspecialchars($job['description']) ?>
                        </p>

                        <p class="mt-2">
                            <strong>Salary:</strong> ₱<?= number_format($job['salary'], 2) ?>

                            <?php if ($job['location'] === 'New York'): ?>

                                <span class="text-xs text-white bg-blue-600 rounded-full px-2 py-1 ml-2">
                                    Remote
                                </span>

                            <?php else: ?>

                                <span class="text-xs text-white bg-green-600 rounded-full px-2 py-1 ml-2">
                                    Onsite
                                </span>

                            <?php endif; ?>

                        </p>

                        <p>
                            <strong>Location:</strong> <?= htmlspecialchars($job['location']) ?>
                        </p>

                        <p>
                            <strong>Tags:</strong> <?= implode(', ', $job['tags']) ?>
                        </p>

                    </div>

                </li>

            <?php endforeach; ?>

        </ul>

    </div>

</body>

</html>