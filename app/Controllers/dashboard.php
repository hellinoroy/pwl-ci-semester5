<?php
  namespace App\Controllers;
  use App\Models\DaftarModel;
  use CodeIgniter\Controller;
  
  class Dashboard extends Controller {

    public function dashboard_get() {
      $DaftarModel = new DaftarModel();
      $data['ambildatasemua'] = $DaftarModel->get_data_all();
      return view('dashboard',$data);
    } 

    public function edit($id_pelanggan){
      $model = new DaftarModel();
      $data['ambildata'] = $model->find($id_pelanggan);
      return view('edit',$data);
    }

    public function profile_get(){
      $session = session();
      $model = new DaftarModel();
      $data['ambildata'] = $model->find($session->ID_PENDAFTARAN);
      return view('profile',$data);
    }

    public function update($id_pelanggan) {
      $model = new DaftarModel();

      // Ambil data dari form
      $data = [
        "NAMA"            => $this->request->getPost("NAMA"),
        "AGAMA"           => $this->request->getPost("AGAMA"),
        "TEMPATLAHIR"     => $this->request->getPost("TEMPATLAHIR"),
        "TINGGIBADAN"     => $this->request->getPost("TINGGIBADAN"),
        "BERATBADAN"      => $this->request->getPost("BERATBADAN"),
        "NAMAHUBUNGAN"    => $this->request->getPost("NAMAHUBUNGAN"),
        "JENIS_DOKUMEN"   => $this->request->getPost("JENIS_DOKUMEN"),
        "NOMOR_DOKUMEN"   => $this->request->getPost("NOMOR_DOKUMEN"),
        "NAMAHOBBY"       => $this->request->getPost("NAMAHOBBY"),
        "ALAMAT"          => $this->request->getPost("ALAMAT"),
      ];

      // Update data pelanggan di database
      $model->update($id_pelanggan, $data);
      // Redirect ke halaman daftar pelanggan dengan pesan sukses
      session()->setFlashdata('success', 'Data pelanggan berhasil diperbarui');
      return redirect()->to('/dashboard');
    }

    public function delete($id_pelanggan){
      $session = session();
      $DeleteData = new DaftarModel();
      $DeleteData->delete($id_pelanggan);
      session()->setFlashdata('success', 'Data pelanggan berhasil dihapus');
      return redirect()->to('/dashboard');    
    }



  }
?>