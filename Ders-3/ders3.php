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

//İçeriğin İlk Harfinin, Büyük Harfe Dönüştürülmesi
echo "<br> \$yazi İlk Harfinin, Büyük Harfe Yazılması: " . $ilk_yazi = ucfirst($kucuk_yazi);

//İçeriğin Tüm Kelimelerinin İlk Harfinin, Büyük Harfe Dönüştürülmesi
echo "<br> \yazi Tüm Kelimelerinin İlk Harfinin, Büyük Harfle Yazılması: " . $kelime = ucwords($kucuk_yazi);

//İçeriğin Harf Sayısı:
echo "<br> \$yazi İçerisindeki Harf Sayısı: " . strlen($yazi);                   

//Ascii Char Karşılığı
echo "<br>Karekter Karşılığı: " . chr(109);
echo "<br>Karekter Karşılığı: " . chr(64);

//Uygulama 1-255 char karşılıkları:
echo "<br>Ascii Karekterleri: ";
for ($i = 1; $i <= 255; $i++){
    echo chr($i)."-";
}

//Metnin parçalanarak diziye dönüştürülmesi
$dizi = explode(" " , $yazi);
echo "<br>";
print_r($dizi);

//Uygulama Paragraftaki Kelime ve Cümle Sayılarını alt alta yazdırınız.

$metin="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore, placeat! Vitae obcaecati eum molestias totam enim aspernatur cupiditate consequatur laboriosam, eveniet impedit quod, quam adipisci debitis alias ex, labore tenetur?";

$kelimelerDizisi = explode(" ", $metin);
$cumlelerDizisi = explode(" ", $metin);

echo "<br>Kelime Sayısı: " . count($kelimelerDizisi);
echo "<br>Cümle Sayısı: " . count($cumlelerDizisi),

/* Uygulama
    Veri tabanından gelen 2021-12-25 değerini 25-12-2021 şeklinde ekrana yazdırınız.
  */ 
$tarih = "2021-12-25";
$yenitarih = explode("-", $tarih);
echo $yenitarih[2]. "-" .
$yenitarih[2] . "-" . $yenitarih[1] . "-" . $yenitarih[0];

//Dizinin metne dönüştürülmesi (implode)
$aylar = ["Ocak","Şubat","Mart","Nisan","Mayıs"];
print_r($aylar);
$aylarString = implode(" ", $aylar);
echo "<br>String: $aylarString";

//Verilen bir metnin belirten sayı kadar ayrılarak bir dizi içeriğine aktarılması. Eğer sayı belirtilmezse metni harf harf böler */

echo "<br>";
$iban="TR0010002000300040005000";
$ibanYeni = str_split($iban, 4);
print_r($ibanYeni);
echo "<br>";

foreach ($ibanYeni as $parca) {
    echo "$parca";
}

/* Trim Substr str_replace md5 -sha1*/

?>
</body>
</html>