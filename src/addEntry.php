<?php
    session_start();

    if (is_null($_SESSION["uid"])) {
        header("Location: ".$_SERVER["SERVER_ADDR"]."/viewBlog.php#notSignedIn");
    } else if ($_SESSION["username"] !== "zakariyyakadri@gmail.com") {
        header("Location: ".$_SERVER["SERVER_ADDR"]."/viewBlog.php#insufficientPermission");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/common_mobile.css" media="screen and (max-width: 768px)">
    <link rel="stylesheet" href="css/addEntry.css">
    <script src="js/dialog.js" defer></script>
    <script src="js/addEntry.js" defer></script>
</head>

<body>
    <header>
        <h1>Zakariyya Kadri</h1>
        <p>Curate a post</p>
    </header>

    <?php include 'nav.php'; ?>

    <main>
        <form method="POST" action="./addPost.php">
            <fieldset>
                <h1>Add blog post</h1>
                <p>
                    <input type="text" name="title" placeholder="Title">
                </p>
                <p class="grow">
                    <textarea name="body" placeholder="Enter your text here"></textarea>
                </p>
                <p class="flex">
                    <input type="submit" value="Post">
                    <input type="reset" value="Clear">
                </p>
            </fieldset>
        </form>
    </main>

    <div id="confirm-clear-parent">
        <aside id="confirm-clear">
            <p> Are you sure you want to clear? </p>
            <div class="flex">
                <button id="confirm-clear-cancel">Cancel</button>
                <button id="confirm-clear-accept">Ok</button>
            </div>
        </aside>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>

