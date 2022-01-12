<?php

namespace App\Controllers;
// use App\Models\AspirasiModel;
use App\Models\BarkasModel;

class BarkasController extends BaseController
{
	// protected $aspirasiModel;
	protected $barkasModel;
    protected $session;

	public function __construct(){
		$this->session = service('session');
		// $this->aspirasiModel = new AspirasiModel();
		$this->barkasModel = new BarkasModel();
	}

    public function getAspirasi($id = false)
    {
        // if($id == false){
        //     $data = $this->aspirasiModel->findAll();
        // }else{
        //     $data = $this->aspirasiModel->where('aspirasi_id', $id)->first();
        // }

        // return $this->response->setJSON($data);

    }
}
