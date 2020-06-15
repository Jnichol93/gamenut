<?php
// Include Wordpress
define('WP_USE_THEMES', false);
require('wordpress/wp-blog-header.php');
?>
<!doctype HTML>

<html>

<title> BSGaming Home/News </title>

<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta charset = "utf-8">

  <link href="home.css" type="text/css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Press+Start+2P&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>

<body>


  <div class= "topbar">


        <a href="login.php"><div class= "login"> LOGIN</div></a>
        <a href="register.php"><div class = "register"> REGISTER </div></a>

        </div>

  <nav role="navigation">

    <div id="menuToggle">



      <input type="checkbox" />



      <span></span>

      <span></span>

      <span></span>



      <ul id="menu">

        <a href ="home.html" style = background-color:"orange"><li>Home & News</li></a>

        <a href="#"><li>Platforms</li></a>

        <a href="#"><li>Podcasts</li></a>

        <a href="#"><li>Meme/Video Zone</li></a>

        <a href="#"><li>Hardware Exchange</li></a>

        <a href="#"><li>Gamers Discussion Forum</li></a>

        <a href="#"><li>Games Reviews</li></a>

<a href="#"><li>Upcoming Games</li></a>


<a href="#"><li>Content Creator Zone </li></a>

<a href="#"><li>Partners/Affiliates </li></a>

<a href="#"><li>Merchandise Store </li></a>


<a href="#"><li>Socials/Community </li></a>

<a href="#"><li>Members Area </li></a>


<a href="#"><li>Work For Us!</li></a>

<a href="#"><li>Contact Us</li></a>

<a href="#"><li>Frequently Asked Questions </li></a>


      </ul>

    </div>

  </nav>


<div class = wrapper>

<div class= heading> <h1 style= color:"RED">BSGAMING</h1>
  <h3> Browse The Latest Gaming News </h3>
</div>
<div class="wordpresscontent">


                   <?php /* Start the Loop */ ?>
                     <?php while ( have_posts() ) : the_post(); ?>

                       <?php get_template_part( 'content', get_post_format() ); ?>

                     <?php endwhile; ?>

                     <?php twentytwenty_content_nav( 'nav-below' ); ?>

 </div>

</div>















  </body> </html>
