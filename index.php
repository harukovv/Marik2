<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
        <?php
            session_start();
            $userid=$_SESSION['Avtoriz'];
$conn = new mysqli("localhost", "root", "", "Avtoteka");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM Users WHERE IDUsers=$userid";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк

    foreach($result as $row){
      
            echo $row["Names"] . " "; 
            echo $row["Surname"]  . " ";
            echo $row["Middlename"] . " "; 
        
    }
   
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
  <header>
        <nav>
          <ul class="navigation">
            <li><a href="admin.php">Панель администратора</a></li>
            <li><a href="Rewievs.php">Оставить отзыв</a></li>
            <li><a href="otzov.php">Оотзыв</a></li>
            <li><a href="reg.php">Регистрация</a></li>
            <li class="nomer"><a href="Avtoriz.php">Авторизация</a></li>
            <li  class="btn"><a href="logout.php">Выйти</a></li>
          </ul>
         
        </nav>

      </header>
</body>
</html>