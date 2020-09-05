<!DOCTYPE html>  
<html>  
<head>  
 <title>DATA KEPUASAN PENGUNJUNG</title>  
</head>  
<body>  
  <style type="text/css">
   body{
    width: 100%;
    height: 100%;
    font-family: sans-serif;
  }
  table{
    margin: 20px auto;
    border-collapse: collapse;
  }
  table th,
  table td{
    border: 1px solid #3c3c3c;
    padding: 3px 8px;

  }
  a{
    background: blue;
    color: #fff;
    padding: 8px 10px;
    text-decoration: none;
    border-radius: 2px;
  }
  .center{
    text-align: center;
  }
  .right{
    text-align: right;
    margin: 20px;
    padding-right: 100px;
  }

  .left{
    text-align: left;
    margin: 20px;
    padding-right: 100px;
  }
</style>

<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Data Kepuasan Pengunjung.xls");
date_default_timezone_set("Asia/Bangkok");
function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);
 
  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
define("BASEPATH", dirname(__FILE__));
include '../connection/conn.php';
$sql1 = mysqli_query($conn, "SELECT COUNT(no_p) as jml FROM survey");
while($jmlhrecod = mysqli_fetch_assoc($sql1)){
?>

<h2 class="center">DATA KEPUASAN PENGUNJUNG ATAU PASIEN</h2>
<h2 class="center">RSKIA SADEWA</h2>
<h3 class="right">Total Data : <?php echo $jmlhrecod['jml']; } ?></h3>
<h3 class="left">Tanggal : <?php echo tgl_indo(date('Y-m-d')); ?></h3>
<br>
<table border="1" style="width: 100%;">
 <thead>
   <tr>
    <th>No.</th>
    <th>Tanggal</th>
    <th>IVF</th>
    <th>KBY</th>
    <th>Poli Gigi</th>
    <th>Poli Umum</th>
    <th>IGD</th>
    <th>OK</th>
    <th>HCU</th>
    <th>VK</th>
    <th>TPPRI</th>
    <th>Laboratorium</th>
    <th>RM</th>
    <th>Repsesionis</th>
    <th>Farmasi</th>
    <th>Bangsal Astina</th>
    <th>Bangsal Ayodya</th>
    <th>Bangsal Alengka</th>
    <th>Bangsal Amarta</th>
    <th>Dokter</th>
    <th>Perawat</th>
    <th>Gizi</th>
    <th>Poli Ibu</th>
    <th>Poli Anak</th>
    <th>Saran Kritik</th>
  </tr>
</thead>

<?php 
$sql = mysqli_query($conn, "SELECT * FROM survey");
$no =1;
while($data = mysqli_fetch_assoc($sql)){
  echo '
  <tbody>
  <tr>
  <td>'.$no.'.</td>
  <td>'.$data['tgl'].'</td>
  <td>'.$data['ivf'].'</td>
  <td>'.$data['kby'].'</td>
  <td>'.$data['poli_gigi'].'</td>
  <td>'.$data['poli_umum'].'</td>
  <td>'.$data['igd'].'</td>
  <td>'.$data['ok'].'</td>
  <td>'.$data['hcu'].'</td>
  <td>'.$data['vk'].'</td>
  <td>'.$data['tppri'].'</td>
  <td>'.$data['laborat'].'</td>
  <td>'.$data['rm'].'</td>
  <td>'.$data['reps'].'</td>
  <td>'.$data['farmasi'].'</td>
  <td>'.$data['bangsal_Astina'].'</td>
  <td>'.$data['bangsal_Ayodya'].'</td>
  <td>'.$data['bangsal_Alengka'].'</td>
  <td>'.$data['bangsal_Amarta'].'</td>
  <td>'.$data['dokter'].'</td>
  <td>'.$data['perawat'].'</td>
  <td>'.$data['gizi'].'</td>
  <td>'.$data['poli_ibu'].'</td>
  <td>'.$data['poli_anak'].'</td>
  <td>'.$data['saran_kritik'].'</td>
  </tr>
  </tbody>
  ';
  $no++;
}

?>
</table> 
 
</body>  
</html>  