<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Zakariyya Kadri's Works</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/common_mobile.css" media="screen and (max-width: 768px)">
    <!-- <script src=""> -->
</head>

<body>
    <header>
        <h1>Zakariyya Kadri</h1>
        <p>A bibliography</p>
    </header>
    <?php include 'nav.php' ?>

    <main>
        <section id="portfolio">
            <h2>Some examples of my work</h2>
                <article>
                    <a href="https://github.com/zak1388">
                        <h3>My github</h3>
                        <figure>
                            <img src="/res/github.png" alt="image of my github profile">
                            <figcaption>My github profile, you can see the activity, and also some of my private repos</figcaption>
                        </figure>
                    </a>
                </article>

                <article>
                    <a href="https://github.com/Team-RoBlocks/RoBlocks-game">
                        <h3>The RoBlocks Project</h3>
                        <p>This is a project headed by myself and my friend Chee-ho</p>
                        <figure>
                            <img src="/res/roblocks.png" alt="an image of cheeho demostrating early terrain-gen">
                            <figcaption>This is from early testing of our basic terrain gen when me and chee-ho had ironed out a lot of the initial bugs with gen</figcaption>
                        </figure>
                    </a>
                </article>

                <article>
                    <a href="https://github.qmul.ac.uk/ec22617">
                        <h3>My university github</h3>
                        <p>I'm not actually sure whether this is publically accessible, but I also have projects on my university's github</p>
                        <figure>
                            <img src="/res/uni_github.png" alt="an image of my univeristy github profile">
                            <figcaption>From the image you can see my contribution history, which is a little more active right now than my personal github. Alongside which, you can also see a few of my commits and PRs</figcaption>
                        </figure>
                    </a>
                </article>
        </section>
    </main>

    <?php include 'footer.php' ?>
</body>

</html>

