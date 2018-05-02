<h1>Статьи</h1>
<? if(!$states) echo '<h1>Статей пока нет!</h1>'?>
<?php foreach ($states as $state): ?>
<h1><a href="/state/<? echo $state["id"]; ?>"><? echo $state["title"]; ?> </a><a href="/admin/deleteState/<? echo $state["id"]; ?>"><i class="fas fa-trash-alt"></i></a> <a href="/admin/editState/<? echo $state["id"]; ?>"><i class="fas fa-edit"></i></a></h1>
<p><? echo $state["primary_text"]; ?></p>
<img src="/public/images/<? echo $state["image"]; ?>" alt="">
<?php endforeach; ?>
