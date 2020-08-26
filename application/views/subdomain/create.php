<title>Tambah Sub Domain</title>

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
                    <h3 class="card-label">Tambah Sub Domain</h3>
                </div>
            </div>
            <div class="card-body">
                <?= form_open('/admin/subdomain/store'); ?>
                    <!-- begin::link-subdomain -->
                    <div class="form-group">
                        <label for="sub_domain_link">Link</label> 
                        <input 
                            type="text" 
                            class="form-control" 
                            id="sub_domain_link" 
                            name="sub_domain_link" 
                            required
                        >
                    </div>
                    <!-- end::link-subdomain -->
                    <!-- begin::deskripsi-subdomain -->
                    <div class="form-group">
                        <label for="sub_domain_deskripsi">Deskripsi</label> 
                        <input 
                            type="text" 
                            class="form-control" 
                            id="sub_domain_deskripsi" 
                            name="sub_domain_deskripsi" 
                            required
                        >
                    </div>
                    <!-- end::deskripsi-subdomain -->
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