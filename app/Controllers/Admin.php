<?php

namespace App\Controllers;
use App\Models\AdminModel;
use App\Models\BarkasModel;

class Admin extends BaseController
{
	protected $adminModel;
	protected $barkasModel;

	public function __construct(){
		$this->session = service('session');
		$this->adminModel = new AdminModel();
		$this->barkasModel = new BarkasModel();
	}
    
    public function index()
    {
        return view('admin/v_index');
    }

    public function profil()
    {
        $admin = $this->adminModel->first();

        $data = [
            'title' => 'Data Admin | DPRD Halteng',
            'admin' => $admin
        ];

        return view('admin/v_profil', $data);
    }

    public function password()
    {
        $admin = $this->adminModel->first();

        $data = [
            'title' => 'Edit Password | DPRD Halteng',
            'admin' => $admin
        ];

        return view('admin/v_password', $data);
    }

    public function editAdmin()
    {
        $InputAdminId = $this->request->getVar('admin_id');
        $InputAdminNama = $this->request->getVar('admin_nama');
        $InputAdminUsername = $this->request->getVar('admin_username');

        // $admin = $this->adminModel->where('admin_id', $InputAdminId)->first();

        if (!$this->validate([
			'admin_nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama harus diisi.'
				]
			],
			'admin_username' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Username harus diisi.'
				]
			]
		])) {

			$validation = \Config\Services::validation();
			
			return redirect()->to('/profil-admin')->withInput()->with('validation', $validation->getErrors());
		}

        $this->adminModel->save([
			'admin_id' => $InputAdminId,
			'admin_nama' => $InputAdminNama,
			'admin_username' => $InputAdminUsername,
		]);

		session()->setFlashdata('pesan', 'Data berhasil diubah.');

		return redirect()->to('/profil-admin');
    }

    public function editPassword()
    {
        $validation = \Config\Services::validation();
        
        $InputAdminId = $this->request->getVar('admin_id');
        $InputPassLama = md5($this->request->getVar('password_lama'));
        $InputPassBaru = md5($this->request->getVar('password_baru'));
        $InputPassBaru2 = md5($this->request->getVar('password_baru2'));

        $admin = $this->adminModel->where('admin_id', $InputAdminId)->first();

        if($InputPassLama != $admin['admin_pass']){
            session()->setFlashdata('error', 'Password lama tidak sama');

            return redirect()->to('/password-admin');
        }

        // dd($admin);

        if (!$this->validate([
			'password_lama' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Password lama harus diisi.',
				]
			],
			'password_baru' => [
				'rules' => 'required|min_length[6]|is_unique[admin.admin_pass]',
				'errors' => [
					'required' => 'Password baru harus diisi.',
                    'min_length' => 'Password tidak boleh kurang dari 6 karakter',
                    'is_unique' => 'Password belum berubah'
				]
            ],
            'password_baru2' => [
				'rules' => 'required|matches[password_baru]',
				'errors' => [
					'required' => 'Verifikasi harus diisi.',
                    'matches' => 'Verifikasi Password tidak sesuai'
				]
            ],
		])) {
			
			return redirect()->to('/password-admin')->withInput()->with('validation', $validation->getErrors());
		}else{
            $this->adminModel->save([
                'admin_id' => $InputAdminId,
                'admin_pass' => $InputPassBaru2
            ]);
    
            session()->setFlashdata('pesan', 'Data berhasil diubah.');
    
            return redirect()->to('/profil-admin');
        }
    
    }

    public function barkas_pending()
    {
        $barkas_pending = $this->barkasModel->findAll();
        $data = [
            'title' => 'Data Barkas Pending',
            'barkas_pending' => $barkas_pending
        ];

        return view('admin/v_barkas', $data);
    }

    public function barkas_ada()
    {
        $barkas_ada = $this->barkasModel->findAll();
        $data = [
            'title' => 'Data Barkas Pending',
            'barkas_ada' => $barkas_ada
        ];

        return view('admin/v_barkasada', $data);
    }

    public function barkas_sold()
    {
        $barkas_sold = $this->barkasModel->findAll();
        $data = [
            'title' => 'Data Barkas Pending',
            'barkas_sold' => $barkas_sold
        ];

        return view('admin/v_barkassold', $data);
    }


	public function delete_barkas()
	{
		//cari gambar
		$gambar = $this->request->getVar('gambar');
		
        unlink('assets/barkas/'.$gambar);

		$this->barkasModel->delete($this->request->getVar('id'));
		//$this->gambarwisataModel->deleteGambar($id);
		session()->setFlashdata('pesan', 'Data berhasil dihapus.');

		return redirect()->to('/barkas-pending');
	}
    
}
