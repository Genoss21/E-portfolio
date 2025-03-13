<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/input.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        // Apply dark mode before the page loads to prevent flickering
        if (localStorage.getItem("darkMode") === "enabled") {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>

    <title><?php echo "Document"; ?></title>
</head>
<body class="bg-white dark:bg-gray-900">
    <!--======= HEADER =======-->
    <?php include 'header.php'; ?>

    <main>
        <!--======= HOME =======-->
        <?php include 'home.php'; ?>
        <!--======= ABOUT =======-->
        <?php include 'about.php'; ?>
    </main>
    
    <!--======= FOOTER =======-->
    

    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
