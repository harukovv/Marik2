<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <p>Марка:
    <input type="text" name="stamp" /></p>
    <p>Модель:
    <input type="text" name="model" /></p>
    <p>Оценка:
    <input type="text" name="Evaluation" /></p>
    <input name="submit" type = "submit"  class="button" placeholder="Опубликовать">
</form>
<?php
session_start();
$userid = $_SESSION["Avtoriz"];
echo $userid;
if (isset ($_POST["stamp"])&& isset ($_POST["model"])&& isset ($_POST["Evaluation"])){
    $conn = new mysqli("localhost", "root", "", "Avtoteka");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $stamp = $conn->real_escape_string($_POST["stamp"]);
    $model = $conn->real_escape_string($_POST["model"]);
    $Evaluation = $conn->real_escape_string($_POST["Evaluation"]);
    $sql = "INSERT INTO Evaluation (stamp,model, Evaluation, user_id) VALUES ('$stamp', '$model','$Evaluation', $userid)";
    if($conn->query($sql)){
        header("location:index.php");
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}
