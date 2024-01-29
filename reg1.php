<?php
    if (isset ($_POST ["username"]) && isset ($_POST["Surname"]) && isset ($_POST["Middlename"]) && isset ($_POST["Email"])  && isset ($_POST["Password"]) && isset ($_POST["Login"]) && isset ($_POST ["number"]))
    {
        $conn = new mysqli("localhost", "root", "", "Avtoteka");
        if ($conn -> connect_error) 
        {
    die("Ошибка: " . $conn->connect_error);
        }
        $Names= $conn->real_escape_string ($_POST["username"]);
        $Surname= $conn->real_escape_string ($_POST["Surname"]);
        $Middlename= $conn->real_escape_string ($_POST["Middlename"]);
        $Email= $conn->real_escape_string ($_POST["Email"]);
        $Login= $conn->real_escape_string ($_POST["Login"]);
        $Password= $conn->real_escape_string ($_POST["Password"]);
        $phonenumbe	= $conn->real_escape_string ($_POST["number"]);
$sql="INSERT INTO Users (Names, Surname, Middlename, Login, Password, Email , phonenumbe	) VALUES ('$Names', '$Surname', '$Middlename' , '$Login', '$Password', '$Email' , '$phonenumbe')";
if($conn->query($sql)){
    echo "Данные введены";
}
else
{
    echo "Ошибка" .$conn->error;
}
$conn->close();
}
?>
