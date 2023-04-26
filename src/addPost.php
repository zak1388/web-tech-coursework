<?php

$date = date("Y-m-d H:i:s");
$title = $_POST["title"];
$body = $_POST["body"];

try {
    $mysqli = new mysqli("127.0.0.1", "417coursework", "coursework", "courseworkdb");

    $stmt = $mysqli->prepare("INSERT INTO ForumPosts (Date, Title, Body) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $date, $title, $body);
    $stmt->execute();

    header("Location: ".$_SERVER["SERVER_ADDR"]."/viewBlog.php#postSuccessful");
} catch (Exception $exception) {
    echo $exception;
    die();
} finally {
    $stmt->close();
    $mysqli->close();
}
?>
