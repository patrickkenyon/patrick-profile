<?php

require 'admin/functions.php';

$db = connectDatabase();

$stmt = $db->query(
    "SELECT `id`,`title`, `mini_description`, `background_image`, `project_url` 
    FROM `projects`;");
$projects_data = $stmt->fetchAll();

$stmt2 = $db->query(
    "SELECT `id`, `bio_title`, `bio`, `contact_title`, `email`, `telephone`
    FROM `about_me`;");
$about_me_data = $stmt2->fetchAll();

$stmt3 = $db->query(
    "SELECT `id`, `name`, `sub_title`, `tagline`
    FROM `content`;");
$content_data = $stmt3->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patrick | Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <nav class="main-nav">
            <a href="#aboutme">About</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact info</a>
        </nav>
    </header>

    <section class="mini-profile">
        <h1><?php echo $content_data[0]["name"]; ?></h1>
        <strong><?php echo $content_data[0]["sub_title"]; ?></strong>
        <p><?php echo $content_data[0]["tagline"]; ?></p>
    </section>

    <section id="portfolio" class="project-holder">
        <?php foreach($projects_data as $project) { ?>
             <a href="<?php echo $project["project_url"]; ?>">
                <div class="project" style="background-image: url('<?php echo $project["background_image"]; ?>');">
                    <div class="project-over">
                        <div class="centre-text">
                            <h3><?php echo $project["title"]; ?></h3>
                            <p><?php echo $project["mini_description"]; ?></p>
                        </div>
                    </div>
                </div>
            </a>
        <?php } ;?>

<!---->
<!--        <div class="project project2">-->
<!--            <div class="project-over">-->
<!--                <h3>Example project</h3>-->
<!--                <p>Example text for my example project</p>-->
<!--                <p>More example text for my example project</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="project project3">-->
<!--            <div class="project-over">-->
<!--                <h3>Example project</h3>-->
<!--                <p>Example text for my example project</p>-->
<!--                <p>More example text for my example project</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="project project4">-->
<!--            <div class="project-over">-->
<!--                <h3>Example project</h3>-->
<!--                <p>Example text for my example project</p>-->
<!--                <p>More example text for my example project</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="project project5">-->
<!--            <div class="project-over">-->
<!--                <h3>Example project</h3>-->
<!--                <p>Example text for my example project</p>-->
<!--                <p>More example text for my example project</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="project project6">-->
<!--            <div class="project-over">-->
<!--                <h3>Example project</h3>-->
<!--                <p>Example text for my example project</p>-->
<!--                <p>More example text for my example project</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="project project7">-->
<!--            <div class="project-over">-->
<!--                <h3>Example project</h3>-->
<!--                <p>Example text for my example project</p>-->
<!--                <p>More example text for my example project</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="project project8">-->
<!--            <div class="project-over">-->
<!--                <h3>Example project</h3>-->
<!--                <p>Example text for my example project</p>-->
<!--                <p>More example text for my example project</p>-->
<!--            </div>-->
<!--        </div>-->
    </section>

    <section class="about-me-holder">
        <div id="aboutme" class="about-me">
            <h2><?php echo $about_me_data[0]["bio_title"]; ?></h2>
            <p><?php echo $about_me_data[0]["bio"]; ?>
            </p>
        </div>
        <div id="contact" class="contact-info">
            <h2><?php echo $about_me_data[0]["contact_title"]; ?></h2>
            Email: <a href="mailto:<?php echo $about_me_data[0]["email"]; ?>"><?php echo $about_me_data[0]["email"]; ?></a><br>
            Telephone: <a href="tel:<?php echo $about_me_data[0]["telephone"]; ?>"><?php echo $about_me_data[0]["telephone"]; ?></a>
        </div>
    </section>

</body>
</html>