<h1>Редактировать статью:</h1>
<form action="admin/createstate" method="POST">
    <input type="text" name="title" placeholder="Заголовок" required>
    <textarea name="primary_text" placeholder="Вступительный текст" required></textarea>
    <textarea name="text" placeholder="Текст" required></textarea>
    <select name="category" required>
      <option selected disabled>Выберите категорию: </option>
      <option value="1">Аниме</option>
      <option value="2">Игры</option>
      <option value="3">Новости</option>
    </select>
    <input type="text" name="image" placeholder="Ссылка на картинку: (оставьте пустой для стандартной картинки)">
    <input type="submit" class="button button-pill button-primary" name="submit" value="Сохранить">
</form>
