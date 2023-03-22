<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Zakariyya Kadri's Portfolio</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
    <!-- <script src=""> -->
</head>

<body>
    <header>
        <h1>Zakariyya Kadri</h1>
        <p>A portfolio</p>
    </header>
    <?php include 'nav.php' ?>

    <main>
        <section id="about-me">
            <h2>About me</h2>
            <p> My name is Zakariyya Kadri and I am a 1<sup>st</sup> year student, studying Computer Science (BSc) at Queen Mary's University of London. </p>
            <figure>
                <img src="res/zak.jpeg" alt="Photo of me smiling with a light gradient across my face">
                <figcaption>A photo of me, Zakariyya Kadri</figcaption>
            </figure>
        </section>

        <section id="experience">
            <h2>My experience</h2>
            <p>While I have no formal experience in software development, that does not mean I have no experience full stop.</p>
            <p>You can see projects I've made or worked on <a href="my_works.php">here</a>.</p>
            <p>And you too can help me in this by giving me a job 😁</p>
        </section>
    </main>

    <div id="asides">
        <aside id="blog-advertisment">
            <div>
                <h2>Check out my blog!</h2>
                <p>My blog is the best way to see what I've been up to</p>
                <a href="viewBlog.php"><p>Find it here</p></a>
            </div>
        </aside>
        
        <aside id="skills-achievements">
            <div>
                <h2>My skills (and other achievements</h2>

                <h3>Skills</h3>
                <ol>
                    <li>HTML, CSS, and JavaScript</li>
                    <li>PHP</li>
                    <li>C/C++</li>
                    <li>SQL</li>
                    <li>Python</li>
                    <li>...and more!</li>
                </ol>

                <h3>Achievements</h3>
                <ul>
                    <li>I have done a Virtual Learning Experience during University</li>
                </ul>
            </div>
        </aside>
    </div>

    <?php include 'footer.php' ?>
</body>

</html>

