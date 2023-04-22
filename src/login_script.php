<?php

try {
    $mysqli = new mysqli("127.0.0.1", "417coursework", "coursework", "courseworkdb");

    $stmt = $mysqli->prepare("SELECT UserID FROM Users WHERE Username=(?) AND Password=(?)");
    $stmt->bind_param("ss", $_POST["email"], $_POST["password"]);
    $stmt->execute();
    $results = $stmt->get_result();

    if (!$results) {
        echo "Incorrect username/password";
        die();
    }

    session_start();

    $row = $results->fetch_array();
    $_SESSION["uid"] = $row["UserID"];
    $_SESSION["username"] = $_POST["email"];

    header("Location: ".$_SERVER["SERVER_ADDR"]."/viewBlog.php#signedIn");

} catch (Exception $exception) {
    echo ($exception);
    die();
}

?>
