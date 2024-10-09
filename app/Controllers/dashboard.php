<?php
  namespace App\Controllers;
  use App\Models\DaftarModel;
  use CodeIgniter\Controller;
  
  class Dashboard extends Controller {
    // Gk bisa dipanggil dalam function bawah, tapi hard code langsung bisa, gk ngerti kenapa :(
    public function loggedInCheck() {
      $session = session();
      if($session->logged_in != True) {
        $session->setFlashdata('error', "Anda belum login");
        return redirect()->to('/login');
      }
      return redirect()->to('/login');
    }

    public function dashboard_get() {
      $this->load->loggedInCheck();
      $DaftarModel = new DaftarModel();
      $data['ambildatasemua'] = $DaftarModel->get_data_all();
      return view('dashboard',$data);
    } 

    public function edit($id_pelanggan){
      // $this->loggedInCheck();
      $model = new DaftarModel();
      $data['ambildata'] = $model->find($id_pelanggan);
      return view('edit',$data);
    }

    public function profile_get(){
      // $this->loggedInCheck();
      $session = session();
      $model = new DaftarModel();
      $data['ambildata'] = $model->find($session->ID_PENDAFTARAN);
      return view('profile',$data);
    }
  }
?>