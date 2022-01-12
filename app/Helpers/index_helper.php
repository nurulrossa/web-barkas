<?php 
use App\Models\KomentarberitaModel;
use App\Models\AnggotaModel;
use App\Models\GaleriModel;
use App\Models\InfoModel;

//if(!defined('BASEPATH')) exit('No direct script access allowed');
function jumlah_comment($berita_id)
{
    $commentModel = new KomentarberitaModel;
    $comment = $commentModel->where('cb_berita', $berita_id)->findAll();

    return count($comment);
}

function jumlah_anggota($partai_id)
{
    $anggotaModel = new AnggotaModel;
    $anggota = $anggotaModel->where('ad_fraksi', $partai_id)->findAll();

    return count($anggota);
}

function anggota_komisi($komisi_id)
{
    $anggotaModel = new AnggotaModel;
    $anggota = $anggotaModel->where('ad_komisi', $komisi_id)->findAll();

    return count($anggota);
}

function galeri($id)
{
    $galeriModel = new GaleriModel;
    $galeri = $galeriModel->where('galeri_kegiatan', $id)->findAll();

    return $galeri;
}

function tentang()
{
    $infoModel = new InfoModel;
    $info = $infoModel->first();
    return $info['info_dprd'];
}

function alamat()
{
    $infoModel = new InfoModel;
    $info = $infoModel->first();
    return $info['info_alamat'];
}

?>