<?php 
session_start(); 

if (!is_null($_SESSION) && !is_null($_SESSION["uid"])) {
    // user is already signed in
    header("Location: ".$_SERVER["SERVER_ADDR"]."/viewBlog.php#alreadySignedIn");
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
    <link rel="stylesheet" href="css/login.css">
    <!-- <script src=""> -->
</head>

<body>
    <header>
        <h1>Zakariyya Kadri</h1>
        <p>Login</p>
    </header>
    <?php include 'nav.php' ?>

    <main>
        <form method="POST" action="./login_script.php">
            <fieldset>
                <h1>Login</h1>
                <p>
                    <input type="email" name="email" placeholder="Email">
                </p>
                <p>
                    <input type="password" name="password" placeholder="Password">
                </p>

                <input type="submit" value="Login">
            </fieldset>
        </form>
    </main>

    <?php include 'footer.php' ?>
</body>

</html>

