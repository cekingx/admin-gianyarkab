<title>Edit Pengumuman</title>

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
                    <h3 class="card-label">Edit pengumuman</h3>
                </div>
            </div>
            <div class="card-body">
                <?= form_open('/admin/pengumuman/update'); ?>
                    <input 
                        type="hidden" 
                        name="pengumuman_id" 
                        value="<?= $pengumuman['pengumuman_id'] ?>"
                    >
                    <div class="form-group">
                        <label for="pengumuman_judul">Judul</label> 
                        <input 
                            type="text" 
                            class="form-control" 
                            id="pengumuman_judul" 
                            name="pengumuman_judul" 
                            value="<?= $pengumuman['pengumuman_judul'] ?>"
                            required
                        >
                    </div>
                    <div class="form-group">
                        <label for="pengumuman_isi">Isi</label>
                        <textarea 
                            name="pengumuman_isi" 
                            id="pengumuman_isi" 
                            class="form-control"
                            required
                        ><?= $pengumuman['pengumuman_isi'] ?></textarea>
                    </div>
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

<script src="<?php echo base_url('assets/jquery/jquery-3.5.1.min.js');?>"></script>
<script src="<?php echo base_url('assets/ckeditor-full/ckeditor.js');?>"></script>
<script type='text/javascript'>
$('.preloader').fadeOut();

$(function () {
    CKEDITOR.replace('pengumuman_isi');
});
</script>