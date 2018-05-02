<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><? echo $title; ?></title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Roboto+Slab|Lato" rel="stylesheet">
    <link rel="stylesheet" href="/application/stylesheets/admin.css">
    <link rel="stylesheet" href="/application/stylesheets/buttons.css">
    <script type="text/javascript" src="/application/js/antroslider.js"></script><script type="text/javascript" src="/application/js/adminjs.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>
    <div id="admin_menu">
      <ul id="menu">
        <li><a href="/admin/createstate"><i class="fas fa-plus"></i>  Создать статью</a></li>
        <li><a href="/admin/createslide"><i class="fas fa-plus"></i>  Создать слайд</a></li>
        <li><a href="/admin/states"><i class="far fa-newspaper"></i>  Статьи</a></li>
        <li><a href="/admin/slides"><i class="fas fa-th-large"></i>  Слайды</a></li>
        <a href="/admin/logout"><i class="fas fa-sign-out-alt"></i>  Выйти</a>
      </ul>
    </div>
    <div id="wrapper">
      <div class="row">
        <? echo $content;?>
      </div>
    </div>
  </body>
</html>
