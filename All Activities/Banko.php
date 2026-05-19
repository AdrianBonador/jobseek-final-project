<?php

class Student
{
    public $name;

    public function greet()
    {
        return "Hello my name is " . $this->name;
    }
}

// Student objects
$studentCICT1 = new Student();
$studentCICT1->name = "Adrian";

$studentCICT2 = new Student();
$studentCICT2->name = "Zoro";


// BANK CLASS
class Person
{

    public $personName;
    public $balance;

    public function __construct($personName, $balance)
    {
        $this->personName = $personName;
        $this->balance = $balance;
    }
}

// Bank objects
$account1 = new Person("Luffy", 15000);
$account2 = new Person("Sanji", 8200);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student UI</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="max-w-4xl w-full px-6">

        <h1 class="text-3xl font-semibold mb-8 text-center">
            Student Overview
        </h1>

        <div class="grid md:grid-cols-2 gap-8">

            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-6 border">

                <p class="text-sm text-gray-500">Student</p>
                <h2 class="text-xl font-semibold mt-1">
                    <?= $studentCICT1->name ?>
                </h2>

                <div class="mt-6 bg-gray-100 rounded-xl p-4">
                    <p class="text-sm text-gray-500">Greeting</p>
                    <p class="text-lg font-bold text-blue-600 mt-1">
                        <?= $studentCICT1->greet(); ?>
                    </p>
                </div>

            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-6 border">

                <p class="text-sm text-gray-500">Student</p>
                <h2 class="text-xl font-semibold mt-1">
                    <?= $studentCICT2->name ?>
                </h2>

                <div class="mt-6 bg-gray-100 rounded-xl p-4">
                    <p class="text-sm text-gray-500">Greeting</p>
                    <p class="text-lg font-bold text-blue-600 mt-1">
                        <?= $studentCICT2->greet(); ?>
                    </p>
                </div>

            </div>

        </div>

    </div>

</body>

</html>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bank UI</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui'],
                    },
                    colors: {
                        base: "#EEEDEA",
                        primary: "#5C59C3",
                        ink: "#2B2A52",
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-base font-sans text-ink min-h-screen flex items-center justify-center">

    <div class="max-w-4xl w-full px-6">

        <h1 class="text-3xl font-semibold tracking-tight mb-8 text-center">
            Bank Accounts Overview
        </h1>

        <div class="grid md:grid-cols-2 gap-8">

            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-6 border border-neutral-200">

                <p class="text-sm text-neutral-500">Account Holder</p>
                <h2 class="text-xl font-semibold mt-1">

                </h2>

                <div class="mt-6 bg-base rounded-xl p-4">
                    <p class="text-sm text-neutral-500">Current Balance</p>
                    <p class="text-2xl font-bold text-primary mt-1">
                        ₱
                    </p>
                </div>

            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-6 border border-neutral-200">

                <p class="text-sm text-neutral-500">Account Holder</p>
                <h2 class="text-xl font-semibold mt-1">

                </h2>

                <div class="mt-6 bg-base rounded-xl p-4">
                    <p class="text-sm text-neutral-500">Current Balance</p>
                    <p class="text-2xl font-bold text-primary mt-1">
                        ₱
                    </p>
                </div>

            </div>

        </div>

    </div>

</body>

</html>