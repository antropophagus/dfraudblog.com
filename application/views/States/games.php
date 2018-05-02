<h1>Так всю жизнь прозадротишь...</h1>
<div class="content">
<? if (!$states) echo '<h1>Упс, статей пока нет =P</h1>';?>
  <?php foreach ($states as $state): ?>
    <div class="content_item">
      <h1><a href="/state/<? echo $state["id"]; ?>"><? echo $state["title"]; ?></a></h1>
      <img src="/public/images/<? echo $state["image"]; ?>" alt="">
      <p><? echo $state["primary_text"]; ?></p>
      <span><? echo $state["date"]; ?></span>
    </div>
  <?php endforeach; ?>
</div>
