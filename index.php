<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="C:\Users\use\Desktop\GlobeNow\style.css">
</head>
<body>
    <header>
        <div class= "navbar">
            <div class= "logo"><img src ="C:\Users\use\Desktop\GlobeNow\images\logo.png"></div>
            <div class= "menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Category</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">About</a></li>
        </div>
    </header>
    
    <h1>hello</h1>
    <p>are you ready</p>
    <h2>hi</h2>
    <a href "https://hpanel.hostinger.com/websites">hostinger</a>

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title('<h2>', '</h2>');
            the_content();
        endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    ?>
</body>
</html>
