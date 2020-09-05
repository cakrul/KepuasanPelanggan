<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kepuasan Pengunjung</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet"> -->
    <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/stylish-portfolio.css" rel="stylesheet">

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>   -->
    <script type="text/javascript" src="assets/js/sweetalert2.all.min.js"></script>

</head>

<body id="page-top" class="back">
    <form id="regForm" method="POST" autocomplete="off">        
        <div class="tab">
        <img src="assets/img/logo.png" class="img" alt="">
            <div class="content-section text-white text-center">
                <div class="container">
                    <div class="content-section-heading">
                        <h2 class="mb-5">SUDAHKAH ANDA PUAS DENGAN PELAYANAN KAMI...?</h2>
                    </div>
                    <div class="row">
                        <div class="col">
                            <span class="service-icon rounded-circle mx-auto mb-3">
                                <a onclick="nextPrev(4)">
                                    <img src="assets/img/smile.png" class="mx-auto mb-3" style="width: 100%;" alt="">
                                </span>
                                <br>
                                <p class="sub-title">PUAS</p>
                            </a>
                        </div>
                        <div class="col">
                            <span class="service-icon rounded-circle mx-auto mb-3">
                                <a onclick="nextPrev(1)">
                                    <img src="assets/img/sad.png" class="mx-auto mb-3" style="width: 100%;" alt="">
                                </span>
                                <br>
                                <p class="sub-title">TIDAK PUAS</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="tab">
          <?php
           date_default_timezone_set('Asia/Jakarta');
           $d = date('Y-m-d');
           ?>
           <input type="text" name="tgl" id="tgl" hidden="true" value="<?php echo $d; ?>">
            <div class="content-section-2">
                <div class="container">
                    <div class="content-section-heading">
                        <h2>DIBAGIAN PELAYANAN MANA YANG ANDA MERASA TIDAK PUAS.</h2>
                        <p><b>*Dapat memilih lebih dari 1 (satu)..!!</b></p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-6">
                                <input type="checkbox" class="custom-control-input" id="vk" name="vk">
                                <label class="custom-control-label unit" for="vk">Ruang Bersalin</label>
                            </div>
                        </div>   
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="igd" name="igd">
                                <label class="custom-control-label unit" for="igd">IGD</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="ok" nname="ok">
                                <label class="custom-control-label unit" for="ok">Ruang Operasi</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="hcu" nname="hcu">
                                <label class="custom-control-label unit" for="hcu">HCU</label>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="ivf" name="ivf">
                                <label class="custom-control-label unit" for="ivf">IVF</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="kby" name="kby">
                                <label class="custom-control-label unit" for="kby">Kamar Bayi</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="dokter" name="dokter">
                                <label class="custom-control-label unit" for="dokter">Dokter</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="perawat" name="perawat">
                                <label class="custom-control-label unit" for="perawat">Perawat</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="poli_gigi" name="poli_gigi">
                                <label class="custom-control-label unit" for="poli_gigi">Poli Gigi</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="poli_umum" name="poli_umum">
                                <label class="custom-control-label unit" for="poli_umum">Poli Umum</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="tppri" name="tppri">
                                <label class="custom-control-label unit" for="tppri">TPPRI</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="reps" name="reps">
                                <label class="custom-control-label unit" for="reps">Kasir</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="lab" name="lab">
                                <label class="custom-control-label unit" for="lab">Laboratorium</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="rm" name="rm">
                                <label class="custom-control-label unit" for="rm">Rekam Medis</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">                           
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="farmasi" name="farmasi">
                                <label class="custom-control-label unit" for="farmasi">Farmasi</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="bangsal_astina" name="bangsal_astina">
                                <label class="custom-control-label unit" for="bangsal_astina">Bangsal Astina</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">                           
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="bangsal_ayodya" name="bangsal_ayodya">
                                <label class="custom-control-label unit" for="bangsal_ayodya">Bangsal Ayodya</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="bangsal_alengka" name="bangsal_alengka">
                                <label class="custom-control-label unit" for="bangsal_alengka">Bangsal Alengka</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">                           
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="bangsal_amarta" name="bangsal_amarta">
                                <label class="custom-control-label unit" for="bangsal_amarta">Bangsal Amarta</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="gizi" name="gizi">
                                <label class="custom-control-label unit" for="gizi">Gizi</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">                           
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="poli_ibu" name="poli_ibu">
                                <label class="custom-control-label unit" for="poli_ibu">Poli Ibu</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="poli_anak" name="poli_anak">
                                <label class="custom-control-label unit" for="poli_anak">Poli Anak</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <textarea type="text" name="saran_kritik" class="form-control" rows="3" placeholder="Masukan Saran dan Kritik Anda...."></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
        <div style="overflow:auto; margin-right: 35px; margin-left: 35px;">
                <button type="button" class="btn btn-secondary float-left" id="prevBtn" onclick="nextPrev(-1)">Kembali</button>
                <button type="button" class="btn btn-success float-right" id="nextBtn" onclick="nextPrev(1)">Lanjut</button>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:20px;">
            <span class="step"></span>
            <span class="step"></span>
        </div>
        <p>Copyright &copy; IT Sadewa 2020. Versi 1.2</p>
    </form>

    <!-- <div class="footer">
      <p>Copyright &copy; IT Sadewa 2020</p>
    </div> -->

    <?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    define("BASEPATH", dirname(__FILE__));
    include 'connection/conn.php';

    if(isset($_POST["tgl"])) {
      $tgl          = $_POST['tgl'];
      $vk           = chkcmb($_POST['vk']);
      $igd          = chkcmb($_POST['igd']);
      $ok           = chkcmb($_POST['ok']);
      $hcu          = chkcmb($_POST['hcu']);
      $ivf          = chkcmb($_POST['ivf']);
      $kby          = chkcmb($_POST['kby']);  
      $dokter          = chkcmb($_POST['dokter']);  
      $perawat          = chkcmb($_POST['perawat']);  
      $poli_gigi    = chkcmb($_POST['poli_gigi']);
      $poli_umum    = chkcmb($_POST['poli_umum']);
      $tppri        = chkcmb($_POST['tppri']);
      $reps         = chkcmb($_POST['reps']);
      $lab          = chkcmb($_POST['lab']);
      $rm           = chkcmb($_POST['rm']);
      $farmasi             = chkcmb($_POST['farmasi']);
      $bangsal_astina      = chkcmb($_POST['bangsal_astina']);
      $bangsal_ayodya      = chkcmb($_POST['bangsal_ayodya']);
      $bangsal_alengka     = chkcmb($_POST['bangsal_alengka']);
      $bangsal_amarta      = chkcmb($_POST['bangsal_amarta']);
      $gizi                = chkcmb($_POST['gizi']);
      $poli_ibu                = chkcmb($_POST['poli_ibu']);
      $poli_anak                = chkcmb($_POST['poli_anak']);
      $saran_kritik        = comment($_POST['saran_kritik']);

      $query = "INSERT INTO survey (no_p,tgl,ivf,kby,poli_gigi,poli_umum,igd,ok,hcu,vk,tppri,laborat,rm,reps,farmasi,bangsal_astina,bangsal_ayodya,bangsal_alengka,bangsal_amarta,dokter,perawat,gizi,poli_ibu,poli_anak,saran_kritik) 

      VALUES ('', '$tgl','$ivf','$kby','$poli_gigi','$poli_umum','$igd','$ok','$hcu','$vk','$tppri','$lab','$rm','$reps','$farmasi','$bangsal_astina','$bangsal_ayodya','$bangsal_alengka','$bangsal_amarta','$dokter','$perawat','$gizi','$poli_ibu','$poli_anak','$saran_kritik')";


      if(mysqli_query($conn, $query)){
        echo "<script>swal('<p>Terima Kasih Atas Kepercayaan anda terhadap pelayanan!</p>', '<h5>RSKIA SADEWA</h5>', 'success')
        .then(function() {window.location = 'index.php';});
        </script>";
      } else {
        echo "<script>swal('GAGAL!', 'RSKIA SADEWA', 'danger')
        .then(function() {window.location = 'index.php';});
        </script>";
      }
    } 

    function chkcmb($unit){
      if(isset($unit)){
        return "Tidak Puas";
      } else {
        return "Puas";
      }
    }

    function comment($comment){
      if(isset($comment)){
        return "-";
      } else {
        return $comment;
      }
    }

    ?>



<script>
  var currentTab = 0; 
  showTab(currentTab);

  function showTab(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
      document.getElementById("nextBtn").style.display = "none";
    } else {
      document.getElementById("nextBtn").style.display = "inline";
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Simpan";
    } else {
      document.getElementById("nextBtn").innerHTML = "Lanjut";
    }
    fixStepIndicator(n)
  }

  function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    if (n == 1 && !validateForm()) return false;
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    if (currentTab >= x.length) {
      document.getElementById("regForm").submit();
      return false;
    }
    showTab(currentTab);
  }

  function validateForm() {
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");

    for (i = 0; i < y.length; i++) {

      if (y[i].value == "") {

        y[i].className += " invalid";
        elem.style.display = 'none';

        valid = false;
      }
    }

    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
      // document.getElementById("prevBtn").style.display = "none";
      // document.getElementById("nextBtn").style.display = "none";
    }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  x[n].className += " active";
}
</script>

</body>

</html>
