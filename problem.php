<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form class="" action="" method="post">
Pantolon Sayısını Giriniz:<input type="text" name="Pantolon_sayısı" >
<input type="submit" name="Gönder" value="Yolla">
</form>
<?php
if (!empty("Gönder")) {
echo "Bir Pantolon 1m 25 cm kumaş ile dikilmektedir.";
$pantolon=1,25;
$Pantolon_sayısı=$_post['Pantolon_sayısı'];
}elseif (condition) {
$istenilen_pantolon=$pantolon * $Pantolon_sayısı;
echo "İstenilen Pantolon Sayısı ve Ölçüleri",$istenilen_pantolon;
}

?>
</body>
</html>
