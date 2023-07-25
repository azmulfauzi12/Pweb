<?php
	
	include("connection.php");
	$nama_tabel= $_SESSION['jenis']."_profile";
	
	$email_user = $_SESSION['email_user'];

	$query = "SELECT * FROM $nama_tabel WHERE email='$email_user'";
	$result = mysqli_query($connection, $query);

	$arrjadwal = array();
    $mapel = array();
    $tingkat = array();
    $count = 0;


    while ($row = mysqli_fetch_assoc($result)) {
        switch ($row['jam']) {
        	case '08.00-10.00':
        		$arrjadwal [ $row['hari'] ] = '1';
        		break;
        	case '10.00-12.00':
        		$arrjadwal [ $row['hari'] ] = '2';
        		break;
        	case '12.00-14.00':
        		$arrjadwal [ $row['hari'] ] = '3';
        		break;
        	case '14.00-16.00':
        		$arrjadwal [ $row['hari'] ] = '4';
        		break;
        	case '16.00-18.00':
        		$arrjadwal [ $row['hari'] ] = '5';
        		break;
        	case '18.00-20.00':
        		$arrjadwal [ $row['hari'] ] = '6';
        		break;
        	case '20.00-22.00':
        		$arrjadwal [ $row['hari'] ] = '7';
        		break;
        	default:
        		
        		break;
        }

        echo "<style type='text/css'>#jadwal>tbody>tr>#".$row['hari']."-".$arrjadwal[$row['hari']]."{background:white}</style>";
        echo "<script type='text/javascript'>
            $(document).ready(function(){
            $("."'#".$row['hari']."-".$arrjadwal[$row['hari']]."'".").text('".$row['mapel']."-".$row['tingkat']."');
        });</script>";

    }


    $query = "SELECT * FROM tentors_terpilih WHERE email_tentor='$email_user' AND konfirmasi='sudah'";
    $result = mysqli_query($connection, $query);

    $arrjadwal = array();
    $mapel = array();
    $tingkat = array();

    while ($row = mysqli_fetch_assoc($result)) {
        switch ($row['jam']) {
            case '08.00-10.00':
                $arrjadwal [ $row['hari'] ] = '1';
                break;
            case '10.00-12.00':
                $arrjadwal [ $row['hari'] ] = '2';
                break;
            case '12.00-14.00':
                $arrjadwal [ $row['hari'] ] = '3';
                break;
            case '14.00-16.00':
                $arrjadwal [ $row['hari'] ] = '4';
                break;
            case '16.00-18.00':
                $arrjadwal [ $row['hari'] ] = '5';
                break;
            case '18.00-20.00':
                $arrjadwal [ $row['hari'] ] = '6';
                break;
            case '20.00-22.00':
                $arrjadwal [ $row['hari'] ] = '7';
                break;
            default:
                
                break;
        }

        echo "<style type='text/css'>#jadwal>tbody>tr>#".$row['hari']."-".$arrjadwal[$row['hari']]."{background:chartreuse}</style>";
        echo "<script type='text/javascript'>
            $(document).ready(function(){
            $("."'#".$row['hari']."-".$arrjadwal[$row['hari']]."'".").text('".$row['mapel']."-".$row['tingkat']."');
        });</script>";
        
    }

?>