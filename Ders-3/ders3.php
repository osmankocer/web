<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>osman koçer</title>
</head>
<body>
    
<?php
/* Uygulama : Rasgele üretilen sayının 
 50'den büyükse 
    Geçtiniz-Notunuz: xx
 50'den küçüksee   
    Kaldınız-Notunuz: xx
uygulamasını gerçekleştiriniz.
*/

$not  = rand(10,100);
if ($not>+50) {
    echo("Geçtiniz-Notunuz:$not");
}
else{
    echo("Kaldınız-Notunuz:$not");
}
echo"<h3>Sık Kullanılan String Fonksiyonlar</h3>";
$yazi="Aydın Adnan Menderes Üniversitesi";
echo "<br> Değişken İçeriği: $yazi (" .gettype($yazi) . ")";

//içeriğin Büyük Harfe Dönüştürülmesi

echo "<br> \$yazi içeriğinin Büyük Harfle Yazılması: " . $buyuk_yazi = strtoupper($yazi);
echo "<br> \$yazi içeriğinin Büyük Harfle Yazılması: " . $buyuk_yazi = mb_strtoupper($yazi);


//içeriğin Küçük Harfe Dönüştürülmesi

echo "<br> \$yazi içeriğinin Küçük Harfle Yazılması: " . $kucuk_yazi = strtoupper($buyuk_yazi);
echo "<br> \$yazi içeriğinin Küçük Harfle Yazılması: " . $kucuk_yazi = mb_strtolower($buyuk_yazi);



?>
</body>
</html>