<?php
function Minify_Html($Html)
{
   $Search = array(
    '/(\x20+|\t)/', # Delete multispace (Without \n)
    '/\>\s+\</', # strip whitespaces between tags
    '/(\"|\')\s+\>/', # strip whitespaces between quotation ("') and end tags
    '/=\s+(\"|\')/',
    '/\s+\n/',
    '/\n\s+/'); # strip whitespaces between = "'

   $Replace = array(
    " ",
    "><",
    "$1>",
    "=$1",
    "",
    "");

$Html = preg_replace($Search,$Replace,$Html);
return $Html;
}
ob_start("Minify_Html");?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Michael Rosario - Web Designer and Developer</title>
    <link rel="stylesheet" type="text/css" href="/resources/css/reset.css">
    
    <link rel="stylesheet" type="text/css" href="/resources/css/foundation.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/resources/css/style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<meta name="description" content="Michael Rosario is a Web Designer and Developer." />
    <meta name="keywords" content="developer,designer,css,sass,ui,ux,code" />
    
	<meta property="og:title" content="Michael Rosario" />
	<meta property="og:type" content="website"/>
	<meta property="og:description" content="Michael Rosario is a Web Designer and Developer." />
	<meta property="og:url" content="http://www.michaelrosario.com" />

    <noscript>
        <style>
            body, html { height: 100%; }
        </style>
    </noscript>
    
</head>
<body> 

    <div class="my-logo">
        <h1>Michael Rosario</h1>
    </div>

    <div id="intro" class="wrapper">
        <div class="masthead">

        
            <div class="my-info">
                <h1>Michael Rosario</h1>
                <span class="my-title">Web Designer & Developer</span>
                <div class="clearfix" style="height: 50px;"></div>
            </div>
            <div class="social">
                <div class="socialicon">
                    <a href="https://www.linkedin.com/in/michaelrosario" target="_blank">
                        <ins class="fab fa-linkedin-in" />
                    </a>
                </div>
                <div class="socialicon"><a href="https://www.twitter.com/michael_rosario" target="_blank"><ins class="fab fa-twitter" /></a></div>
                <div class="socialicon"><a href="https://www.github.com/michaelrosario" target="_blank"><ins class="fab fa-git" /></a></div>
                <div class="socialicon"><a href="mailto:mail@michaelrosario.com" target="_blank"><ins class="far fa-envelope" /></a></div>
            </div>
           
         </div>

        <div class="learn-more learnMain">
            <a href="#" class="serif scrollTo" data-target="about-me">Learn More<br /><ins class="fas fa-chevron-down" /></a>
        </div>

    </div>
   

    <div id="about-me" class="wrapper">

        <div class="passion">I am passionate about <span class="message"></span></div>

        <div class="about-text">

            <p>
            Michael is a full stack developer and has a decade of industry experience under his belt. Driven by his passion for his work, he strives to provide creative online solutions for each client. He takes great pride in his work and is committed to creating scalable features and building clean, responsive designs.
            </p>
            <p>He has an art background from Fiorello H. Laguardia High School of Music and Art & Performing Arts and a Computer Engineering degree from the City College of New York.</p>

            <p>Worked in IT for 6 years and another 6 years working at a Award-winning Web development agency.</p>

            <p>He then started Elemento, Inc. in 2014, working and looking for cool projects to work on and make online work for businesses and others alike.</p>

        </div>
        <div class="clearfix"></div>
        <a class="resume-download" href="/resume/michael-rosario-resume.pdf" download="michael-rosario-resume.pdf">
            <i class="fas fa-file-download"></i> 
            &nbsp; Download Resume
        </a>


    </div>

    <div id="tools" class="wrapper">

        <h3>I use a plethora of softwares and tools to efficiently create websites:</h3>
        
        <ul class="toolbelt">
            <li><a href="https://www.github.com" target="_blank"><ins class="fab fa-github" /></a></li>
            <li><a href="http://www.php.net/" target="_blank"><ins  class="fab fa-php"/></a></li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS3" target="_blank"><ins class="fab fa-css3" /></a></li>
            <li><a href="https://db.tt/YT35VfbH" target="_blank"><ins class="fab fa-dropbox" /></a></li>
            <li><a href="https://www.w3schools.com/html/html5_intro.asp" target="_blank"><ins class="fab fa-html5" /></a></li>
            <li><a href="https://www.apple.com/" target="_blank"><ins class="fab fa-apple" /></a></li>
            <li><a href="https://www.slack.com/" target="_blank"><ins class="fab fa-slack" /></a></li>
            <li><a href="https://nodejs.org/en/" target="_blank"><ins class="fab fa-node-js"/></a></li>
            <li><a href="https://www.npmjs.com/" target="_blank"><ins class="fab fa-npm"/></a></li> 
        </ul>

    </div>  

    <div id="portfolio" class="wrapper">
        <div class="my-logo">
            <h1>Michael Rosario</h1>
        </div>

        <div class="portfolio-content">
            <h3>Portfolio</h3>
            <ul class="portFolioItems">
                    <li>
                        <a href="https://michaelrosario.github.io/Word-Guess-Game/" target="_blank">
                            <span class="cover">
                                <img src="./resources/images/portfolio-word_guess_game.png" alt="Word Guess Game">
                            </span>
                            Word Guess Game
                        </a>
                        <a class="view-in-github" href="https://github.com/michaelrosario/Word-Guess-Game" target="_blank"><ins class="fab fa-github"></ins> view in github</a>
                    </li>
                    <li>
                        <a href="https://michaelrosario.github.io/unit-4-game/" target="_blank">
                            <span class="cover">
                                 <img src="./resources/images/portfolio-star_wars.png" alt="Star Wars RPG">
                            </span>
                            Star Wars RPG
                        </a>
                        <a class="view-in-github" href="https://github.com/michaelrosario/unit-4-game" target="_blank"><ins class="fab fa-github"></ins> view in github</a>
                    </li>
                    <li>
                        <a href="https://michaelrosario.github.io/TriviaGame" target="_blank">
                            <span class="cover">
                                 <img src="./resources/images/portfolio-trivia.png" alt="Animal Trivia">
                            </span>
                            Animal Trivia
                        </a>
                        <a class="view-in-github" href="https://github.com/michaelrosario/TriviaGame" target="_blank"><ins class="fab fa-github"></ins> view in github</a>
                    </li>
                    <li>
                        <a href="https://michaelrosario.github.io/GifTastic/index.html" target="_blank">
                                <span class="cover">
                                     <img src="./resources/images/portfolio-gifstastic.png" alt="Giphy">
                                </span>
                                GifTastic
                        </a>
                        <a class="view-in-github" href="https://github.com/michaelrosario/GifTastic" target="_blank"><ins class="fab fa-github"></ins> view in github</a>
                    </li>
                     <li>
                        <a href="https://michaelrosario.github.io/RPS-Multiplayer/index.html" target="_blank">
                                <span class="cover">
                                     <img src="./resources/images/portfolio-rps.jpg" alt="RPS Multiplayer">
                                </span>
                                Rock Paper Scissors
                        </a>
                        <a class="view-in-github" href="https://github.com/michaelrosario/RPS-Multiplayer" target="_blank"><ins class="fab fa-github"></ins> view in github</a>
                    </li>
                    <li>
                        <a href="https://workrimot.com/index.html" target="_blank">
                                <span class="cover">
                                     <img src="./resources/images/portfolio-workrimot.png" alt="Work Rimot">
                                </span>
                                WorkRimot - Real-time checkins!
                        </a>
                        <a class="view-in-github" href="https://github.com/michaelrosario/Bootcamp-Project-01" target="_blank"><ins class="fab fa-github"></ins> view in github</a>
                    </li>
                    <li>
                        <a href="https://github.com/michaelrosario/Hey-LIRI" target="_blank">
                                <span class="cover">
                                     <img src="./resources/images/portfolio-liri.png" alt="portfolio-liri">
                                </span>
                                LIRI - Node CLI
                        </a>
                        <a class="view-in-github" href="https://github.com/michaelrosario/Hey-LIRI" target="_blank"><ins class="fab fa-github"></ins> view in github</a>
                    </li>
                    <li>
                        <a href="https://github.com/michaelrosario/Constructor-Word-Guess" target="_blank">
                                <span class="cover" style="background: url(./resources/images/portfolio-cli-word-guess.gif); background-size: cover;"> 
                                     <img style="opacity: 0;" src="./resources/images/portfolio-cli-word-guess.gif" alt="portfolio-liri">
                                </span>
                                Word Guess Game - Node CLI
                        </a>
                        <a class="view-in-github" href="https://github.com/michaelrosario/Constructor-Word-Guess" target="_blank"><ins class="fab fa-github"></ins> view in github</a>
                    </li>
                    <li>
                        <a href="https://github.com/michaelrosario/Bamazon" target="_blank">
                                <span class="cover" style="background: url(./resources/images/portfolio-bamazon.gif); background-size: cover;">
                                     <img style="opacity: 0;" src="./resources/images/portfolio-bamazon.gif" alt="portfolio-liri">
                                </span>
                                Bamazon Store - Node CLI
                        </a>
                        <a class="view-in-github" href="https://github.com/michaelrosario/Bamazon" target="_blank"><ins class="fab fa-github"></ins> view in github</a>
                    </li>
                    <li>
                        <a href="https://still-scrubland-81933.herokuapp.com/" target="_blank">
                                <span class="cover" style="background: url(./resources/images/portfolio-friend_finder.png); background-size: cover;">
                                     <img style="opacity: 0;" src="./resources/images/portfolio-friend_finder.png" alt="portfolio-friend-finder">
                                </span>
                               Friend Finder
                        </a>
                        <a class="view-in-github" href="https://github.com/michaelrosario/FriendFinder" target="_blank"><ins class="fab fa-github"></ins> view in github</a>
                    </li>
                    <li>
                        <a href="https://quiet-peak-57360.herokuapp.com/" target="_blank">
                                <span class="cover" style="background: url(./resources/images/portfolio-burger.png); background-size: cover;">
                                     <img style="opacity: 0;" src="./resources/images/portfolio-burger.png" alt="portfolio-burger.png">
                                </span>
                               Burger [ORM]
                        </a>
                        <a class="view-in-github" href="https://github.com/michaelrosario/burger" target="_blank"><ins class="fab fa-github"></ins> view in github</a>
                    </li>
                    <li>
                        <a href="https://agile-chamber-55817.herokuapp.com/" target="_blank">
                                <span class="cover" style="background: url(./resources/images/portfolio-sequelize-burger.png) center; background-size: cover;">
                                     <img style="opacity: 0;" src="./resources/images/portfolio-sequelize-burger.png" alt="portfolio-burger.png">
                                </span>
                               Burger [Sequelize]
                        </a>
                        <a class="view-in-github" href="https://github.com/michaelrosario/burger-2" target="_blank"><ins class="fab fa-github"></ins> view in github</a>
                    </li>
                    <li>
                        <a href="https://glacial-lowlands-74668.herokuapp.com/" target="_blank">
                                <span class="cover" style="background: url(./resources/images/portfolio-lazeeweb.png) center; background-size: cover;">
                                     <img style="opacity: 0;" src="./resources/images/portfolio-lazeeweb.png" alt="portfolio-lazeeweb.png">
                                </span>
                               LazeeWeb [Project 2]
                        </a>
                        <a class="view-in-github" href="https://github.com/shye11/project-2" target="_blank"><ins class="fab fa-github"></ins> view in github</a>
                    </li>
                    <li>
                        <a href="https://gentle-spire-23140.herokuapp.com/" target="_blank">
                                <span class="cover" style="background: url(./resources/images/portfolio-scrapements.png) center; background-size: cover;">
                                     <img style="opacity: 0;" src="./resources/images/portfolio-scrapements.png" alt="portfolio-scrapements.png">
                                </span>
                                scrapements [MongoDB]
                        </a>
                        <a class="view-in-github" href="https://github.com/michaelrosario/scrapements" target="_blank"><ins class="fab fa-github"></ins> view in github</a>
                    </li>
                    <li>
                        <a href="https://michaelrosario.github.io/clickygame/" target="_blank">
                                <span class="cover" style="background: url(./resources/images/portfolio-clicky.gif) center; background-size: cover;">
                                     <img style="opacity: 0;" src="./resources/images/portfolio-clicky.gif" alt="portfolio-clicky.gif">
                                </span>
                                Clicky Game [React]
                        </a>
                        <a class="view-in-github" href="https://github.com/michaelrosario/clickygame" target="_blank"><ins class="fab fa-github"></ins> view in github</a>
                    </li>


                    
                </ul>

        </div>
        



    </div>  


    <script src="resources/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="resources/js/vendor/what-input.js"></script>
    <script src="resources/js/vendor/typed.min.js"></script>
    <script src="resources/js/vendor/foundation.min.js"></script>
    <script src="resources/js/app-min.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124529822-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-124529822-1');
    </script>

</body>
</html>