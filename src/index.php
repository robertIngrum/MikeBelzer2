<!DOCTYPE html>

<?php
    // Building the tagline for the header
    $taglines = array("This tagline changes every time...", "...but we don't discriminate", "404: Tagline Not Found");
    $chosen_tagline = $taglines[array_rand($taglines, 1)];
?>

<html>
    <head>
        <title>For Us, The Living</title>

        <link href='https://fonts.googleapis.com/css?family=Bitter:400,400italic,700' rel='stylesheet' type='text/css' />
        <link href="static/style/base.css" rel="stylesheet" type="text/css" />

        <script src="static/libs/jquery/jquery-2.1.4.min.js" type="application/javascript"></script>
        <script src="static/scripts/drawings.js" type="application/javascript"></script>
    </head>
    <body>
        <section id="header">
            <h1><span class="title-part-1">For Us,</span> <span class="title-part-2">The Living</span></h1>
            <h2><?php echo $chosen_tagline ?></h2>

            <div class="resume">
                <img class="text" src="static/images/resume_text.svg" alt="Click here to view my resume!" />
                <img class="arrow" src="static/images/arrow.svg" alt="arrow" />
                <img class="paper" src="static/images/paper.svg" alt="paper" />
                <img class="circle" src="static/images/circle.svg" alt="circle" />
            </div>
        </section>
        <section id="about">

        </section>
    </body>
</html>