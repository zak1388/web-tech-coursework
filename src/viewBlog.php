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
    <script src="js/viewBlog.js" defer></script>
</head>

<body>
    <header>
        <h1>Zakariyya Kadri</h1>
        <p>A blog</p>
    </header>

    <?php include 'nav.php' ?>

    <div class="dialog-background" id="onSignInBackground">
        <div class="dialog">
            <p>Welcome <?php echo $_SESSION["username"]; ?></p>
            <button id="hideOnSignIn">Ok</button>
        </div>
    </div>

    <div class="dialog-background" id="onSignOutBackground">
        <div class="dialog">
            <p>Signed out successfully</p>
            <button id="hideOnSignOut">Ok</button>
        </div>
    </div>

    <div class="dialog-background" id="onAlreadySignedInBackground">
        <div class="dialog">
            <p>You're already signed in!</p>
            <button id="hideOnAlreadySignedIn">Ok</button>
        </div>
    </div>

    <main>
        <!-- TODO: probably some php stuff to get the blogs to show as each article ig -->
        <article class="blog-article">
            <time datetime="2023-3-10">2023 March 10</time>
            <h2>Example blog post 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </article>

        <article class="blog-article">
            <time datetime="2023-3-12">2023 March 12</time>
            <h2>Example blog post 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </article>

        <article class="blog-article">
            <time datetime="2023-3-14">2023 March 14</time>
            <h2>Example blog post 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </article>
    </main>

    <?php include 'footer.php' ?>
</body>

</html>

