<?php
/*
Variables rules:
- All variables must start with a dollar sign ($)
- They must start with a letter or an underscore
- They cannot start with a number
- They can contain letters, numbers, and underscores
- They are case-sensitive (e.g., $name and $Name are different variables)
*/

/**
 * CONVENTIONS:
 * Underscore: $_variable_name
 * Camel Case: $variableName
 * Pascal Case: $VariableName
 * Kebab Case: $variable-name (not recommended in PHP)
 * Snake Case: $variable_name (recommended for variables)
 * Uppercase: $VARIABLE_NAME (usually for constants)
 */

$title = "Learn PHP From Scratch";
$heading = "Welcome To The Course";
$description = "In this course, you will learn the fundamentals of the PHP language";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold"><?= $title; ?></h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">
      <h2 class="text-2xl font-semibold mb-4"><?= $heading; ?></h2>
      <p><?= $description; ?></p>
    </div>
  </div>
  </header>
</body>

</html>