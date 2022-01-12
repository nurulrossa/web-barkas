<?php $this->extend('admin/layout/_template'); ?>

<?php $this->section('content'); ?>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div>
        </div>
    
        <div class="content">
            <div class="container-fluid pb-5">
                
                <div class="row">
                    <div class="col-lg-3 col-sm-12">
                        
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>1</h3>

                                <p>Pending</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="<?php echo base_url('/barkas-data') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                        
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>2</h3>

                                <p>Ada</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="<?php echo base_url('/komisi-data') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>3</h3>

                                <p>Sold Out</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>0</h3>

                                <p>Pengunjung</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $this->endSection(); ?>