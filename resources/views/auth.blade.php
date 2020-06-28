<h1>Страница входа</h1>
<form action="" class="flex">
    @csrf
    <label for="name-id"><input id="name-id" type="text">Логин:</label>
    <label for="title-id"><input id="title-id" type="text">Пароль:</label>
    <label for="description-id">Описание:<input id="description-id" type="text"></label>
    <label for="save-login">Запомнить вход<input id="save-login" type="checkbox"/></label>
    <input type="submit" id="submit" value="Войти"/>
</form>
