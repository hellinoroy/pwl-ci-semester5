<?php

namespace App\Controllers;
use App\Models\DaftarModel;
use CodeIgniter\Controller;

class User extends Controller
{  
    public function index() {
      return view('home');
    }

    public function login_get() {
      return view('/login');
    }

    public function login_post() {
      $session = session();
      $DaftarModel = new DaftarModel();

      $username = $this->request->getPost("USERNAME"); 
      $password = $this->request->getPost("PASSWORD");

      // Error
      $data = $DaftarModel->where("USERNAME", $username)->first(); 

      if ($data) {
        $hashed_password = $data["PASSWORD"];

        if (password_verify($password, $hashed_password)) {

          $session->set([
            "NAMA" => $data["NAMA"],
            "ID_PENDAFTARAN" => $data["ID_PENDAFTARAN"],
            "logged_in" => TRUE
          ]);
          $session->setFlashdata('success', "Welcome " . $data["USERNAME"]);
          
          return redirect()->to('/dashboard', null, 'refresh');
        } else {
          $session->setFlashdata('error', "Password Salah");
          return redirect()->to('/login');
        }
      } else {
        $session->setFlashdata('error', "Username Tidak Ada");
        return redirect()->to('/login', null, 'refresh');
      }      
    }

    public function register_get() {
        return view('/register');
    }

    public function register_post() {
      $session = service('session');
      $DaftarModel = new DaftarModel();

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
        "USERNAME"        => $this->request->getPost("USERNAME"),
        "PASSWORD"        => $this->hashPassword($this->request->getPost("PASSWORD"))
      ];
      
      if ($DaftarModel->save($data)) {
        $session->setFlashdata("success", 'Pendaftaran Berhasil');
      } else {
        $session->setFlashdata("error", "Registrasi Gagal");
      }
      return redirect()->to('/login', null, 'refresh');

      // if ($DaftarModel->save($data)){
      //   $session->setFlashdata("success", 'Pendaftaran Berhasil');
      // } else {
      //   $session->setFlashdata("error", 'Pendaftaran Gagal. Tolong Hubungi Pihak Berwajib');
      // }

      // return redirect()->to('/login');

    }

    public function logout() {
      $session = service('session');
      $session->destroy();
      return redirect()->to('/');
    }

    // Gk bisa dipanggil dalam function bawah, tapi hard code langsung bisa, gk ngerti kenapa :(
    // public function loggedInCheck() {
    //   $session = session();
    //   if($session->logged_in != True) {
    //     $session->setFlashdata('error', "Anda belum login");
    //     return redirect()->to('/login');
    //   }
    // }

  private function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
  }

}
