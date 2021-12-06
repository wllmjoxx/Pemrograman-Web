<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UsersModel;

class Users extends BaseController{
    public function index(){
        //echo "ini adalah halaman index user";
        $this->viewall();
    }
    public function viewall(){
        $model = new UsersModel();

        $data['users'] = $model->orderBy('id','DESC')
                                ->findAll();
        echo view("users_viewall",$data);
    }
    public function tambah(){
        return view("users_tambah");
    }
    public function simpan(){
        $model = new UsersModel();
        $namaDepan = $this->request->getVar('namadepan');
        $namaBelakang = $this->request->getVar('namabelakang');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $konfirmasi = $this->request->getVar('konfirmasipassword');

        $namadepaneErr = $namabelakangErr = $emailErr = $passwordErr = $konfirmasiErr = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["namadepan"])) {   
            $namadepaneErr = "nama depan belum diisi !";   
           } else {   
            $namaDepan = simpan($_POST["namadepan"]);   
           }  
        }
        
        if(strcmp($password,$konfirmasi) == 0) {
            $data = [
                'namadepan' => $namaDepan,
                'namabelakang' => $namaBelakang,
                'email' => $email,
                'password' => password_hash($password,PASSWORD_DEFAULT),
            ];
            if($model->insert($data)){
                return redirect()->to(base_url('admin/users'));
                echo "data berhasil disimpan";
            } else {
                echo "data tidak berhasil di simpan";
            }
        } else {
            echo "maaf password tidak sama dengan konfirmasi password";
        }
    }
}