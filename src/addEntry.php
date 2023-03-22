<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/addEntry.css">
    <!-- <script src=""> -->
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

    <?php include 'footer.php'; ?>
</body>

</html>

