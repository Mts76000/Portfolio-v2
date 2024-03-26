<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" type="image/png" href="<?php echo asset("img/favicon.png"); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2&family=Nunito:ital,wght@0,200;0,300;0,400;0,700;1,700&family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="description" content="Ici vous pouvez retrouver le portfolio de Mathis Lamotte" />
    <meta name="keywords" content="HTML,CSS,PHP,JavaScript,mathis,lamotte,dev,web,portfolio">

    <?php wp_head(); ?>
</head>

<body>
<header id="masthead">
    <div class="wrap">

        <div class="logo"><h1>Mts</h1></div>
        <nav>
            <ul>
                <li class="mobile">
                    <svg id="link_burger" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path fill="#ffffff" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>

                </li>
                <li class="desk first"><a href="<?php echo path('/'); ?>">Home</a></li>
                <li class="desk"><a href="#skill">Compétences</a></li>
                <li class="desk"><a href="#work">Projets</a></li>
                <li class="desk"><a href="#contact">Contact</a></li>
            </ul>
        </nav>

    </div>

    <div id="nav_burger">
        <div class="close-icon">
            <svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg>
        </div>
        <ul>
            <li><a class="home" href="<?php echo path('/'); ?>">Home</a></li>
            <li><a class="skill" href="#skill">Skills</a></li>
            <li class="work"><a href="#work-mobil">Works</a></li>
            <li><a class="contact" href="#contact">Contact</a></li>
        </ul>
            <div class="icone">
                <a href="https://github.com/Mts76000" target="_blank" aria-label="github">
                    <i class="fa-brands fa-github-alt"></i>
                </a>
            </div>

    </div>
</header>



