<?php
//hari ini bukhori sehat wal afiat dan motornya menyala dengan lancar. Maka, bukhori berangkat ke sekolah jika tidak ada kendala di keduanya. Kondisi motor mogok.
$bukhorisehat = true;
$motormenyala = false;
if ($bukhorisehat && $motormenyala) {
    echo "bukhori berangkat ke sekolah";
} elseif ($bukhorisehat && !$motormenyala) {
    echo "motor mogok, bukhori tidak berangkat ke sekolah";   
}
?>