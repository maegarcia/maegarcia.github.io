<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php pageTitle(); ?> | <?php siteName(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel='stylesheet prefetch' href='https://npmcdn.com/basscss@8.0.0/css/basscss.min.css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="wrap">

    <header>
        <h2><?php siteName(); ?></h2>

    </header> 
<a href="index.php?page=home">Home</a> •
<a href="index.php?page=home#projects">Projects</a> •
<a href="index.php?page=about">About</a> •
<a href="index.php?page=contact">Contact</a>
<div class="spacer" style="border-bottom:2px solid darkgray;"></div>
    <article>

        <?php pageContent(); ?>
    </article>

    <footer><small>&copy;<?php echo date('Y'); ?> <?php siteName(); ?></small></footer>

</div>
</body>
</html>