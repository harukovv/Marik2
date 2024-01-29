<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method="post" id="form">
    <label>
        Логин:
        <input type="text" name="login">
</label>
<br> 
<label>
        Логин:
        <input type="text" name="pass">
        </label>
        <br>
        <br>
        <input type="submit" value="Войти">
</form>
<?php
if(isset($_POST['login'])&& $_POST['pass']){
    $conn=new mysqli("localhost","root","","Avtoteka");
if($conn->connect_error){
    die( "Ошибка".$conn->connect_error);
}
}
?>

<?php
$conn = new mysqli("localhost", "root", "", "Avtoteka");
if($conn->connect_error) {
die("Ошибка:" . $conn->connect_error);
}
$sql="SELECT * FROM  Evaluation";
if($result =$conn->query($sql)){
echo "<table><tr><th>Марка</th><th>Модель</th><th>Оценка</th><th></th></tr>";
foreach($result as $row){
    echo "<tr>";
    echo "<td>". $row["stamp"] . "</td>";
    echo "<td>". $row["model"] . "</td>";
    echo "<td>". $row["Evaluation"] . "</td>";

    echo "<td><a href='update1.php?id=" . $row["ID"]."'>Изменить</a></td>";
    echo "</tr>";
}
echo "</table>";
$result->free();
}else{
echo " Ошибка:" .$conn->error;
}
$conn->close();
?>

<?php
$conn = new mysqli("localhost", "root", "", "Avtoteka");
if($conn->connect_error) {
die("Ошибка:" . $conn->connect_error);
}
$sql="SELECT * FROM  Users";
if($result =$conn->query($sql)){
echo "<table><tr><th>Имя</th><th>Фамилия</th><th>Отчесвто</th>th>Логин</th><th>Пароль</th><th></th></tr>";
foreach($result as $row){
    echo "<tr>";
    echo "<td>". $row["Names"] . "</td>";
    echo "<td>". $row["Surname"] . "</td>";
    echo "<td>". $row["Middlename"] . "</td>";
    echo "<td>". $row["Login"] . "</td>";
    echo "<td>". $row["Password"] . "</td>";

    echo "<td><a href='update1.php?id=" . $row["ID"]."'>Изменить</a></td>";
    echo "</tr>";
}
echo "</table>";
$result->free();
}else{
echo " Ошибка:" .$conn->error;
}
$conn->close();
?>

</body>

</html>