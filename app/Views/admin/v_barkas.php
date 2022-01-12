<?php $this->extend('admin/layout/_template'); ?>

<?php $this->section('content'); ?>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Partai</h1>
                    </div>
                    <div class="col-sm-6">
                        <!-- <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('/admin') ?>">Home</a></li>
                            <li class="breadcrumb-item active">Partai</li>
                        </ol> -->
                        <div class="float-sm-right">
                            <button data-bs-toggle="modal" data-bs-target="#tambahModal" type="button" class="btn btn-dark me-2">Tambah Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="content">
            <div class="container-fluid">
                <div class="bg-white p-3 shadow-sm" style="min-height: 600px;">
                    <div>
                        <input type="text" id="cari" class="form-control" placeholder="search">
                    </div>
                    <div class="table-responsive mt-3">
                    <table id="data-tabel" class="table">
                        <thead class="blue-saphire text-black">
                            <tr>
                                <th scope="col">Barkas</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Pemilik</th>
                                <th scope="col">Kontak</th>
                                <th scope="col">foto</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white text-dark">
                            <?php 
                                // perulangan foreach
                                foreach ($barkas_pending as $isi) :
                            ?>
                            <tr id="<?= $isi['barkas_id'];?>" gambar="<?= $isi['barkas_gambar'];?>">
                                <td><?= $isi['barkas_nama'];?></td>
                                <td><?php echo 'Rp '.number_format($isi['barkas_harga'] ,2,',','.'); ?></td>
                                <td><?= $isi['barkas_pemilik'];?></td>
                                <td><?= $isi['barkas_kontak'];?></td>
                                <td>
                                    <img src="assets/barkas/<?= $isi['barkas_gambar'];?>" width="100">
                                </td>
                                
                                <td style="width: 100px;" class="pl-4">
                                    <a href="<?= base_url('admin/news/'.$isi['barkas_id'].'/preview') ?>" class="btn btn-sm btn-primary" target="_blank">Aktivasi</a>
                                    <a href="#" data-href="<?= base_url('admin/news/'.$isi['barkas_id'].'/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php 
                                endforeach;
                            ?>
                        </tbody>
                    </table>
                        <div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="h2">Are you sure?</h2>
        <p>The data will be deleted and lost forever</p>
      </div>
      <div class="modal-footer">
        <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
function confirmToDelete(el){
    $("#delete-button").attr("href", el.dataset.href);
    $("#confirm-dialog").modal('show');
}
</script>

<?php $this->endSection(); ?>