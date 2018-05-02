<h1>Создать статью:</h1>
<form action="/admin/createstate" method="POST">
    <p><input type="text" name="title" placeholder="Заголовок" required></p>
    <p><textarea name="primary_text" placeholder="Вступительный текст" required></textarea></p>
    <p></p>
    <textarea name="text" placeholder="Текст" required></textarea>
    <br>
    <p><select name="category" required>
      <option selected disabled>Выберите категорию: </option>
      <option value="1">Аниме</option>
      <option value="2">Игры</option>
      <option value="3">Новости</option>
    </select></p>
    <input type="text" name="image" placeholder="Ссылка на картинку: (оставьте пустой для стандартной картинки)">
    <input type="submit" class="button button-pill button-primary" name="submit" value="Создать статью">
</form>
