<?php require('session.php');?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Ajax PHP MySQL Date Range Search using jQuery DatePicker</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
           <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      </head>  
      <?php
  //login confirmation
  confirm_logged_in();

  ?>
      <body>  
           <br /><br />  
           <div class="container" style="width:100%;">  
                <h2 align="center">DATA KEPUASAN PENGUNJUNG RSKIA SADEWA</h2> <br><br>
                <div class="col-md-3">  
                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-3">  
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                </div>  
                <div class="col-md-2">  
                     <input type="button" name="filter" id="filter" value="Cari Data" class="btn btn-info" />  
                </div> 
                <div class="col-md-2">  
                     <a type="button" class="btn btn-primary" href="http://localhost/survey/admin/eksport.php" target="_blank">Eksport Excel</a>
                </div> 
                <div class="col-md-2">
                    <a type="button" href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </div>
                <div style="clear:both"></div>                 
                <br />  
                <div id="order_table">  
                     <table class="table"  style="width:100%">
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
		                    <th>Saran Kritik</th>
		                </tr>
                     </thead>
		                
                <?php 
                define("BASEPATH", dirname(__FILE__));
                include '../connection/conn.php';
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
                        <td>'.$data['saran_kritik'].'</td>
                    </tr>
                    </tbody>
                    ';
                    $no++;
                }
                ?>
        </table> 
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if(from_date != '' && to_date != '')  
                {  
                     $.ajax({  
                          url:"filter.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data); 
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });
      });  
 </script>