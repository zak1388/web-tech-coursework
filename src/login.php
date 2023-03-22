<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
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
        <form method="POST" action="./login.php">
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

    <footer>
        <p>Zakaryya Kadri © 2023</p>
    </footer>
</body>

</html>

