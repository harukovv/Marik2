
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

    echo "<td><a href='update1.php?id=" . $row["rew_ID"]."'>Изменить</a></td>";
    echo "</tr>";
}
echo "</table>";
$result->free();
}else{
echo " Ошибка:" .$conn->error;
}
$conn->close();
?>
