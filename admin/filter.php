<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "kepuasan_pasien");  
      $output = '';  
      $query = "  
           SELECT * FROM survey  
           WHERE tgl BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-border" >
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
                        <th>Saran Kritik</th>
                    </tr>
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
        $no =1;
           while($data = mysqli_fetch_assoc($result))  
           {  
                $output .= '  
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
                        <td>'.$data['saran_kritik'].'</td>
                    </tr>
                ';  
                $no++;
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">DATA Tidak Ditemukan!!</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>
