<?php
$connect=mysqli_connect('localhost', 'root', '', 'Avtoteka');
$username = mysqli_real_escape_string($connect,$_POST['username']);
$sql = mysqli_query($connect,$zapros) or die(mysqli_error());
if (mysqli_num_rows($sql)==1)
{
$simv = array ("92", "83", "7", "66", "45", "4", "36", "22", "1", "0", 
               "k", "l", "m", "n", "o", "p", "q", "1r", "3s", "a", "b", "c", "d", "5e", "f", "g", "h", "i", "j6", "t", "u", "v9", "w", "x5", "6y", "z5");
  for ($k = 0; $k < 8; $k++)
    {
      shuffle ($simv);
      $string = $string.$simv[1];

    }
$zapros = "UPDATE Users SET  pass={$string} WHERE Names={$username} ";
    $sql = mysqli_query($connect,$zapros) or die(mysqli_error());
    
$zapros = "SELECT Email FROM Users WHERE `Names`='{$username}' LIMIT 1";
$sql = mysqli_query($connect,$zapros)or die(mysqli_error());
$r = mysqli_fetch_assoc($sql);
$mail = $r['Email'];
mail($mail, "Запрос на восстановление пароля", "Hello, $username. Your new password: $string");
}
echo "На ваш почтовый ящик было отправлено письмо с новый паролем";

?>