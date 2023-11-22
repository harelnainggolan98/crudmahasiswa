<?php

class laundry
{
    function hitung($nama, $jenis, $berat, $dalam = true, $struk = true)
    {
        $setrika = 3500;
        $cuci_setrika = 5000;
        $pdalam = 5000;
        $lupa = 10000;

        if ($jenis == 'setrika') {
            $harga = $berat * $setrika;
            echo "Biaya Laundry yang harus dibayar " .$nama. " sebanyak " . $harga;
        }
        if ($jenis == 'cuci_setrika') {
            $harga = $berat * $cuci_setrika;
            echo "Biaya Laundry yang harus dibayar " .$nama. " sebanyak " . $harga;
        }
        if ($dalam) {
            $harga += 5000;
            echo " anda dikenakan tambahan 5000 karena didalamnya terdapat pakaian dalam";
            echo " sehingga total yang harus dibayar sebanyak " . $harga;

        }
        if ($struk) {
            $harga += 10000;
            echo " anda dikenakan tambahan 10000 karena anda lupa membawa struk";
            echo " sehingga total yang harus dibayar sebanyak " . $harga;
        }
    }
}
?>