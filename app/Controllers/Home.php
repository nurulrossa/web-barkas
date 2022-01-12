<?php

namespace App\Controllers;
use App\Models\AdminModel;

class Home extends BaseController
{
	protected $adminModel;
    
	public function __construct(){
		$this->session = service('session');
		$this->adminModel = new AdminModel();
	}

    public function login()
    {
        return view('auth/v_login');
    }

    public function prosesLogin()
	{
        // validasi input
		if (!$this->validate([
			'username' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Silahkan isi username anda.'
				]
            ],
            'password' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Password tidak boleh kosong.'
				]
            ]
		])) {
			$validation = \Config\Services::validation();
			$data = $validation->getErrors();
			return redirect()->to('/login')->withInput()->with('validation', $validation->getErrors());
		}

		$admin = $this->adminModel->asObject()->where('admin_username', $this->request->getVar('username'))->first();
		if ($admin) {
			if (md5($this->request->getVar('password')) == $admin->admin_pass) {
				session()->set([
					'username'  => $admin->admin_username,
					'admin_nama'=> $admin->admin_nama,
					'logged_in' => TRUE
				]);
				return redirect()->to('/admin');
			}
            return redirect()->back()->withInput()->with('error_pass', 'Password salah!');
		}else{
			return redirect()->back()->withInput()->with('error', 'Username atau Password salah!');
		}
	}

	public function logout()
	{
		session_destroy();
		return redirect()->to('/login');

	}

}
