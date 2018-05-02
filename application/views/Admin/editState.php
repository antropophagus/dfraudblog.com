<? if (!$state) die ('Статья не найдена! <a href="/admin/states">Вернуться</a>')?>
<h1>Редактировать статью:</h1>
<form action="/admin/editstate/<?echo $state[0]["id"]; ?>" method="POST">
    <p><input value="<? echo $state[0]["title"]; ?>" type="text" name="title" placeholder="Заголовок" required></p>
    <p><textarea name="primary_text" placeholder="Вступительный текст" required><? echo $state[0]["primary_text"]; ?></textarea></p>
    <p></p>
    <textarea name="text" placeholder="Текст" required><? echo $state[0]["text"]; ?></textarea>
    <br>
    <p><select name="category" required>
      <option selected disabled>Выберите категорию: </option>
      <option value="1">Аниме</option>
      <option value="2">Игры</option>
      <option value="3">Новости</option>
    </select></p>
    <input type="text" name="image" placeholder="Ссылка на картинку: (оставьте пустой для стандартной картинки)">
    <input type="submit" class="button button-pill button-primary" name="submit" value="Сохранить">
</form>
