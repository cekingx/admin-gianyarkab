<title>Tambah Bupati</title>

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
                    <h3 class="card-label">Tambah Bupati</h3>
                </div>
            </div>
            <div class="card-body">
                <?= form_open('/admin/jabatan-bupati/store', 'enctype="multipart/form-data"'); ?>
                    <!-- begin::nama-bupati -->
                    <div class="form-group">
                        <label for="jabatan_bupati_nama">Nama Bupati</label> 
                        <input 
                            type="text" 
                            class="form-control" 
                            id="jabatan_bupati_nama" 
                            name="jabatan_bupati_nama" 
                            required
                        >
                    </div>
                    <!-- end::nama-bupati -->
                    <!-- begin::foto -->
                    <div class="form-group">
                        <label for="jabatan_bupati_foto">Foto</label> 
                        <input 
                            type="file" 
                            class="form-control" 
                            id="jabatan_bupati_foto" 
                            name="jabatan_bupati_foto" 
                            required
                        >
                    </div>
                    <!-- end::foto -->
                    <!-- begin::masa-jabatan -->
                    <div class="form-group">
                        <label for="jabatan_bupati_nama">Masa Jabatan</label> 
                        <input 
                            type="text" 
                            class="form-control" 
                            id="jabatan_bupati_masa_jabatan" 
                            name="jabatan_bupati_masa_jabatan" 
                            required
                        >
                    </div>
                    <!-- end::masa-jabatan -->
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