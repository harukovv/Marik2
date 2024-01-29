<?php        
        if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
        {
            
            $reviewid=$conn->real_escape_string($_GET["id"]);
            $sql="SELECT * FROM Evaluation WHERE ID = '$reviewid'";
            if($result=$conn->query($sql)){
                if($result->num_rows > 0){
                    foreach($result as $row){
                        $Model= $row["Model"];
                        $Equipment= $row["Equipment"];
                        $Services= $row["Services"];
                        $review= $row["reviews"];
                        
                    }
                    echo "<h3>Изменение заказа</h3>
                    <form method='post'>
                    <input type='hidden' name='ID' value='$reviewid' />
                    <p>Марка:
                    <input type='text' name='stamp' value='$stamp' />
                    <p>Комплектация:
                    <input type='text' name='model' value='$model' /></p>
                    <p>Услуга:
                    <input type='text' name='Services' value='$Services' /></p>
                    <p>Отзыв:
                    <input type='text' name='review' value='$review' /></p>
                    <input type='submit'  value='Сохранить'>
                    </form>";
                }
                else{
                    echo "<div>Отзыв не найден</div>";
                }
                $result->free();
            }else{
                echo "Ошибка:".$conn->error;
            }
        }

    elseif (isset ($_POST ["ID"])&& isset ($_POST ["stamp"]) && isset ($_POST["model"]) && isset ($_POST["review"])){
        $reviewsid = $conn-> real_escape_string($_POST["rew_id"]);
        $stamp = $conn->real_escape_string($_POST["stamp"]);
        $model = $conn->real_escape_string($_POST["model"]);
    
        $sql = "UPDATE Evaluation SET stamp='$stamp', model='$model' WHERE ID ='$reviewsid'";
        if($result=$conn->query($sql)){
            header("Location: index.php");
        }else{ 
            echo "Ошибка:".$conn->error;
        }
}
    else{
        echo "Некорректные данные";
    }

    $conn->close();

        ?>