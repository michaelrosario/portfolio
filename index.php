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
    <link rel="stylesheet" type="text/css" href="resources/css/reset.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/foundation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    
</head>
<body>

    <div id="sitewrapper">
        <div class="masthead">

            
            <div class="clearfix" style="height: 1px;"></div>
        
            
            <h1>Michael Rosario</h1>
            <span class="my-title">Web Designer & Developer</span>
            
            
            <div class="passion">I am passionate about <span class="message"></span>.</div>

           
            <div class="social">
                <div class="socialicon"><a href="https://www.linkedin.com/in/michaelrosario" target="_blank"><ins class="fa fa-linkedin" /></a></div>
                <div class="socialicon"><a href="https://www.twitter.com/michael_rosario" target="_blank"><ins class="fa fa-twitter" /></a></div>
                <div class="socialicon"><a href="https://www.github.com/michaelrosario" target="_blank"><ins class="fa fa-git" /></a></div>
                <div class="socialicon"><a href="mailto:mail@michaelrosario.com" target="_blank"><ins class="fa fa-envelope-o" /></a></div>
            </div>
         </div>
    </div>
   



    <script src="resources/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="resources/js/vendor/what-input.js"></script>
    <script src="resources/js/vendor/typed.min.js"></script>
    <script src="resources/js/vendor/foundation.min.js"></script>
    <script src="resources/js/app.js"></script>
    
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