<?php

namespace App\Controllers;
use App\Models\barkasModel;

class User extends BaseController
{
	// protected $partaiModel;
	protected $barkasModel;
	protected $session;

	public function __construct(){
        $this->session = service('session');
        $this->barkasModel = new BarkasModel();
        
	}
    
    public function index()
    {
        $barkas = $this->barkasModel->where('barkas_status', 'Ada')->findAll();
        $data = [
            'title' => 'BARKAS AMANAH',
            'barkas' => $barkas
        ];

        return view('v_index', $data);
    }

    public function daftarbarkas()
    {
		session();

        $data = [
            'title' => 'Daftar Barkas | DPRD Halteng'
        ];

        return view('v_daftar', $data);
    }
    

    public function save_barkas()
    {
		// validasi input
		if (!$this->validate([
            'gambar' => [
				'rules' => 'uploaded[gambar]|max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
				'errors' => [
					'uploaded' => 'Masukkan gambar barkas.',
					'max_size' => 'Ukuran gambar terlalu besar.',
					'is_image' => 'Yang anda pilih bukan gambar.',
					'mime_in' => 'Yang anda pilih bukan gambar.'
				]
                ],
			'nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama barkas harus diisi.'
				]
			],
			'harga' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Harga barkas harus diisi.'
				]
			],
			'Kontak' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Kontak pemilik barkas harus diisi.'
				]
			],
			'pemilik' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama pemilik barkas harus diisi.'
				]
			]
		])) {

			$validation = \Config\Services::validation();
			//dd($validation);
			return redirect()->to('/daftarbarkas')->withInput()->with('validation', $validation->getErrors());
		}
        // ambil gambar
        $fileGambar = $this->request->getFile('gambar');
        $namaGambar = $fileGambar->getRandomName();
        $fileGambar->move('assets/barkas', $namaGambar);

        $this->barkasModel->save([
            'barkas_nama' => $this->request->getVar('nama'),
            'barkas_gambar' => $namaGambar,
            'barkas_harga' => $this->request->getVar('harga'),
            'barkas_pemilik' => $this->request->getVar('pemilik'),
            'barkas_kontak' => $this->request->getVar('kontak'),
            'barkas_wa' => $this->request->getVar('wa'),
            'barkas_desc' => $this->request->getVar('desc'),
        ]);

        session()->setFlashdata('pesan', 'Silahkan lakukan pembayaran 10k melalui no rek 123456 atas nama Nurul Rossa!');

        // dd(session()->getFlashdata('pesan'));

        return redirect()->to('/daftarbarkas');
    }

    public function partai()
    {
        helper('index_helper');

        helper('index_helper');
        $partai = $this->partaiModel->findAll();
        $data = [
            'title' => 'Partai | DPRD Halteng',
            'partai' => $partai
        ];

        return view('v_partai', $data);
    }

    public function galeri()
    {
        helper('index_helper');
        $kegiatan = $this->kgModel->findAll();

        $data = [
            'title' => 'Galeri | DPRD Halteng',
            'kegiatan' => $kegiatan
        ];

        return view('v_galeri', $data);
    }

    public function fraksi($partai = false)
    {
        helper('index_helper');

        if($partai != false){

            $fraksi = $this->partaiModel->join('anggota_dewan', 'anggota_dewan.ad_fraksi = partai.partai_id')
                                        ->join('komisi', 'komisi.komisi_id = anggota_dewan.ad_komisi')
                                        ->where('partai_slug', $partai)
                                        ->findAll();
            $nama_partai = $this->partaiModel->where('partai_slug', $partai)->first();

            $data = [
                'title' => $nama_partai['partai_nama'].' | DPRD Halteng',
                'anggota_fraksi' => $fraksi,
                'partai' => $nama_partai
            ];

            $ip = $this->request->getIPAddress();

            if($this->request->getCookie(urldecode($partai)) == null){
                $this->partaiModel->set('partai_viewers', $nama_partai['partai_viewers'] + 1)
                                    ->where('partai_slug', $partai)
                                    ->update();

                setCookie(urldecode($partai), $ip, time() + 31556926, false);
            }

            return view('v_fraksi', $data);  
        }

    }

    public function komisi()
    {
        helper('index_helper');
        $komisi = $this->komisiModel->orderby('komisi_nama', 'ASC')
                                    ->where('komisi_id !=', 1)
                                    ->findAll();
        $data = [
            'title' => 'Komisi | DPRD Halteng',
            'komisi' => $komisi
        ];

        return view('v_komisi', $data);
    }

    public function agenda()
    {
        helper('index_helper');

        $today = date('Y-m-d');
        $agenda_today = $this->agendaModel->like('agenda_start', $today)
                                        //   ->like('agenda_start', '2021-11-05') //coba
                                          ->orderby('agenda_start', 'ASC')
                                          ->findAll();
                                          
        $agenda_besok = $this->agendaModel->like('agenda_start', date('Y-m-d', strtotime("tomorrow")))
                                        //   ->like('agenda_start', '2021-11-06') //coba
                                          ->orderby('agenda_start', 'ASC')
                                          ->findAll();

        $data = [
            'title' => 'Agenda | DPRD Halteng',
            'agenda_today' => $agenda_today,
            'agenda_besok' => $agenda_besok
        ];

        return view('v_agenda', $data);
    }

    public function blog()
    {
        helper('index_helper');
        
        $jenis_berita = $this->jbModel->findAll();

        $berita = $this->beritaModel->join('jenis_berita', 'jenis_berita.jb_id = berita.berita_jenis')
                                    ->orderBy('berita_id', 'DESC')
                                    ->paginate(5);

        $beritaPager = $this->beritaModel->join('jenis_berita', 'jenis_berita.jb_id = berita.berita_jenis')->pager;

        $beritaUtama = $this->beritaModel->where('berita_utama', 'yes')
                                            ->orderBy('berita_id', 'DESC')
                                            ->paginate(3);

        $beritaLainya = $this->beritaModel->join('jenis_berita', 'jenis_berita.jb_id = berita.berita_jenis')
                                            ->orderBy('berita_id', 'RANDOM')
                                            ->paginate(5);

        $beritaPopuler = $this->beritaModel->join('jenis_berita', 'jenis_berita.jb_id = berita.berita_jenis')
                                            ->orderBy('berita_viewers', 'DESC')
                                            ->paginate(5);

        // dd($beritaUtama);

        $data = [
            'title' => 'Berita | DPRD Halteng',
            'jenis_berita' => $jenis_berita,
            'berita' => $berita,
            'pager' => $beritaPager,
            'beritaUtama' => $beritaUtama,
            'beritaLainnya' => $beritaLainya,
            'beritaPopuler' => $beritaPopuler
        ];

        return view('v_blog', $data);
    }

    public function detail_blog($slug)
    {   
        helper('index_helper');

        $berita = $this->beritaModel->join('jenis_berita', 'jenis_berita.jb_id = berita.berita_jenis')
                                        ->where('berita_slug', $slug)
                                        ->first();

        $beritaTerkait = $this->beritaModel->join('jenis_berita', 'jenis_berita.jb_id = berita.berita_jenis')
                                            ->where('berita_jenis', $berita['berita_jenis'])
                                            ->where('berita_slug !=' ,$slug)
                                            ->paginate(5);

        $beritaTerbaru = $this->beritaModel->join('jenis_berita', 'jenis_berita.jb_id = berita.berita_jenis')
                                            ->orderBy('berita_id', 'DESC')
                                            ->paginate(5);

        $komentar = $this->cbModel->join('berita', 'berita.berita_id = komentar_berita.cb_berita')
                                  ->where('berita_slug', $slug)
                                  ->findAll();

        $data = [
            'title' => $berita['berita_judul'].' | DPRD Halteng',
            'berita' => $berita,
            'beritaTerkait' => $beritaTerkait,
            'beritaTerbaru' => $beritaTerbaru,
            'komentar' => $komentar
        ];

        $ip = $this->request->getIPAddress();

        if($this->request->getCookie(urldecode($slug)) == null){
            $this->beritaModel->set('berita_viewers', $berita['berita_viewers'] + 1)
                                ->where('berita_slug', $slug)
                                ->update();

            setCookie(urldecode($slug), $ip, time() + 31556926, false);
        }

        return view('v_detail-blog', $data);
    }

    public function about()
    {
        helper('index_helper');

        $info = $this->infoModel->first();
        $data = [
            'title' => 'About | DPRD Halteng',
            'info' => $info
        ];

        return view('v_about', $data);
    }

    public function detail_komisi($nama = false)
    {
        helper('index_helper');

        $data = [
            'title' => 'Detail Komisi | DPRD Halteng'
        ];

        if($nama != false){
            $komisi = $this->komisiModel->where('komisi_nama', $nama)->first();
            $anggota = $this->anggotaModel->join('komisi', 'komisi.komisi_id = anggota_dewan.ad_komisi')
                                          ->join('partai', 'partai.partai_id = anggota_dewan.ad_fraksi')
                                          ->where('komisi_nama', $nama)
                                          ->findAll();
            $data = [
                'title' => $nama.' | DPRD Halteng',
                'komisi' => $komisi,
                'anggota_komisi' => $anggota
            ];
        }

        return view('v_detail-komisi', $data);
    }

    public function blog_kategori($slug)
    {
        helper('index_helper');

        $pager = \Config\Services::pager();
        $jenis_berita = $this->jbModel->findAll();

        $jenisBeritaBySlug = $this->jbModel->where('jb_slug', $slug)->first();

        $beritaTerbaru = $this->beritaModel->join('jenis_berita', 'jenis_berita.jb_id = berita.berita_jenis')
                                            ->orderBy('berita_id', 'DESC')
                                            ->paginate(5);

        
        $beritaPopuler = $this->beritaModel->join('jenis_berita', 'jenis_berita.jb_id = berita.berita_jenis')
                                            ->orderBy('berita_viewers', 'DESC')
                                            ->paginate(5);

        if ($slug == 'berita-utama'){
            $namaJenisBerita = 'Berita Utama';

            $berita = $this->beritaModel->join('jenis_berita', 'jenis_berita.jb_id = berita.berita_jenis')
                                        ->where('berita_utama', 'yes')
                                        ->paginate(5);
                                        // ->findAll();

            $beritaPager = $this->beritaModel->join('jenis_berita', 'jenis_berita.jb_id = berita.berita_jenis')
                                            ->where('berita_utama', 'yes')
                                            ->pager;
        }else{
            $namaJenisBerita = $jenisBeritaBySlug['jb_nama'];

            $berita = $this->beritaModel->join('jenis_berita', 'jenis_berita.jb_id = berita.berita_jenis')
                                        ->where('jb_slug', $slug)
                                        ->paginate(5);

            $beritaPager = $this->beritaModel->join('jenis_berita', 'jenis_berita.jb_id = berita.berita_jenis')
                                        ->where('jb_slug', $slug)
                                        ->pager;
        }
        
        $data = [
            'title' => $namaJenisBerita.' | DPRD Halteng',
            'jenis_berita' => $jenis_berita,
            'berita' => $berita,
            'slug_jenis' => $slug,
            'namaJenisBerita' => $namaJenisBerita,
            'pager' => $beritaPager,
            'beritaTerbaru' => $beritaTerbaru,
            'beritaPopuler' => $beritaPopuler
        ];

        return view('v_blog-kategori', $data);
    }
}
