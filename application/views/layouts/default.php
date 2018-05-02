<html>
  <head>
    <meta charset="utf-8">
    <title><? echo $title; ?></title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/application/stylesheets/default.css">
    <link rel="stylesheet" href="/application/stylesheets/buttons.css">
    <link rel="stylesheet" href="/application/stylesheets/antroslider.css">
    <script type="text/javascript" src="/application/js/antroslider.js"></script><script type="text/javascript" src="/application/js/defaultjs.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  </head>
  <body>
    <header id="header">
      <div class="row">
        <div class="logo"><a href="/"><h1>Blog</h1></a></div>
      </div>
    </header>
    <nav id="nav">
      <div class="row">
        <ul id="main_menu">
          <li>Статьи
            <ul class="sub_menu">
              <li><a href="/states/anime">Аниме</a></li>
              <li><a href="/states/games">Игры</a></li>
              <li><a href="/states/news">Новости</a></li>
            </ul>
            </li>
          <li><a href="/about">О сайте</a></li>
        </ul>
      </div>
    </nav>
    <div id="wrapper">
      <div class="row">
        <? echo $content;?>
      </div>
    </div>
    <footer id="footer">
        <p>Все права защищены! &copy; <? echo date (Y) ?></p>
    </footer>
  </body>
</html>
