<?php
    include("connection.php");
    
    if(isset($_POST['submit']) && $_POST['submit'] == "Submit") {

      $_SESSION['soal_mapel'] = $_POST['mapel'];
      $_SESSION['soal_tingkat'] = $_POST['tingkat'];
      $_SESSION['id_soal']="";
   
    }

    $jumSoal=10;

    if(isset($_GET['page']))
    {
      $noPage = $_GET['page'];
    }
    else $noPage = 1;

    if($noPage>$jumSoal){

      header("location: hasil.php");

    }else {

        $query = "SELECT * FROM simulasi_soal WHERE id='".$_SESSION['id_soal']."'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);

       // echo $query;

        $soal = array();

        if ($noPage>1) {
          $soal= $_SESSION['soal'];
          if($_POST['jawaban'] == $row['jawaban'] && $soal[$noPage]=='belum'){
            $_SESSION['score']+=10;
          }
        }else{
           $_SESSION['score']=0;
           setcookie("time","100", time() + 1 *24 *3600);
           for ($i=1; $i <= $jumSoal ; $i++) { 
             $soal[$i]='belum';
           }
           $_SESSION['soal']=$soal;
        }


        foreach ($_SESSION['soal'] as $key => $value) {
         // echo $key."---".$value;
          if($value == "belum"){
            $soal[$key]='belum';
            $soal[$noPage]='sudah';
          }else{
            $soal[$key]='sudah';
          }
        }

        $_SESSION['soal']=$soal;

       // echo $_SESSION['score'];

        $mapel = $_SESSION['soal_mapel'];
        $tingkat = $_SESSION['soal_tingkat'];

        $query = "SELECT * FROM simulasi_soal WHERE mapel='$mapel' AND tingkat='$tingkat' ORDER BY RAND() LIMIT 1";
        $result = mysqli_query($connection, $query);
     
        if(mysqli_num_rows($result)>0){
          $row = mysqli_fetch_assoc($result);
          
          echo "
                <h3>Mapel ".$row['mapel']."</h3></br></br>
                <div id='box-timer'>
                  <h4 class='tiime' style='width:100px'>Waktu :</h4>
                  <div id='waktu' class='tiime'>
                    <ul>
                      <li id='menit'></li><li>&nbsp</li>
                      <li id='point'>:</li><li>&nbsp</li>
                      <li id='detik'></li>
                    </ul>
                  </div>
                </div>
                <h4 class='soaal'>Soal ".$noPage."</h4></br></br>
                <h4>".$row['soal']."</h4>
                </br>
                <form action='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."' method='POST'>
                  <div class='menu-pilihan option1'>
                    <input id='pilihan1' type='radio' name='jawaban' Value='".$row['pilihan1']."' checked><label for='pilihan1'>A. ".$row['pilihan1']."</label>
                  </div>
                  <div class='menu-pilihan option2'>
                    <input id='pilihan2' type='radio' name='jawaban' Value='".$row['pilihan2']."'><label for='pilihan2'>B. ".$row['pilihan2']."</label></br>
                  </div>
                  <div class='menu-pilihan option3'>
                    <input id='pilihan3' type='radio' name='jawaban' Value='".$row['pilihan3']."'><label for='pilihan3'>C. ".$row['pilihan3']."</label>
                  </div>
                  <div class='menu-pilihan option4'>
                    <input id='pilihan4' type='radio' name='jawaban' Value='".$row['pilihan4']."'><label for='pilihan4'>D. ".$row['pilihan4']."</label>
                  </div>
                  <input id='button-next' type='submit' name='submit' value='Next'>

                </form>";
          $_SESSION['id_soal']=$row['id'];
        }

   }
      
  
?>
