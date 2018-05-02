<? if (!$state) echo "<h1>Статья не найдена!</h1>";
else {
  echo '
  <img src="/public/images/'.$state[0]["image"].'" alt="'.$state[0]["image"].'">
  <div class="content">
    <h1>'.$state[0]["title"].'</h1>
    <p>'.$state[0]["text"].'</p>
    <hr>
    <span>Дата публикации: '.$state[0]["date"].'</span>
  </div>
  ';
}

?>
