<?php

try {
    $mysqli = new mysqli("127.0.0.1", "417coursework", "passwd", "courseworkdb");


    $stmt = $mysqli->prepare("SELECT UserID FROM Users WHERE Username=(?) AND Password=(?)");
    $stmt->bind_param("ss", $_POST["Username"], $_POST["Password"]); 
    
    $results = $stmt->execute();
    
    if (!$results) {
        echo "Incorrect username/password";
        die();
    }


    session_start();
    $_SESSION["uid"] = $results[0];
    $_SESSION["username"] = $results[1];

    header("Location: ".$_SERVER["SERVER_ADDR"]."/viewBlog.php#signedIn");

} catch (Exception $exception) {
    echo ($exception);
    die();
}

?>
