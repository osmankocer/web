<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osman</title>
</head>
<body>
    <?php
    /*--Html yorum satırı -->php_check_syntax
    (Çoklu satır kullanılabilir) Kısayol:Shift+a
    */
    //Tek satır açıklama için kullanılır.//

    /*Kullanılan komut;
    echo:Ekrana yazdırma işlemi yapar.
    Komut içerisinde html etiketleri kullanılabilir.
    çift veya tek tırnakla kullanılabilir.
    Çift tırnak ile kullanıldığında içerisindeki değişkenlerin içeriğini ekrana yazar.
    Nokta operatörü ile birleştirme işlemi yapılabilir.(string birleştirme de denebilir.)
    Ters slash(\)kaçış karakteridir özel ifadelerden önce kullanılır.
*/

echo "<h3>Adnan Menderes Üniversitesi </h3>";
echo "<h4> Aydın Meslek Yüksekokulu </h4>";
echo " Bilgisayar Mühendisliği" . 'Aymes';
echo "<br> Bilgisayar Mühendisliği " . "<br>" . 'Aymes';


echo"<hr> <h5> Değişken Tanımlama </h5>";

echo "<ol>
          <li> Değişken isimleri $ ile başlar. </li>
          <li> Değişken isimleri sayısal ifadelerle başlayamaz. </li>
          <li> Değişken isimlerinde boşluk kullanılmaz. İki kelime birinci_sinif birinciSinif birinci-sinif örnekleri kullanılabilir.</li>
          <li> Değişken isimleri küçük-büyük harfe duyarlıdır. \$sayi != \sayi </li>
          <li> Değişken ismi, değişkenin taşıdığı içeriği ifade etmeli. </li>
          <li> Değişken içeriğinde metinsel ifade varsa çift tırnak (\") veya tek tırnak (') kullanılabilir. </li>
          <li> Değişken içeriğinde sayısal bir ifade varsa tırnak kullanmak gerekli değildir. </li>
          <li> Değişken içerikleri ekrana echo komutu ile yazdırılabilir. </li>

</ol>";

echo "<>hr <h4> Değişken Tanımlama Örnekleri </h4>";

$isim     ="Ahmet";
$soyisim  ="Erimez";
$gsm      ="123456789";

echo $isim."<br>";
echo "$isim $soyisim $gsm";
  

/*Uygulama:
    Üniversite-myo-ad-soyad-numara değişkenlerini tanımlayınız.
    Bu değişkenlerin içerikleri tablo veya form içeriğinde ekrana yazdırınız.
*/    


$uni    = "Adü";
$myo    = "Aymes";
$ad     = "Osman";
$soyad  = "Koçer";
$numara = "123";
?>

<form action="">
    <label for="universite"> Üni: </label>
    <input type="text" name="" value="<?php echo $uni; ?>" id="universite"><br>

    <label for="myo"> myo: </label>
    <input type="text" name="" value="<?php echo $myo; ?>" id="myo"><br>

    <label for="ad"> ad: </label>
    <input type="text" name="" value="<?php echo $ad; ?>" id="ad"><br>

    <label for="soyad"> soyad: </label>
    <input type="text" name="" value="<?php echo $soyad; ?>" id="soyad"><br>

    <label for="numara"> numara: </label>
    <input type="text" name="" value="<?php echo $numara; ?>" id="numara"><br>
</form>

<table>
    <tr>
        <td>Üni</td>
        <td><?php echo $uni; ?> </td>
    <tr>
        <td></td>
        <td> <?php echo $uni; ?> </td>
</table>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>