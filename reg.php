<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "reg1.php" method="post">
    <main>
   <fieldset>
    <legend> Регистрация</legend>
    <label>Имя<input type="text"   name="username" required ></label> <br>
    <label>Фамилия<input type="text"  name="Surname" required></label> <br>
    <label>Отчесвто<input type="text" name="Middlename" required></label><br>
    <label>Логин <input type="text"  name="Login"></label><br>
    <label>Пароль<input type="password"  name="Password"  required></label><br>
    <label>E-mail<input type="email"  name="Email" required></label><br>
    <label>Номер телефона <input type="text"   name="number"></label><br>
    <input name="submit" type = "submit"  class="button" placeholder="Регистрация"> 
</fieldset>
</main>
</form>

</body>
</html>
