<?php
if (is_null($_SESSION)) {
    session_start();
}
?>
    <nav>
        <ul>
            <li><a href="index.php">Main</a></li>
            <li><a href="viewBlog.php">Blog</a></li>
            <li><a href="contact.php">Contact me</a></li>
            <li><a href="education.php">My education</a></li>
            <?php
                if (!is_null($_SESSION["uid"])) {
                    echo "<li><a href=\"logout.php\">Logout</a></li>";
                    echo "<li><a href=\"addEntry.php\">Add blog entry</a></li>";
                } else {
                    echo "<li><a href=\"login.php\">Login</a></li>";
                }
            ?>

            <li><a href="my_works.php">Projects</a></li>
        </ul>
    </nav>
