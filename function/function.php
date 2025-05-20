<?php
 function tampil_ganjil() {
 
 for ($i =1; $i <=10; $i++) {
    if ($i % 2 == 1) {
        echo "$i" ;
     }
   }
}


echo "Bilangan Ganjil dari 1 sampai 10 : <br>";
    tampil_ganjil();
?>

