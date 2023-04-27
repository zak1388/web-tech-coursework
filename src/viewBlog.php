<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/common_mobile.css" media="screen and (max-width: 768px)">
    <link rel="stylesheet" href="css/viewBlog.css">
    <script>
        const USERNAME = "<?php 
                        if (is_null($_SESSION))
                            echo ""; 
                        else
                            echo $_SESSION["username"];
                    ?>";
    </script>
    <script src="js/dialog.js" defer></script>
    <script src="js/viewBlog.js" defer></script>
</head>

<body>
    <header>
        <h1>Zakariyya Kadri</h1>
        <p>A blog</p>
    </header>

    <?php include 'nav.php' ?>

    <main>
        <!-- posts go here, theyre articles with the class 'blog-article' and with a time, h2 and a p element -->
        <span>
            <label for="month-selector">Select month to view: </label>
            <select id="month-selector">
                <option value="all" default>All</option>
            </select>
        </span>
    </main>

    <?php include 'footer.php' ?>
</body>

</html>

