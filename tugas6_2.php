<?php

    $jambu = 15000;
    $jumlah_dus = 6;
    $jambu_per_dus = 5;
    $kardus = 2000;
    $sisa_kardus = 2;
    $total_penjualan = ($jumlah_dus * $jambu_per_dus * $jambu) + ($sisa_kardus * $kardus);

    echo ("
        ============================================================
        <p>Harga Jambu = Rp ".$jambu." / Kg</p>
        <p>Harga Kardus = Rp ".$kardus." / pcs</p>
        <p>Total Penjualan (Dus dan Jambu) = Rp ".$total_penjualan."</p>
        ============================================================
    ");

?>