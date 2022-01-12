<?php $this->extend('admin/layout/_template'); ?>

<?php $this->section('content'); ?>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Admin</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('/admin') ?>">Home</a></li>
                            <li class="breadcrumb-item active">Admin</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="content">
            <div class="container-fluid pb-5">
                <?php if (session()->getFlashdata('pesan')) : ?>

                <div class="swal" data-swal="<?php echo session()->getFlashdata('pesan') ?>">

                </div>

                <?php endif; ?>

                <div class="bg-white shadow-sm p-3" style="min-height: 600px;">
                    <form class="p-lg-5" id="formAdmin" action="<?php echo base_url('Admin/editAdmin') ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="admin_id" value="<?php echo $admin['admin_id']; ?>">
                        <div class="mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" name="admin_nama" class="form-control <?php if(session('validation.admin_nama')) : ?>is-invalid<?php endif ?>" value="<?php echo $admin['admin_nama']; ?>">
                            <div class="invalid-feedback">
							    <?php echo session('validation.admin_nama'); ?>
						    </div>
                        </div>
                        <div class="mb-3">
                            <label for="username">Username</label>
                            <input type="text" name="admin_username" class="form-control <?php if(session('validation.admin_username')) : ?>is-invalid<?php endif ?>" value="<?php echo $admin['admin_username']; ?>">
                            <div class="invalid-feedback">
							    <?php echo session('validation.admin_username'); ?>
						    </div>
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <div class="row">
                                <div class="col-lg-10 col-sm-12 mb-3">
                                    <input type="password" class="form-control" readonly value="*******">
                                </div>
                                <div class="col-lg-2 col-sm-12 mb-3">
                                    <a href="<?php echo base_url('password-admin') ?>" class="btn btn-outline-dark w-100" id="btn-password"> ubah password </a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 d-flex flex-row-reverse">
                            <input type="submit" class="btn btn-dark" value="Update Profil">
                        </div>
                    </form>
                </div>
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
                    html: 'Data Admin berhasil diubah, selanjutnya anda diharuskan untuk login kembali',
                    confirmButtonColor: '#007CF2'
                    // footer: '<a href="">Why do I have this issue?</a>'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '<?php echo base_url('/logout') ?>';
                    }
                })
            }
        });
    </script>

<?php $this->endSection(); ?>