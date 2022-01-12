<?php $this->extend('layout/_template'); ?>

<?php $this->section('content'); ?>

    <!-- banner -->
    <div class="banner">
        <div style="background-image: url(../assets/pexels-fauxels-3184357.jpg); background-size: cover; background-position: center; width: 100%; height: 500px;">
        </div>
        <div class="msk-banner-2"></div>

    </div>

<?= $this->include('layout/_navbar') ?>

    <?php if (session()->getFlashdata('pesan')) : ?>

        <div class="swal" data-swal="<?php echo session()->getFlashdata('pesan') ?>">
            
        </div>

    <?php endif; ?>

    <div class="aspirasi-section-2">
        <div class="container">
            <?php if(session()->getFlashdata('pesan')) : ?>
                <div class="swal-pesan" data-swal="<?php echo session()->getFlashdata('pesan') ?>"></div>
            <?php endif; ?>
            <form class="form" method="post" action="<?php echo base_url('user/save_barkas') ?>"  enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="mb-2">Upload Gambar</label>
                    <input type="file" name="gambar" class="form-control <?php if(session('validation.gambar')) : ?>is-invalid<?php endif ?>" value="<?= old('gambar') ?>">
                    <div class="invalid-feedback">
                        <?php echo session('validation.gambar'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="mb-2">Nama Barang</label>
                    <input type="text" name="nama" class="form-control <?php if(session('validation.nama')) : ?>is-invalid<?php endif ?>" value="<?= old('nama') ?>">
                    <div class="invalid-feedback">
                        <?php echo session('validation.nama'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="mb-2">Harga</label>
                    <input type="text" name="harga" class="form-control <?php if(session('validation.harga')) : ?>is-invalid<?php endif ?>" value="<?= old('harga') ?>">
                    <div class="invalid-feedback">
                        <?php echo session('validation.harga'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="mb-2">Pemilik</label>
                    <input type="text" name="pemilik" class="form-control <?php if(session('validation.pemilik')) : ?>is-invalid<?php endif ?>" value="<?= old('pemilik') ?>">
                    <div class="invalid-feedback">
                        <?php echo session('validation.pemilik'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="mb-2">Kontak</label>
                    <input type="text" name="kontak" class="form-control <?php if(session('validation.kontak')) : ?>is-invalid<?php endif ?>" value="<?= old('kontak') ?>">
                    <div class="invalid-feedback">
                        <?php echo session('validation.kontak'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="mb-2">Link WA</label>
                    <input type="text" class="form-control" name="wa">
                </div>
                <div class="mb-3">
                    <label class="mb-2">Deskripsi</label>
                    <textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3 mt-5 text-center">
                    <button type="submit" value="submit" class="btn btn-light">Daftar Barkas </button>
                    <!-- <a href="#" >Sampaikan</a> -->
                </div>
            </form>
        </div>
    </div>

    <div class="aspirasi-section-3 position-relative">
        <div class="banner" style="background-image: url(../assets/pexels-rebrand-cities-1367269.jpg); background-attachment: fixed; background-size: cover; background-position: center; width: 100%; height: 100%;">
        </div>
        <div class="mask"></div>
        
        <div class="container">
            <div class="tittle-1 text-white position-absolute top-50 start-50 translate-middle text-center">
                Silahkan Lakukan Mengirim Bukti Pembayaran Transaksi Anda melalui tautan berikut!
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            const swal = $('.swal').data('swal');

            if (swal) {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    html: 'Silahkan lakukan pembayaran 10k melalui no rek 123456 atas nama Nurul Rossa!',
                    confirmButtonColor: '#007CF2'
                    // footer: '<a href="">Why do I have this issue?</a>'
                });
            }
        })
    </script>

<?php $this->endSection(); ?>