<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="form.php" method="post">
    <label for="ab">Ad Soyad</label><br>
    <input id="ab" type="text" name="isim1"> <br>
    <label for="abc">E-posta</label><br>
    <input id="abc" type="email" name="eposta1"> <br>
    <label for="abcd">Cinsiyet</label> <br>
    <input id="abcd" type="radio" name="cinsiyet1" value="erkek">Erkek 
    <input id="abcd" type="radio" name="cinsiyet1" value="kadın">Kadın <br>
    <label for="abcdef">
        <input id="abcdef" type="submit"> <br>
    </label> <br>
    </form>

    <?php 
    
    include("baglanti.php");

    if(isset($_POST["isim1"],$_POST["eposta1"],$_POST["cinsiyet1"]))
    {
       
       $adsoyadd=$_POST["isim1"];
       $epostaa=$_POST["eposta1"];
       $cinsiyett=$_POST["cinsiyet1"];

       $ekle="INSERT INTO ogrenciler(tamadi, eposta, cinsiyet) VALUES 
       ('".$adsoyadd."','".$epostaa."','".$cinsiyett."')";

        if($baglan->query($ekle) === TRUE)
        
       {
        
        echo "<script>alert('Mesajınız başarı ile gönderilmiştir.')</script>";
       }
    
    } 

    ?>


    
</body>
</html>