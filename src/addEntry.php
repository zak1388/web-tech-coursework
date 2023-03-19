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
    <nav>
        <ul>
            <li><a href="index.php">Main</a></li>
            <li><a href="viewBlog.php">Blog</a></li>
            <li><a href="contact.html">Contact me</a></li>
            <li><a href="education.html">My education</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="addEntry.php">Add blog entry</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="my_works.html">Projects</a></li>
        </ul>
    </nav>

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

    <footer>
        <p>Zakaryya Kadri © 2023</p>
    </footer>
</body>

</html>

