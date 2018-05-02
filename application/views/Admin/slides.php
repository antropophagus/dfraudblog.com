<h1>Слайды</h1>
<? if(!$slides) echo '<h1>Слайдов пока нет!</h1>'?>
<?php foreach ($slides as $slide): ?>
<h1><? echo $slide["title"]; ?> <a href="/admin/deleteSlide/<? echo $slide["id"]; ?>"><i class="fas fa-trash-alt"></i></a> <a href="/admin/editSlide/<? echo $slide["id"]; ?>"><i class="fas fa-edit"></i></a></h1>
<p><? echo $slide["text"]; ?></p>
<img src="/public/images/<? echo $slide["image"]; ?>" alt="">
<?php endforeach; ?>
