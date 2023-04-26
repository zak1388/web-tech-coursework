<?php

try {
    $mysqli = new mysqli("127.0.0.1", "417coursework", "coursework", "courseworkdb");

    $stmt = $mysqli->prepare("SELECT Title, Body, Date FROM ForumPosts");
    $stmt->execute();
    $results = $stmt->get_result();

    if (!$results) {
        echo "Issue with getting posts from sql db";
        die();
    }

    header("Content-Type: application/json; charset=utf-8");

    echo json_encode($results->fetch_all(MYSQLI_ASSOC));
} catch (Exception $exception) {
    echo $exception;
    die();
}

?>
