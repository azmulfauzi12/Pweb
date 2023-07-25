<?php
  include("connection.php");

  $_SESSION['path']=$_SERVER['PHP_SELF'];
  
  if(isset($_POST['submit']) && $_POST['submit'] == "Cari") {
    $query_cari = "";

    if($_POST['mapel'] != ""){
      $query_cari .= "AND mapel='".$_POST['mapel']."'";
    }
    if($_POST['hari'] != ""){
      $query_cari .= "AND hari='".$_POST['hari']."'";
    }
    if($_POST['jam'] != ""){
      $query_cari .= "AND jam='".$_POST['jam']."'";
    }
    if($_POST['tarif'] != ""){
      $query_cari .= "AND tarif='".$_POST['tarif']."'";
    }

    if($_POST['kota'] != ""){
      $query_lokasi= "kota='".$_POST['kota']."'";
    
      if($_POST['daerah'] != ""){
        $query_lokasi .= "AND daerah='".$_POST['daerah']."'";
      }

      $query_cari_tentor = "SELECT * FROM tentors WHERE ".$query_lokasi;
      $result_cari_tentor = mysqli_query($connection, $query_cari_tentor);

      if(mysqli_num_rows($result_cari_tentor)>0){
        $query_tentor = " ";
        $hitung = 0;
        while($row_tentor = mysqli_fetch_assoc($result_cari_tentor)){
          if ($hitung == 0) {
            $query_tentor .= "email='".$row_tentor['email']."'"; 
          }else{
            $query_tentor .= " OR email='".$row_tentor['email']."'"; 
          }
          $hitung++;
          
        }
      }
       $query_cari .= "AND (".$query_tentor.")";
    }
   $_SESSION['query_cari'] = $query_cari;

  }

  $dataPerPage = 5;
  $status = 'belum';

  if(isset($_GET['page']))
  {
    $noPage = $_GET['page'];
  }
  else $noPage = 1;

  $offset = ($noPage - 1) * $dataPerPage;

  $query="SELECT * FROM tentors_profile WHERE status='$status' ".$_SESSION['query_cari']." LIMIT $offset, $dataPerPage";
  $result = mysqli_query($connection, $query);

  //echo $query;
 

  $arremail= array();
  $_SESSION['email_tentor']="";
  if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_assoc($result)) {
      $email = $row['email'];
      //$_SESSION['email_tentor']=$email;

      $query1 = "SELECT * FROM tentors WHERE email='$email'";
      $result1 = mysqli_query($connection, $query1);
      $row1 = mysqli_fetch_assoc($result1);

      echo "  <div class='option-choice'>
          <div class ='box-foto'>
            <img class ='foto-tentor' src='php/cetak_gambar_tentors.php'>
            <center><h4>".$row1['nama']."</h4></center>

          </div>
          <div class ='box-deskripsi-tentor'>
            <p class='deskripsi-tentor'>".cetak_deskripsi($row['email'])."</p>
          </div>
          <div class = 'box-fee'>
            <div class='fee'>
              <div class='border-atas'></div>
              <div class='border-bawah'></div>
              <h4 class='harga'>".$row['tarif']."</h4>
              <h4 class='mapel'>".$row['mapel']."-".$row['tingkat']."</h4></br>
              <h4>".$row['hari']."  ".$row['jam']."</h4></br>
              <form action='result.php' method='POST'>
              <center><input class='hidden' name='id_mapel' value='".$row['id']."' readonly>
              <input class='pilih' name='submit' type='submit' value='Pilih'></center>
              </form>
            </div>
          </div>
        </div>";
    }
  }else{
    echo "<center><h4>Maaf Tentor Tidak ditemukan</h4></center>";
  }

     $query3   = "SELECT COUNT(*) AS jumData FROM tentors_profile WHERE status='$status'";
        $hasil3  = mysqli_query($connection, $query3);
        $data3    = mysqli_fetch_array($hasil3);

        $jumData = $data3['jumData'];
        $showPage=1;


        echo "<br><center>";
          if ($jumData > 5)
            {
 
              $jumPage = ceil($jumData/$dataPerPage);
             
              if ($noPage > 1) 
 
              $query = "SELECT * FROM tentors_profile";
              $result = mysqli_query($connection, $query) or die('Error');
 
              $data = mysqli_fetch_array($result);
 
              echo  "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."'><< Prev</a>";
 
             
              for($page = 1; $page <= $jumPage; $page++)
              {
 
                if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
                {
 
                  if (($showPage == 1) && ($page != 2))  echo "<a href='#'>...</a>";
                  if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "<a href='#'>...</a>";
                  if ($page == $noPage) echo " <a href='#'>".$page."</a>";
                  else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."'>".$page."</a> ";
                  $showPage = $page;
                }
              }
 
             
              if ($noPage < $jumPage) 
              echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."'>Next >></a>";
            }




  function cetak_deskripsi($email){

    include("connection.php");

    $query_deskripsi = "SELECT * FROM tentors_deskripsi WHERE email='$email'";
    $result_deskripsi = mysqli_query($connection, $query_deskripsi);
  
    if (mysqli_num_rows($result_deskripsi) == 1) {
      $row_deskripsi = mysqli_fetch_assoc($result_deskripsi);
      return $row_deskripsi['deskripsi'];
    }

  }


?>
