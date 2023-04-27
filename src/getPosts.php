<?php

$posts = [];

try {
    $mysqli = new mysqli("127.0.0.1", "417coursework", "coursework", "courseworkdb");

    $stmt = $mysqli->prepare("SELECT Title, Body, Date FROM ForumPosts");
    $stmt->execute();
    $results = $stmt->get_result();

    if (!$results) {
        echo "Issue with getting posts from sql db";
        die();
    }

    $posts = $results->fetch_all(MYSQLI_ASSOC);

} catch (Exception $exception) {
    echo $exception;
    die();
}

function getTimestamp($post) {
    return (new DateTime($post["Date"]))->getTimestamp();
}

function timestampGreaterThan($post0, $post1) {
    return getTimestamp($post0) > getTimestamp($post1);
}


// insertion sort posts
$sorted_posts = [];
for ($i = 0; $i < count($posts); $i++) {
    $shift = null;
    $sorted_posts_count = count($sorted_posts);
    for ($j = 0; $j < $sorted_posts_count + 1; $j++) {
        if (!is_null($shift)) {
            $temp = $sorted_posts[$j];
            $sorted_posts[$j] = $shift;
            $shift = $temp;
        }
        else if (count($sorted_posts) == $j) {
            $sorted_posts[$j] = $posts[$i];
        }else if (timestampGreaterThan($posts[$i], $sorted_posts[$j])) {
            $shift = $sorted_posts[$j];
            $sorted_posts[$j] = $posts[$i];
        }
    }
}

header("Content-Type: application/json; charset=utf-8");
echo json_encode($sorted_posts);

?>
