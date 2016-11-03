<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title>{$title}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <meta name="theme-color" content="#00795f">
        
        <link rel="icon" sizes="192x192" href="img/logo.png">
        <link rel="stylesheet" href="css/main.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <link rel="alternate" type="application/rss+xml" href="http://21281.hosts.ma-cloud.nl" title="Personal Trainer"> 

    </head>
    <body>
    <header>
        <b style="font-size: 35px"><a class="title_header" href="?action=home">Personal Trainer</a></b><br>
        <a class="title_header title_header_under" href="?action=home">Alles over fitness en trainen voor jou</a>
    </header>
    <nav>
        <ul>
            <a href="?action=home"><li>Home</li></a></li>
            <a href="?action=about"><li>About</li></a>
            <a href="?action=schedule"><li>Schema</li></a>
            <a href="?action=contact"><li>Contact</li></a>
        </ul>
        <div class="handle">
            <a>Menu</a>
            <a class="menu">||||</a>
        </div>
    </nav>

    <script>
        $('.handle').on('click', function(){
            $('nav ul').toggleClass('showing');
        });
    </script>