<? if (!$slide) die ('Слайд не найдена! <a href="/admin/slides">Вернуться</a>')?>
<h1>Редактировать слайд:</h1>
<form action="/admin/editslide" method="POST">
    <input type="text" value="<? echo $slide[0]["title"]; ?>" name="title" placeholder="Заголовок слайда" required>
    <textarea name="text_slide" placeholder="Текст слайда" required><? echo $slide[0]["title"]; ?></textarea>
    <input type="text" value="<? echo $slide[0]["state_id"]; ?>" name="id_state" placeholder="ID статьи" required>
    <input type="text" name="image" placeholder="Ссылка на картинку: (оставьте пустой для стандартной картинки)">
    <input type="submit" class="button button-pill button-primary" name="submit" value="Сохранить">
</form>
