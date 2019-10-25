
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
    <meta name="coderhype" content="5d26659b551e35002abe7c7f"></meta>
    
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
            <li><a href="https://reactjs.org/" target="_blank"><ins class="fab fa-react"/></a></li> 
        </ul>

    </div>  

    <div id="portfolio" class="wrapper">
        <div class="my-logo">
            <h1>Michael Rosario</h1>
        </div>

        <div class="portfolio-content">
            <h3>Bootcamp Portfolio</h3>

            <ul class="portFolioItems"><!-- Dynamically Added --></ul>

        </div>
        
    </div>  


    <script src="resources/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="resources/js/vendor/what-input.js"></script>
    <script src="resources/js/vendor/typed.min.js"></script>
    <script src="resources/js/vendor/foundation.min.js"></script>
    <script src="resources/js/app-min.js"></script>
    
    <script>
        $(document).ready(function(){
            let portfolio = [
                    {
                        title: "Word Guess Game",
                        image: "./resources/images/portfolio-word_guess_game.png",
                        link: "https://michaelrosario.github.io/Word-Guess-Game/",
                        github: "https://github.com/michaelrosario/Word-Guess-Game"
                    },
                    {
                        title: "Star Wars RPG",
                        image: "./resources/images/portfolio-star_wars.png",
                        link: "https://michaelrosario.github.io/unit-4-game/",
                        github: "https://github.com/michaelrosario/unit-4-game"
                    },
                    {
                        title: "Animal Trivia",
                        image: "./resources/images/portfolio-trivia.png",
                        link: "https://michaelrosario.github.io/TriviaGame",
                        github: "https://github.com/michaelrosario/TriviaGame"
                    },
                    {
                        title: "GifTastic",
                        image: "./resources/images/portfolio-gifstastic.png",
                        link: "https://michaelrosario.github.io/GifTastic/index.html",
                        github: "https://github.com/michaelrosario/GifTastic"
                    },
                    {
                        title: "Rock Paper Scissors",
                        image: "./resources/images/portfolio-rps.jpg",
                        link: "https://michaelrosario.github.io/RPS-Multiplayer/index.html",
                        github: "https://github.com/michaelrosario/RPS-Multiplayer"
                    },
                    {
                        title: "Rimot",
                        image: "./resources/images/portfolio-workrimot.png",
                        link: "https://workrimot.com/index.html",
                        github: "https://github.com/michaelrosario/Bootcamp-Project-01"
                    },
                    {
                        title: "LIRI - Node CLI",
                        image: "./resources/images/portfolio-liri.png",
                        link: "https://github.com/michaelrosario/Hey-LIRI",
                        github: "https://github.com/michaelrosario/Hey-LIRI"
                    },
                    {
                        title: "Word Guess Game - Node CLI",
                        image: "./resources/images/portfolio-cli-word-guess.gif",
                        link: "https://github.com/michaelrosario/Constructor-Word-Guess",
                        github: "https://github.com/michaelrosario/Constructor-Word-Guess"
                    },
                    {
                        title: "Bamazon Store - Node CLI",
                        image: "./resources/images/portfolio-bamazon.gif",
                        link: "https://github.com/michaelrosario/Bamazon",
                        github: "https://github.com/michaelrosario/Bamazon"
                    },
                    {
                        title: "Friend Finder",
                        image: "./resources/images/portfolio-friend_finder.png",
                        link: "https://still-scrubland-81933.herokuapp.com/",
                        github: "https://github.com/michaelrosario/FriendFinder"
                    },
                    {
                        title: "Burger [ORM]",
                        image: "./resources/images/portfolio-burger.png",
                        link: "https://quiet-peak-57360.herokuapp.com/",
                        github: "https://github.com/michaelrosario/burger"
                    },
                    {
                        title: "Burger [Sequelize]",
                        image: "./resources/images/portfolio-sequelize-burger.png",
                        link: "https://agile-chamber-55817.herokuapp.com/",
                        github: "https://github.com/michaelrosario/burger-2"
                    },
                    {
                        title: "LazeeWeb [Project 2]",
                        image: "./resources/images/portfolio-lazeeweb.png",
                        link: "https://glacial-lowlands-74668.herokuapp.com/",
                        github: "https://github.com/shye11/project-2"
                    },
                    {
                        title: "Scrapements [MongoDB]",
                        image: "./resources/images/portfolio-scrapements.png",
                        link: "https://gentle-spire-23140.herokuapp.com/",
                        github: "https://github.com/michaelrosario/scrapements"
                    },
                    {
                        title: "Clicky Game [React]",
                        image: "./resources/images/portfolio-clicky.gif",
                        link: "https://michaelrosario.github.io/clickygame/",
                        github: "https://github.com/michaelrosario/clickygame"
                    },
                    {
                        title: "Google Books API [MERN]",
                        image: "./resources/images/portfolio-mern.png",
                        link: "https://stark-sands-82717.herokuapp.com/",
                        github: "https://github.com/michaelrosario/google-book-search"
                    }


                ];

            portfolio.forEach(function(item){



                $(".portFolioItems").prepend(`
                    <li>
                        <a href="${item.link}" target="_blank">
                                <span class="cover" style="background: url(${item.image}) center; background-size: cover;">
                                     <img style="opacity: 0;" src="${item.image}" alt="${item.title}">
                                </span>
                                ${item.title}
                        </a>
                        <a class="view-in-github" href="${item.github}" target="_blank"><ins class="fab fa-github"></ins> view in github</a>
                    </li>
                `);

            });

        });
    </script>

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