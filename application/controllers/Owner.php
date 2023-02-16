<?php

class Owner extends CI_Controller {

    //function index()
   // {
      //  $data['ready']   = $this->admin_model->jumlah_data();
       // $data['terjual']   = $this->admin_model->jumlah_data_jenis();
       // $data['title'] = 'Owner';
       // $data['page']   = 'Dashboard';
       // $this->load->view('templates/owner/header', $data);
       // $this->load->view('owner/index', $data);
        //$this->load->view('templates/owner/footer', $data);
  //  }

   // function forecasting()
   // {
      //  $data['aktual']     = $this->admin_model->getAll('jenis_roti');
      //  $data['periode']    = $this->admin_model->minggu();
      //  $data['title']      = 'admin';
       // $data['page']       = 'Detail Forecasting';
      //  $this->load->view('templates/owner/header', $data);
     //   $this->load->view('admin/forecasting', $data);
     //   $this->load->view('templates/owner/footer');
   // }

  //  function get_periode()
   // {
     //   $tgl = $_POST['tgl'];
	//	$dropdown_chained = $this->admin_model->minggu();
   //     $minggu=1;
	//	foreach ($dropdown_chained as $baris) {
     ///      $no = $minggu++;
       //     if($baris['tgl']==$tgl)
    //        {
   //             null;
     //       }else if($baris['tgl']>$tgl){
     //           echo "<option value='".$baris['tgl']."'>".$no." Minggu</option>"; 
  //          }
            
//	//	}
   // }



//function exponential method proccess
  //  function forecasting_process()
 //   {
   //     $id              = $_POST['jenis_roti'];
 //       $periode_awal    = $_POST['periode_awal'];
   //     $periode_akhir   = $_POST['periode_akhir'];
  //      $alpha           = $_POST['alpha'];
    //    $looping         = $this->admin_model->forecasting($id, $periode_awal, $periode_akhir);

 //       //variabel operator
    //    $ramalan_sebelumnya = 0;
    //    $ramalan    = 0;
    //    $total_mape = 0;

   //     foreach ($looping as $loop => $key) {
  //          $row = array();
   //         if ($key['minggu'] == 1) {
  //              $ramalan = ($alpha * $key['jumlah']) + ((1 - $alpha) * $key['jumlah']);
   //             $ramalan_sebelumnya = $ramalan;
    //        } else {
  //  //           $ramalan = ($alpha * $key['jumlah']) + ((1 - $alpha) * $ramalan_sebelumnya);
      //          $ramalan_sebelumnya = $ramalan;
    //        }

        //    $mape = abs(($key['jumlah'] - $ramalan) / $key['jumlah']) * (100);

     //       $row['nama_roti'] = $key['nama_roti'];
      //      $row['minggu'] = "Minggu ke - ".$key['minggu'];
      //      $row['jumlah'] = $key['jumlah'];
        //    $row['ramalan'] = number_format($ramalan, 2);
      //      $row['mape'] = number_format($mape, 2);
      //      $total_mape += $row['mape'];
       //     $last_weeks = $key['minggu'];
       //     $record[] = $row;
      //  }

        // Total Semua Record Untuk Mengambil Nilai Angka Terakhir
      //  $count_data = count($record) - 1;
     //   $ramalan_selanjutnya = ($alpha * $record[$count_data]['jumlah']) + ((1 - $alpha) * $record[$count_data]['ramalan']);
     //   $mape = abs(($key['jumlah'] - $ramalan) / $key['jumlah']) * (100);

    //    $next_weeks = $last_weeks + 1;
     //   $row_terakhir['nama_roti'] = $record[$count_data]['nama_roti'];
   //     $row_terakhir['minggu'] = "Minggu ke - $next_weeks";
    //    $row_terakhir['jumlah'] = "0";
     //   $row_terakhir['ramalan'] = number_format($ramalan_selanjutnya, 2);
    //    $row_terakhir['mape'] = "0";
     //   $record_terakhir[$count_data + 1] = $row_terakhir;

     //   $array_merge = array_merge($record, $record_terakhir);

     //   $data = [
   //         'record' => $array_merge,
    //        'rata_mape' => number_format($total_mape / ($count_data), 2)
    //    ];
//
   //     return $data;
        
        
 //   }

  //  function forecasting_view()
  //  {
    //    $data_forecasting = $this->forecasting_process();
      //  $html = "";
        
        //foreach ($data_forecasting['record'] as $key => $value) {
          //  $html .= "<tr>";
            // $html .= "<td>" . $value['nama_roti'] . "</td>";
      //      $html .= "<td>" . $value['minggu'] . "</td>";
        //    $html .= "<td>" . $value['jumlah'] . "</td>";
          //  $html .= "<td>" . $value['ramalan'] . "</td>";
       //     $html .= "<td>" . $value['mape'] . "</td>";
         //   $html .= "</tr>";
      //  }

        //$html .= "<tr>";
      //  $html .= "<td><b>Rata-rata</b></td>";
       // $html .= "<td></td>";
      //  $html .= "<td></td>";
      //  $html .= "<td></td>";
     //   $html .= "<td><b>" .  $data_forecasting['rata_mape'] . "</b></td>";
     //   $html .= "</tr>";

     //   echo $html;
   // }

   // function forecasting_json()
   // {
   //     $data_forecasting = $this->forecasting_process();

     //   foreach ($data_forecasting['record'] as $key => $value) {
     //       $row = array();
        //    $row['minggu'] = $value['minggu'];
      //      $row['jumlah'] = $value['jumlah'];
      //      $row['ramalan'] = $value['ramalan'];
     //       $record[] = $row;
        //}

    //    echo json_encode($record);
   // }




}