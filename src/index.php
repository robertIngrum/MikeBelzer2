<!DOCTYPE html>

<?php
    // Building the tagline for the header
    $taglines = array("A place for things", "By the other Robert", "0 Days Since Last Accident");
    $chosen_tagline = $taglines[array_rand($taglines, 1)];

    // Setting the timezone
    date_default_timezone_set('UTC');
?>

<html>
    <head>
        <title>For Us, The Living - <?php echo $chosen_tagline ?></title>

        <link rel="icon" type="img/ico" href="static/images/favicon.ico" />

        <link href='https://fonts.googleapis.com/css?family=Bitter:400,400italic,700' rel='stylesheet' type='text/css' />
        <link href="static/style/base.css" rel="stylesheet" type="text/css" />

        <script src="static/libs/jquery/jquery-2.1.4.min.js" type="application/javascript"></script>
        <script src="static/scripts/drawings.js" type="application/javascript"></script>
    </head>
    <body>
        <section id="header">
            <h1><span class="title-part-1">For Us,</span> <span class="title-part-2">The Living</span></h1>
            <h3><?php echo $chosen_tagline ?></h3>

            <div class="resume">
                <img class="text" src="static/images/resume_text.svg" alt="Click here to view my resume!" />
                <img class="arrow" src="static/images/arrow.svg" alt="arrow" />
                <img class="paper" src="static/images/paper.svg" alt="paper" />
                <img class="circle" src="static/images/circle.svg" alt="circle" />
            </div>
        </section>
        <section id="about">
            <p>
                Hello!
            </p>
            <p>
                My name's Robert Ingrum and I'm a  developer currently living in beautiful Boulder, Colorado.
                This is my personal website and will serve as a hub of sorts for all sorts of fun
                and interesting content that I'm involved with.  For example,
                you can find a link to the startup I'm currently working with below under
                <a href="#projects">Projects</a>.
            </p>
            <p>
                I also do freelancing and consulting, so if you're in the market for an experienced programmer / designer /
                system administrator, look no further!  Shoot me an email at
                <a href="mailto:robert@forustheliving.com">robert@forustheliving.com</a>.  You can find my professional
                resume at the top right of the window if you'd like a more official background.
            </p>
        </section>
        <section id="projects">
            <h2>Projects</h2>
            <div class="project-list">
                <a href="https://www.bonus.ly"
                   style="background-image: url('static/images/projects/bonusly.png')"
                   target="_blank">
                    <span>Bonusly</span>
                </a>
                <a href="https://www.purplewall.com"
                   style="background-image: url('static/images/projects/purplewall.png');"
                   target="_blank">
                    <span>PurpleWall</span>
                </a>
                <a href="https://blog.purplewall.com"
                   style="background-image: url('static/images/projects/purplewall_blog.png');"
                   target="_blank">
                    <span>PurpleWall Blog</span>
                </a>
                <a href="http://www.holmesautopilot.com/"
                   style="background-image: url('static/images/projects/holmes_autopilot.png');"
                   target="_blank">
                    <span>Holmes AutoPilot</span>
                </a>
                <a href="https://biz.colostate.edu"
                   style="background-image: url('static/images/projects/csu.png');"
                   target="_blank">
                    <span>Colorado State University</span>
                </a>
                <a href="http://www.mikebelzer.com"
                   style="background-image: url('static/images/projects/mikebelzer.png');"
                   target="_blank">
                    <span>MikeBelzer.com</span>
                </a>
            </div>
        </section>
        <section id="footer">
            <p>
                That's it!  If you'd like more you can check out my
                <a href="http://blog.forustheliving.com" target="_blank">blog</a> or send me an email at
                <a href="mailto:robert@forustheliving.com">robert@forustheliving.com</a>.
            </p>
        </section>
    </body>
</html>