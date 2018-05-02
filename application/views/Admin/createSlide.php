<h1>Создать слайд:</h1>
<form action="/admin/createslide" method="POST">
    <input type="text" name="title" placeholder="Заголовок слайда" required>
    <textarea name="text" placeholder="Текст слайда" required></textarea>
    <input type="text" name="id_state" placeholder="ID статьи" required>
    <input type="text" name="image" placeholder="Ссылка на картинку: (оставьте пустой для стандартной картинки)">
    <input type="submit" class="button button-pill button-primary" name="submit" value="Создать слайд">
</form>
