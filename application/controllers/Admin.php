<?php

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        // cek login
  
        if ($this->session->userdata('login') != "sign_up") {
            redirect(base_url());
        }
       
    }
   
    function index()
    {
        $data['ready']   = $this->admin_model->jumlah_data();
        $data['terjual']   = $this->admin_model->jumlah_data_jenis();
        $data['title'] = 'dashboard';
        $data['page']   = 'Data Roti';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer', $data);
    }

    ///function stok_roti()
   // {
      //  $data['roti']   = $this->admin_model->stok_roti();
       /// $data['data']   = $this->admin_model->getAll('jenis_roti');
       // $data['title'] = 'admin';
       // $data['page']   = 'Data Stok Roti Masuk';
       // $this->load->view('templates/header2');
      //  $this->load->view('templates/header', $data);
       /// $this->load->view('admin/stok_roti', $data);
        //$this->load->view('templates/footer', $data);
       // $this->load->view('templates/footer2');
    //}

    function roti()
    {
        $data['title']  = 'data roti';
        $data['page']   = 'Data Roti';
        $data['data']   = $this->admin_model->getAll('jenis_roti');
        $data['roti']   = $this->admin_model->getRoti();
        $this->load->view('templates/header2');
        $this->load->view('templates/header', $data);
        $this->load->view('admin/data_roti', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/footer2');
    }
    function jenis()
    {   
        $data['jenis']  = $this->admin_model->getAll('jenis_roti');
        $data['title']  = 'data jenis';
        $data['page']   = 'Data Jenis Roti';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/data_jenis', $data);
        $this->load->view('templates/footer');
    }

    function user()
    {   
        $data['user']  = $this->admin_model->getAll('user');
        $data['title']  = 'data user';
        $data['page']   = 'Data User';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/data_user', $data);
        $this->load->view('templates/footer');
    }

    function forecasting()
    {
        $data['aktual']     = $this->admin_model->getAll('jenis_roti');
        $data['periode']    = $this->admin_model->minggu();
        $data['title']      = 'forecasting';
        $data['page']       = 'Detail Forecasting';
        
        $this->load->view('templates/header', $data);
        $this->load->view('admin/forecasting', $data);
        $this->load->view('templates/footer');
    }

    

//function edit data
    function edit_roti()
    {
        $this->form_validation->set_rules('nama_roti', 'Nama Roti', 'required');
        $this->form_validation->set_rules('jenis_roti', 'Jenis Roti', 'required');
        $this->form_validation->set_rules('periode', 'Periode ke-', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        
        if ($this->form_validation->run()) {
            $id = $_POST['id_roti'];
            $this->admin_model->edit_roti($id);
            echo "<script>alert('Data berhasil diupdate!');</script>";
            echo "<script>window.location='".site_url('data-roti')."'</script>";

        }else{
            echo "<script>alert('Data gagal diupdate!');</script>";
            echo "<script>window.location='".site_url('data-roti')."'</script>";
        
        }
      
    }


    function edit_jenis()
    {
        $this->form_validation->set_rules('nama_jenis', 'jenis Roti', 'required');
        
        if ($this->form_validation->run()) {
            $id = $_POST['id_jenis'];
            $this->admin_model->edit_jenis($id);
            echo "<script>alert('Data berhasil diupdate!');</script>";
            echo "<script>window.location='".site_url('Admin/jenis')."'</script>";

        }else{
            echo "<script>alert('Data gagal diupdate!');</script>";
            echo "<script>window.location='".site_url('Admin/jenis')."'</script>";
        
        }
      
    }


//function delete data
    function delete_roti($id)
    {
      $where = array(
        'id_roti' => $id
      );
      $this->admin_model->delete_data($where, 'data_roti');
      echo "<script>alert('Data berhasil dihapus!');</script>";
      echo "<script>window.location='".site_url('data-penjualan')."'</script>";
    }

    function delete_all(){
        $id = $_POST['id_roti']; // Ambil data yang dikirim oleh melalui form submit
        $this->admin_model->delete_all($id); // Panggil fungsi delete dari model
        
        redirect('data-penjualan');
        
    }


    function delete_jenis($id)
    {
      $where = array(
        'id_jenis' => $id
      );
      $this->admin_model->delete_data($where, 'jenis_roti');
      echo "<script>alert('Data berhasil dihapus!');</script>";
      echo "<script>window.location='".site_url('Admin/jenis')."'</script>";
    }

    function delete_user($id)
    {
      $where = array(
        'id_user' => $id
      );
      $this->admin_model->delete_data($where, 'user');
      echo "<script>alert('Data berhasil dihapus!');</script>";
      echo "<script>window.location='".site_url('Admin/user')."'</script>";
    }


//function add data 
    function addroti()
    {
        $validation     = $this->form_validation;
        $this->form_validation->set_rules('nama_roti', 'Nama Roti', 'required');
        $this->form_validation->set_rules('jenis_roti', 'Jenis Roti', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');

        if ($validation->run() == false) {
            $data['data']   = $this->admin_model->getAll('jenis_roti');
            $data['title']  = 'admin';
            $data['page']   = 'Tambah Data Roti';
            $this->load->view('templates/header', $data);
            $this->load->view('admin/add_roti', $data);
            $this->load->view('templates/footer');
        } else {
            $this->admin_model->tambah_roti();
            echo "<script>alert('Data berhasil dihapus!');</script>";
            echo "<script>window.location='".site_url('admin/roti')."'</script>";
        }
    }

    function edit_user()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run()) {
            $id = $_POST['id_user'];
            $this->admin_model->edit_user($id);
            echo "<script>alert('Data berhasil diupdate!');</script>";
            echo "<script>window.location='".site_url('data-user')."'</script>";

        }else{
            echo "<script>alert('Data gagal diupdate!');</script>";
            echo "<script>window.location='".site_url('data-user')."'</script>";
        
        }
      
    }

    function addjenis()
    {
        $validation     = $this->form_validation;
        $this->form_validation->set_rules('jenis_roti', 'Jenis Roti', 'required');

        if ($validation->run() == false) {
            echo "<script>alert('Data gagal diupdate!');</script>";
            echo "<script>window.location='".site_url('admin/jenis')."'</script>";
        } else {
            $this->admin_model->tambah_jenis();
            echo "<script>alert('Data berhasil ditambahkan!');</script>";
            echo "<script>window.location='".site_url('admin/jenis')."'</script>";
        }
    }

    function adduser()
    {
        $validation     = $this->form_validation;
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($validation->run()) {
              //get user inputs
              $nama_lengkap   = $this->input->post('username');
              $email          = $this->input->post('email');
              $password       = $this->input->post('password');
  
              //generate simple random code
              $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
              $code = substr(str_shuffle($set), 0, 12);
  
              //insert user to users table and get id
              $user['username']       = $nama_lengkap;
              $user['email']          = $email;
              $user['password']       = base64_encode($password);
              $user['active']         = false;
              $user['code']           = $code;
              $id = $this->admin_model->tambah_user($user);
  
              //set up email
              $config = array(
                  'protocol' => 'smtp',
                  'smtp_host' => 'ssl://smtp.googlemail.com',
                  'smtp_port' => 465,
                  'smtp_user' => 'phyranyansen98@gmail.com', // change it to yours
                  'smtp_pass' => 'phyran240498', // change it to yours
                  'smtp_username' => 'yan',
                  'mailtype' => 'html',
                  'charset' => 'iso-8859-1',
                  'wordwrap' => TRUE
              );
  
              $message =     "
                          
                              <h2>Thank you for Registering.</h2>
                              <p>Your Account:</p>
                              <p>Email: " . $email . "</p>
                              <p>Password: " . $password . "</p>
                              <p>Please click the link below to activate your account.</p>
                              <h4><a href='" . base_url() . "admin/activate/" . $id . "/" . $code . "'>Activate My Account</a></h4>
                      
                          ";
  
              $this->load->library('email', $config);
              $this->email->initialize($config);
              $this->email->set_newline("\r\n");
              $this->email->from($config['smtp_user']);
              $this->email->to($email);
              $this->email->subject('Signup Verification Email');
              $this->email->message($message);
              $this->email->send();
  
              //sending email
              if (!$this->email->send()) {
                  echo    '<script type="text/javascript">
                  alert(\' Activation code sent to email!!\');
                  window.location.replace("' . base_url('admin') . '");
              </script>';
              } else {
                  $this->session->set_flashdata('message', $this->email->print_debugger());
              }
  
              redirect('admin/user');
        }
    }


    public function activate()
    {
        $id =  $this->uri->segment(3);
        $code = $this->uri->segment(4);

        //fetch user details
        $user = $this->admin_model->getUser($id);

        //if code matches
        if ($user['code'] == $code) {
            //update user active status
            $data['active'] = true;
            $query = $this->admin_model->activate($data, $id);

            if ($query) {
                echo    '<script type="text/javascript">
                               alert(\' User activated successfully!\');
                               window.location.replace("' . base_url('admin/user') . '");
                           </script>';
            } else {
                     echo    '<script type="text/javascript">
                               alert(\' Something went wrong in activating account!\');
                               window.location.replace("' . base_url('admin/user') . '");
                           </script>';
            }
        } else {
            echo    '<script type="text/javascript">
                               alert(\' Cannot activate account. Code didnt match!\');
                               window.location.replace("' . base_url('admin/user') . '");
                           </script>';
        }
        redirect('admin/user');
    }





    function get_periode()
    {
        $tgl = $_POST['tgl'];
		$dropdown_chained = $this->admin_model->minggu();
        $minggu=1;
		foreach ($dropdown_chained as $baris) {
           $no = $minggu++;
            if($baris['tgl']==$tgl)
            {
                null;
            }else if($baris['tgl']>$tgl){
                echo "<option value='".$baris['tgl']."'>".$baris['tgl']."</option>"; 
            }
            
		}
    }



//function exponential method proccess
function forecasting_process()
{
    $id              = $_POST['jenis_roti'];
    $periode_awal    = $_POST['periode_awal'];
    $periode_akhir   = $_POST['periode_akhir'];
    $alpha           = $_POST['alpha'];
    $looping         = $this->admin_model->forecasting($id, $periode_awal, $periode_akhir);

    //variabel operator
    $ramalan_sebelumnya = 0;
    $ramalan    = 0;
    $total_mape = 0;

    foreach ($looping as $loop => $key) {
        $row = array();
        if ($key['tgl'] == $periode_awal) {
            $ramalan = ($alpha * $key['jumlah']) + ((1 - $alpha) * $key['jumlah']);
            $ramalan_sebelumnya = $ramalan;
        } else {
            $ramalan = ($alpha * $key['jumlah']) + ((1 - $alpha) * $ramalan_sebelumnya);
            $ramalan_sebelumnya = $ramalan;
        }

        $mape = abs(($key['jumlah'] - $ramalan) / $key['jumlah']) * (100);

        $row['nama_roti'] = $key['nama_roti'];
        $row['tgl'] = "Periode ke - ".$key['tgl'];
        $row['jumlah'] = $key['jumlah'];
        $row['ramalan'] = number_format($ramalan, 2);
        $row['mape'] = number_format($mape, 2);
        $total_mape += $row['mape'];

        
        $tanggal = $key['tgl'];
        $minggu_lalu = date('Y-m-d', strtotime('+1 week', strtotime($tanggal)));
        $last_weeks = $minggu_lalu;
        $record[] = $row;
    }

    // Total Semua Record Untuk Mengambil Nilai Angka Terakhir
    $count_data = count($record) - 1;
    $ramalan_selanjutnya = ($alpha * $record[$count_data]['jumlah']) + ((1 - $alpha) * $record[$count_data]['ramalan']);
    $mape = abs(($key['jumlah'] - $ramalan) / $key['jumlah']) * (100);

    //1 periode selanjutnya
    $next_weeks = $last_weeks;
    $row_terakhir['nama_roti'] = $record[$count_data]['nama_roti'];
    $row_terakhir['tgl']       = "Periode ke - $next_weeks";
    $row_terakhir['jumlah'] = "0";
    $row_terakhir['ramalan'] = number_format($ramalan_selanjutnya, 2);
    $row_terakhir['mape'] = "0";
    $record_terakhir[$count_data + 1] = $row_terakhir;

    //2 periode selanjutnya
    $ramalan_selanjutnya_2periode = ($alpha * $record[$count_data]['jumlah']) + ((1 - $alpha) * $ramalan_selanjutnya);
    $tanggal = $last_weeks;
    $minggu_lalu2 = date('Y-m-d', strtotime('+1 week', strtotime($tanggal)));
    $next_weeks = $minggu_lalu2;
    $row_terakhir['nama_roti'] = $record[$count_data]['nama_roti'];
    $row_terakhir['tgl']       = "Periode ke - $next_weeks";
    $row_terakhir['jumlah'] = "0";
    $row_terakhir['ramalan'] = number_format($ramalan_selanjutnya_2periode, 2);
    $row_terakhir['mape'] = "0";
    $record_terakhir[$count_data + 2] = $row_terakhir;

    //3 periode selanjutnya
    $ramalan_selanjutnya_3periode = ($alpha * $record[$count_data]['jumlah']) + ((1 - $alpha) * $ramalan_selanjutnya_2periode);
    $tanggal = $minggu_lalu2;
    $minggu_lalu3 = date('Y-m-d', strtotime('+1 week', strtotime($tanggal)));
    $next_weeks = $minggu_lalu3;
    $row_terakhir['nama_roti'] = $record[$count_data]['nama_roti'];
    $row_terakhir['tgl']       = "Periode ke - $next_weeks";
    $row_terakhir['jumlah'] = "0";
    $row_terakhir['ramalan'] = number_format($ramalan_selanjutnya_3periode, 2);
    $row_terakhir['mape'] = "0";
    $record_terakhir[$count_data + 3] = $row_terakhir;

    $array_merge = array_merge($record, $record_terakhir);

    $data = [
        'record' => $array_merge,
        'rata_mape' => number_format($total_mape / ($count_data), 2)
    ];

    return $data;
}

function forecasting_view()
{
    $data_forecasting = $this->forecasting_process();
    $html = "";
    foreach ($data_forecasting['record'] as $key => $value) {
        $html .= "<tr>";
        $html .= "<td>" . $value['nama_roti'] . "</td>";
        $html .= "<td>" . $value['tgl'] . "</td>";
        $html .= "<td>" . $value['jumlah'] . "</td>";
        $html .= "<td>" . $value['ramalan'] . "</td>";
        $html .= "<td>" . $value['mape'] . "</td>";
        $html .= "</tr>";

    }

    
    $html .= "<tr>";
    $html .= "<td><b>Rata-rata</b></td>";
    $html .= "<td></td>";
    $html .= "<td></td>";
    $html .= "<td></td>";
    $html .= "<td><b>" .  $data_forecasting['rata_mape'] . "</b></td>";
    $html .= "</tr>";

    echo $html;
}

function forecasting_json()
{
    $data_forecasting = $this->forecasting_process();

    foreach ($data_forecasting['record'] as $key => $value) {
        $row = array();
        $row['tgl']    = $value['tgl'];
        $row['jumlah'] = $value['jumlah'];
        $row['ramalan'] = $value['ramalan'];
        $record[] = $row;
    }

    echo json_encode($record);
}


   


}
