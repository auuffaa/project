<?php
//hari ini azzam puasa, jika lanjut puasa maka akan berbuka dengan nasi padang. jika tidak, azzam makan nasi padang di siang hari. Kondisinya azzam tidak puasa karena mokel (bucok)
$azzampuasa = false;
if (! $azzampuasa) {
    echo "azzam makan nasi padang disiang hari (mokel)";
} else {
    echo "azzam berbuka puasa dengan nasi padang";
}
?>