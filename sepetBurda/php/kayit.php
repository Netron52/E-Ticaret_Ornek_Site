<?php

include("baglanti.php");

if(isset($_POST["kaydet"])){
    $name=$_POST["kullaniciadi"];
    $email=$_POST["mail"];
    $password=$_POST["sifre"];
    $ekle="INSERT INTO kullanicilar (kullanici_adi, email, parola) VALUE ('$name','$email','$password') ";
    $calistirekle = mysqli_query($baglanti,$ekle);

if($calistirekle){
        echo ' <div class="alert alert-success" role="alert">
       Başarıyla kayıt oldunuz 
      </div>';
}
    header("Location: anasayfa.php"); // Kayıt sonrası yönlendirme
else{
        echo ' <div class="alert alert-danger" role="alert">
       Maalesef kayıt olamadınız!
      </div>';
    }

    mysqli_close($baglanti);
}
?>