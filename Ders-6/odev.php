<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="isim" placeholder="adınız">
        <input type="text" name="soyisim" placeholder="soyadınız">
        <input type="text" name="vize" placeholder="vize">
        <input type="text" name="final" placeholder="final">
        <button type="submit" >tıkla</button>
    </form>

<?php

try {
    $db=new PDO("mysql:host=localhost;dbname=iletisim;charset=UTF8","root","");
} 
catch (PDOException $e) {
    echo $e->getMessage();
}
$isim=$_POST["isim"];
$soyisim=$_POST["soyisim"];
$vize=$_POST["vize"];
$final=$_POST["final"];


$save=$db->prepare("INSERT INTO isimler SET
isim=:isim,
soyisim=:soyisim,
vize=:vize,
final=:final
");
$insert = $save->execute(array(
    "isim"=> $isim,
    "soyisim"=> $soyisim,
    "vize"=> $vize,
    "final"=> $final,
));

if($insert) {
    echo "form kaydedildi";
} else {
    echo "form kaydedilmedi";
}
include("footer.php");

?>
</body>
</html>