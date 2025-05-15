<?php
//kunsyafei akan menyelesaikan masa studinya agar mendapatkan kriteria sangat mampu maka nilai harus lebih besar sama dengan 90, kriteria baik lebih besar sama dengan 80, cukup lebih besar sama dengan 75. Nilai itu maka tidak mampu. Kondisi nilai kunsyafei 94
$nilai = 94;
if ($nilai >= 90) {
    echo "sangat baik";
} elseif ($nilai >= 80) {
    echo "baik";
} elseif ($nilai >= 75) {
    echo "cukup";
} else {
    echo "tidak mampu";
}
?>