<?php
echo 'Hello world', ' ads';
echo '<br />';
print 'kamusta php';

$firstName = 'Adrian';
$lastName = 'Kirigaya';
$fullname = $firstName . ' ' . $lastName;

$title = 'PHP';
$heading = 'ayano kirigaya';
$body = 'You said your phone was broken';

$num1 = 5;
$num2 = 20;
$num3 = 10;
$prutas 
$result = $num1 + $num2;
echo '<br/>';
var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title ?></title>
</head>

<body class="bg-gray-100">

    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">WS03</h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4">
                <?php echo "Hello, my name is $fullname"; ?>
            </h2>
            <p>
                <?php echo $body; ?>
            </p>
        </div>
    </div>

</body>

</html>