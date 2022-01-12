<?php $this->extend('admin/layout/_template'); ?>

<?php $this->section('content'); ?>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Edit Password</h1>
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
                    <form class="p-lg-5" id="formPassword" action="<?php echo base_url('Admin/editPassword') ?>" method="post" enctype="multipart/form-data">
                        <?php if (session()->getFlashdata('error')) : ?>
                            <div class="alert alert-danger">
                                <?php echo session('error'); ?>
                            </div>
                        <?php endif; ?>

                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="admin_id" value="<?php echo $admin['admin_id']; ?>">

                        <div class="mb-3">
                            <label for="password_lama">Password Lama</label>
                            <input type="password" name="password_lama" class="form-control <?php if(session('validation.password_lama')) : ?>is-invalid<?php endif ?>" placeholder="Masukkan Password lama">
                            <div class="invalid-feedback">
							    <?php echo session('validation.password_lama'); ?>
						    </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="password_baru">Password Baru</label>
                                    <input type="password" name="password_baru" class="form-control <?php if(session('validation.password_baru')) : ?>is-invalid<?php endif ?>" placeholder="Masukkan Password Baru">
                                    <div class="invalid-feedback">
                                        <?php echo session('validation.password_baru'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="password_baru">Verifikasi Password</label>
                                    <input type="password" name="password_baru2" class="form-control <?php if(session('validation.password_baru2')) : ?>is-invalid<?php endif ?>" placeholder="Verifikasi Password Baru">
                                    <div class="invalid-feedback">
                                        <?php echo session('validation.password_baru2'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 d-flex flex-row-reverse">
                            <input type="submit" class="btn btn-dark" value="Update Password">
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