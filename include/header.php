<?php
$root = "/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "format-detection" content = "telephone=no">
    <meta name="description" content="Crown - A Digital Asset and Application Platform"/>
    <meta name="keywords" content="Crown - A Digital Asset and Application Platform currency, cryptocurrency"/>
    <meta name="author" content="Crown" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Crown - A Digital Asset and Application Platform" />
    <meta property="og:description" content="Crown - A Digital Asset and Application Platform" />
    <meta property="og:url" content="http://www.crown.tech/" />
    <meta property="og:site_name" content="Crown - A Digital Asset and Application Platform" />
    <meta property="og:image" content="http://www.crown.tech/media/share/share.jpg" />

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $root ?>media/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $root ?>media/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $root ?>media/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $root ?>media/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $root ?>media/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $root ?>media/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $root ?>media/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $root ?>media/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $root ?>media/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php echo $root ?>media/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo $root ?>media/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo $root ?>media/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo $root ?>media/favicons/android-chrome-192x192.png" sizes="192x192">
    <meta name="msapplication-square70x70logo" content="./media/favicons/smalltile.png" />
    <meta name="msapplication-square150x150logo" content="./media/favicons/mediumtile.png" />
    <meta name="msapplication-wide310x150logo" content="./media/favicons/widetile.png" />
    <meta name="msapplication-square310x310logo" content="./media/favicons/largetile.png" />

    <link href="./css/style.css" rel="stylesheet" type="text/css">

    <title>Crown - A Digital Asset and Application Platform</title>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91164606-1', 'auto');
  ga('send', 'pageview');

</script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="application/javascript" src="./js/jquery-3.1.1.min.js"></script>
    <script type="application/javascript" src="./js/loading.js"></script>
</head>
<body>
<div class="loading">
    <div class="loading-anim">
        <img class="border" alt="crown logo" src="./media/loading/border.png">
        <img class="logo" alt="crown logo" src="./media/loading/logo.png">
    </div>
</div>
<header>

    <a class="brand" href="<?php echo $root ?>">
        <div class="logo">
            <img class="border" src="./media/graphic/logo/logo-border.png">
            <img class="logo" src="./media/graphic/logo/logo-header.png">
        </div>
    </a>

    <?php include "./include/top-buttons.php"; ?>

    <div class="menu-toggle">
        <div class="closed">
            <span class="top">M</span>
            <span class="bottom">E</span>
            <span class="top">N</span>
            <span class="bottom">U</span>
        </div>
    </div>

    <div class="main-menu">
        <div class="main-menu-inner">
            <a class="brand" href="<?php echo $root ?>">
                <div class="logo">
                    <img class="border" src="./media/graphic/logo/logo-border.png">
                    <img class="logo" src="./media/graphic/logo/logo-header.png">
                </div>
            </a>

            <?php include "./include/top-buttons.php"; ?>

            <div class="menu-toggle opened">
                <div class="opened">
                    <span class="top">C</span>
                    <span class="bottom">L</span>
                    <span class="top">O</span>
                    <span class="bottom">S</span>
                    <span class="top">E</span>
                </div>
            </div>

            <div class="primary">
                <span class="title">Main menu</span>
                <nav>
                    <ul role="navigation">
                        <li><a href="<?php echo $root ?>wallet.php" data-text="Download wallet">Download wallet</a></li>
                        <li><a href="<?php echo $root ?>trade-crown.php" data-text="Trade crown">Trade crown</a></li>
                        <li><a href="<?php echo $root ?>thrones.php" data-text="Set up a throne">Set up a throne</a></li>
                        <li><a href="<?php echo $root ?>merge-mine.php" data-text="Merge mine crown">Merge mine crown</a></li>
                        <li><a href="<?php echo $root ?>timestamp.php" data-text="Timestamp a document">Timestamp a document</a></li>
                        <li><a href="<?php echo $root ?>register-your-name.php" data-text="Register your name">Register your name</a></li>
                    </ul>
                </nav>
            </div>
            <div class="secondary">
                <div class="neon-top"></div>
                <div class="neon-left"></div>
                <div class="neon-bottom"></div>
                <div class="each">
                    <h5>Learn and <br>get involved</h5>
                    <ul>
                        <li><a href="<?php echo $root ?>about-crown.php">about crown</a></li>
                        <li><a href="<?php echo $root ?>how-it-works.php">how it works</a></li>
                        <li><a href="<?php echo $root ?>get-involved.php">get involved</a></li>
                        <li><a href="<?php echo $root ?>history.php">our history</a></li>
                        <li><a href="<?php echo $root ?>our-team.php">our team</a></li>
                    </ul>
                </div>
                <div class="each">
                    <h5>Community <br>and Blockchain</h5>
                    <ul>
                        <li><a href="https://bitcointalk.org/index.php?topic=815487.0" target="_blank">forum & community</a></li>
                        <li><a href="<?php echo $root ?>block-explorer.php">Block explorers</a></li>
                        <li><a href="https://github.com/Crowndev/crowncoin" target="_blank">Crown on github</a></li>
                    </ul>
                </div>
                <div class="each">
                    <h5>Crown <br>revolution</h5>
                    <ul>
                        <li><a href="<?php echo $root ?>crown-revolution.php">where are we going?</a></li>
                        <li><a href="<?php echo $root ?>whitepapers.php">crown whitepapers</a></li>
                        <li><a href="<?php echo $root ?>personal-crypto.php">Real crypto stories</a></li>
                    </ul>
                </div>
            </div>

            <?php
                include "./include/soc-sites.php";
                include "./include/copyright.php";
            ?>
        </div>
    </div>

</header>