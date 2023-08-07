<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $sayi = $_POST["sayi"];
    $bolen=$_POST["bolen"];
    
    echo "Girilen sayı: " . $sayi;
    echo "<br>";
    echo "Bölünecek sayı: ". $bolen;
    echo "<br>";

    function modUcKontrol($sayi, $bolen){
        if ($bolen != 0) {
            if ($sayi % $bolen == 0 ){
                return "Girilen sayı= ".$sayi." bölen sayı= ".$bolen." ile tam olarak bölünmektedir.";
            }else{
               echo "Girilen sayı= ".$sayi." bölen sayı= ".$bolen." ile tam olarak bölünmemektedir."; 
               echo "<br>";
                return bolunenIlkSayi($sayi, $bolen);
                
                
            }
        }else{
            return "Girilen sayı 0 olamaz";
        }
    }

    function bolunenIlkSayi($sayi, $bolen){
        $kalan=$sayi%$bolen;
        echo "kalan=".$kalan;
        echo "<br>";
        $eklenecekSayi=$bolen-$kalan;
        echo $sayi."'nın ".$bolen." ile tam olarak bölünebilmesi için sayıya aradaki fark olan ".$eklenecekSayi."  eklenmelidir.";
        echo "<br>";
        $bolunebilenIlkSayi=$sayi+$eklenecekSayi;
        echo "Bölünebilecek ilk sayi = ".$bolunebilenIlkSayi." dır";
    }

    $sonuc= modUcKontrol($sayi,$bolen);
    echo $sonuc;


}
?>