<title>Buat Pengumuman</title>

<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Dashboard-->
        <!--begin::Row-->
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Buat pengumuman</h3>
                </div>
            </div>
            <div class="card-body">
                <?= form_open('/admin/pengumuman/create'); ?>
                    <div class="form-group">
                        <label for="pengumuman_judul">Judul</label> 
                        <input type="text" class="form-control" id="pengumuman_judul" name="pengumuman_judul">
                    </div>
                    <div class="form-group">
                        <label for="pengumuman_isi">Isi</label>
                        <textarea 
                            name="pengumuman_isi" 
                            id="ckeditor" 
                            cols="30" 
                            rows="10" 
                            class="form-control"
                        >
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="pengumuman_user_id">User Id</label>
                        <input type="text" class="form-control" id="pengumuman_user_id" name="pengumuman_user_id">
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
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js');?>"></script>
<script type='text/javascript'>
$('.preloader').fadeOut();

$(function () {
    CKEDITOR.replace('ckeditor');
});
</script>