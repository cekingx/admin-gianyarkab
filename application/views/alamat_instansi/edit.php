<title><?= $title ?></title>

<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Dashboard-->
        <!--begin::Row-->
        <!-- begin::notification -->
        <?php if(isset($error)) {
            echo('
            <div class="alert alert-danger alert-dismissable fade show" role="alert">
                <h4 class="alert-heading">Error</h4>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <hr>'
                . $error .
            '</div>
            ');
        } ?>
        <!-- end::notification -->
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Edit Alamat Instansi</h3>
                </div>
            </div>
            <div class="card-body">
                <?= form_open('/admin/alamat-instansi/update'); ?>
                    <!-- begin::id-instansi -->
                    <input 
                        type="hidden" 
                        name="alamat_instansi_id" 
                        value="<?= $alamat_instansi['alamat_instansi_id'] ?>"
                    >
                    <!-- end::id-instansi -->
                    <!-- begin::nama-instansi -->
                    <div class="form-group">
                        <label for="alamat_instansi_nama">Nama Instansi</label> 
                        <input 
                            type="text" 
                            class="form-control" 
                            id="alamat_instansi_nama" 
                            name="alamat_instansi_nama" 
                            value="<?= $alamat_instansi['alamat_instansi_nama'] ?>"
                            required
                        >
                    </div>
                    <!-- end::nama-instansi -->
                    <!-- begin::alamat-instansi -->
                    <div class="form-group">
                        <label for="alamat_instansi_alamat">Alamat Instansi</label> 
                        <input 
                            type="text" 
                            class="form-control" 
                            id="alamat_instansi_alamat" 
                            name="alamat_instansi_alamat" 
                            value="<?= $alamat_instansi['alamat_instansi_alamat'] ?>"
                            required
                        >
                    </div>
                    <!-- end::alamat-instansi -->
                    <!-- begin::telepon-instansi -->
                    <div class="form-group">
                        <label for="alamat_instansi_telp">Telepon Instansi</label> 
                        <input 
                            type="text" 
                            class="form-control" 
                            id="alamat_instansi_telp" 
                            name="alamat_instansi_telp" 
                            value="<?= $alamat_instansi['alamat_instansi_telp'] ?>"
                            required
                        >
                    </div>
                    <!-- end::telepon-instansi -->
                    <!-- begin::email-instansi -->
                    <div class="form-group">
                        <label for="alamat_instansi_email">Email Instansi</label> 
                        <input 
                            type="email" 
                            class="form-control" 
                            id="alamat_instansi_email" 
                            name="alamat_instansi_email" 
                            value="<?= $alamat_instansi['alamat_instansi_email'] ?>"
                            required
                        >
                    </div>
                    <!-- end::email-instansi -->
                    <button type="submit" class="btn btn-success">Simpan</button>
                <?= form_close(); ?>
            </div>
        </div>
        <!--end::Card-->
        <!--end::Dashboard-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->

<script type='text/javascript'>
$('.preloader').fadeOut();
</script>