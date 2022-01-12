<?php $this->extend('layout/_template'); ?>

<?php $this->section('content'); ?>

    <div class="banner">
        <div style="background-image: url(../assets/pexels-fauxels-3184291.jpg); background-size: cover; background-position: center; width: 100%; height: 500px;">
        </div>
        <div class="msk-banner-2"></div>

    </div>

<?= $this->include('layout/_navbar') ?>

    <div class="partai-section-1 py-4">
        <div class="container ">
            <?php foreach ($barkas as $barkas) { ?>
            <div class="card px-3 rounded-0 border-0 shadow-sm mb-3">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-sm-12 py-3">
                        <img class="w-100" src="<?php echo base_url('assets/barkas/'.$barkas['barkas_gambar']) ?>" alt="<?php echo $barkas['barkas_nama']; ?>">      
                    </div>
                    <div class="col-lg-6 col-sm-12 mt-3">
                        <?php echo $barkas['barkas_nama']; ?>
                        <br>
                        <?php echo 'Rp '.number_format($barkas['barkas_harga'] ,2,',','.'); ?>
                        <br>
                        <br>
                        <?php echo $barkas['barkas_kontak']." ( ".$barkas['barkas_pemilik']." ) "; ?>
                        <br>
                         <a href="<?php echo $barkas['barkas_wa']; ?>">Hubungi penjual</a> 
                        <br>
                    </div>
                    <div class="col-lg-2 col-sm-12 py-3">
                        <div class="d-flex me-5">
                            <div>
                                <i class="fas fa-user"></i>
                            </div> 
                            <!-- <div class="ms-2">
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-1 col-sm-12 py-3">
                        <div class="text-center">
                            <i class="fas fa-chevron-circle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

<?php $this->endSection(); ?>