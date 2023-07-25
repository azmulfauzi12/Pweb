<?php
    
    include("connection.php");
     
    $query = "SELECT * FROM kota ORDER BY nama";
    $sql = mysqli_query($connection, $query);
    $arrkota = array();
    while ($row = mysqli_fetch_assoc($sql)) {
        $arrkota [ $row['kode_kota'] ] = $row['nama'];
    }
     
    if(isset($_GET['action']) && $_GET['action'] == "getKota") {
        $kode_kota = $_GET['kode_kota'];

        $query = "SELECT kode_daerah, nama FROM daerah WHERE kode_kota='$kode_kota' ORDER BY nama";
        $sql = mysqli_query($connection, $query);
        $arrdaerah = array();
        while ($row = mysqli_fetch_assoc($sql)) {
            array_push($arrdaerah, $row);
        }
        echo json_encode($arrdaerah);
        exit;
    }
    ?>
